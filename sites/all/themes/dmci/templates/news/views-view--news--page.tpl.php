<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="article">
  <div ng-show="data.status">{{data.status}}</div>
  <!-- Iterate the result. Equivalent to foreach in php. -->
  <div ng-repeat="article in data track by article.node.Nid">
    <h2>{{article.node.title}}</h2>
    <div class="body">{{article.node.Body}}</div>
    <div class="image"><img src="{{article.node.Image}}" /></div>
  </div>
</div>
