<?php
/**
 * @file
 * Class openlayers_map.
 */

namespace Drupal\openlayers\Types;

/**
 * Class openlayers_map.
 */
abstract class Map extends Object implements MapInterface {

  /**
   * @var string
   */
  protected $id;

  /**
   * {@inheritdoc}
   */
  public function init(array $data) {
    parent::init($data);

    $this->setOption('target', $this->getId());
  }

  /**
   * {@inheritdoc}
   */
  public function buildCollection() {
    parent::buildCollection();

    $ol_types = array(
      'source',
      'layer',
      'control',
      'interaction',
      'component',
      'projection',
    );
    foreach ($ol_types as $type) {
      foreach ($this->getOption($type . 's', array()) as $object) {
        // @TODO Throw proper exception if an object isn't available?
        if ($merge_object = openlayers_object_load($type, $object)) {
          $this->getCollection()->merge($merge_object->getCollection());
        }
      }
    }

    return $this->getCollection();
  }

  /**
   * {@inheritdoc}
   */
  public function getId() {
    if (!isset($this->id)) {
      $css_map_name = drupal_clean_css_identifier($this->machine_name);
      // Use uniqid to ensure we've really an unique id - otherwise there will
      // occur issues with caching.
      $this->id = drupal_html_id('openlayers-map-' . $css_map_name . '-' . uniqid('', TRUE));
    }

    return $this->id;
  }

  /**
   * {@inheritdoc}
   */
  public function getLayers($reset = FALSE) {
    return array_values($this->getCollection()->getObjects('layer'));
  }

  /**
   * {@inheritdoc}
   */
  public function getSources($reset = FALSE) {
    return array_values($this->getCollection()->getObjects('source'));
  }

  /**
   * {@inheritdoc}
   */
  public function getStyles($reset = FALSE) {
    return array_values($this->getCollection()->getObjects('style'));
  }

  /**
   * {@inheritdoc}
   */
  public function getControls($reset = FALSE) {
    return array_values($this->getCollection()->getObjects('control'));
  }

  /**
   * {@inheritdoc}
   */
  public function getInteractions($reset = FALSE) {
    return array_values($this->getCollection()->getObjects('interaction'));
  }

  /**
   * {@inheritdoc}
   */
  public function getComponents($reset = FALSE) {
    return array_values($this->getCollection()->getObjects('component'));
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $map = $this;
    $build = array();

    // Run prebuild hook to all objects who implements it.
    $map->preBuild($build, $map);

    $asynchronous = 0;
    foreach ($map->getCollection()->getFlatList() as $object) {
      // Check if this object is asynchronous.
      $asynchronous += (int) $object->isAsynchronous();
    }

    $settings = $map->getCollection()->getJS();
    $settings['map'] = $settings['map'][0];
    $settings = array(
      'data' => array(
        'openlayers' => array(
          'maps' => array(
            $map->getId() => $settings,
          ),
        ),
      ),
      'type' => 'setting',
    );

    // If this is asynchronous flag it as such.
    if ($asynchronous) {
      $settings['data']['openlayers']['maps'][$map->getId()]['map']['async'] = $asynchronous;
    }

    $attached = $map->getCollection()->getAttached();
    $attached['js'][] = $settings;

    $styles = array(
      'width' => $map->getOption('width'),
      'height' => $map->getOption('height'),
      'overflow' => 'hidden',
    );

    $css_styles = '';
    foreach ($styles as $property => $value) {
      $css_styles .= $property . ':' . $value . ';';
    }

    $build += array(
      '#type' => 'container',
      '#attributes' => array(
        'id' => 'openlayers-container-' . $map->getId(),
        'style' => $css_styles,
        'class' => array(
          'contextual-links-region',
          'openlayers-container',
        ),
      ),
      'map' => array(
        '#theme' => 'html_tag',
        '#tag' => 'div',
        '#value' => '',
        '#attributes' => array(
          'id' => $map->getId(),
          'class' => array(
            'openlayers-map',
            $map->machine_name,
          ),
        ),
        '#attached' => $attached,
      ),
    );

    // If this is an asynchronous map flag it as such.
    if ($asynchronous) {
      $build['map']['#attributes']['class'][] = 'asynchronous';
    }

    $map->postBuild($build, $map);

    return $build;
  }

  public function getJS() {
    $js = parent::getJS(); // TODO: Change the autogenerated stub
    unset($js['opt']['layers']);
    unset($js['opt']['projections']);
    unset($js['opt']['sources']);
    unset($js['opt']['controls']);
    unset($js['opt']['styles']);
    unset($js['opt']['interactions']);
    unset($js['opt']['components']);

    // Add the id to the JS settings.
    $js['map_id'] = $this->getId();

    return $js;
  }


}
