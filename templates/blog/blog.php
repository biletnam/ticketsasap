
<!-- Blog -->
<div class="docs-section examples" id="examples">
  <h6 class="docs-header"><?php archiveHeader( $data, 'My Blog' ); ?></h6>
  <?php if( hasRecords() ): while( hasRecords() ): theRecord(); ?>
  <div class="row example">
    <a class="example-screenshot-wrapper" target="_blank" href="<?php echo( recordLink() ); ?>">
      <?php theImage("100%", "", "example-screenshot"); ?>
    </a>
    <div class="one-half offset-by-one-half column">
      <h6 class="example-header"><?php theTitle(); ?></h6>
      <p class="example-description"><?php theExcerpt(300); ?></p>
      <h6><?php theCategories('pill'); ?></h6>
      <?php theLink('FULL POST', 'button button-primary'); ?>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>
