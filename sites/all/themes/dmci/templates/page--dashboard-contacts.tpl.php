<div class="contacts row">
  <div class="clear-both"></div>

  <div class="contact-container">
    <?php $view = views_get_view('contacts'); ?>
    <?php print $view->render('block_1'); ?>
  </div>
</div>

<style>
.contacts {
 margin-top: -10px;
}
</style>
