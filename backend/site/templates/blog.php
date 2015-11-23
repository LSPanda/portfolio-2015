<?php snippet('header') ?>

    <section>
        <div class="wrapper__text blog__thumbnails">
            <h2 class="alpha blog__title"><?php echo( $page->heading() ) ?></h2><span class="epsilon blog__date"><?php echo( $page->postingdate() ) ?></span>
            <?php echo( kirbytext( $page->text() ) ) ?>
            <a href="<?php echo( $page->parent()->url() ) ?>">Revenir à la liste des articles</a>
        </div>
    </section>

<?php snippet('footer') ?>
