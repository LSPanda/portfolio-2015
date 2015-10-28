<?php snippet('header') ?>

    <div class="wrapper__text">
        <h2 class="alpha works__title"><?php echo( $page->heading() ) ?></h2>
        <p class="lettrine">
            <?php echo( $page->text()->html() ) ?>
        </p>
    </div>

    <section class="blog">
        <h2 class="hidden"><?php echo( $page->hiddenheading() ) ?></h2>
        <?php foreach( $page->children() as $blog ): ?>
            <?php snippet( 'blog', array( 'blog' => $blog ) ) ?>
        <?php endforeach ?>


      <!-- <div class="pagination">
          <span class="inline-block pagination__element">
              <a href="#" class="block removeLink pagination__element">&lang;&lang;</a>
          </span>
          <span class="inline-block pagination__element">
              <a href="#" class="block pagination__element--current">1</a>
          </span>
          <span class="inline-block pagination__element">
              <a href="#" class="block pagination__element">2</a>
          </span>
          <span class="inline-block pagination__element">
              <a href="#" class="block pagination__element">3</a>
          </span>
          <span class="inline-block pagination__element">
              <a href="#" class="block removeLink pagination__element">&rang;&rang;</a>
          </span>
      </div> -->
    </section>
<?php snippet('footer') ?>
