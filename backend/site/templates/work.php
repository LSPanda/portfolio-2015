<?php snippet('header') ?>

    <div class="wrapper__text">
          <h2 class="alpha works__title"><?php echo( $page->title() ) ?></h2><span class="epsilon work__utilities"><?php echo( $page->tags() ) ?></span>
          <?php echo( $page->text() ) ?>
    </div>

<?php snippet('footer') ?>
