<?php snippet('header') ?>

    <section>
        <img src="<?php echo( $page->image( 'thumb.jpg' )->url() ) ?>" alt="<?php echo( $page->image( 'thumb.jpg' )->alt() ) ?>" class="blog__thumbnails">
        <div class="wrapper__text">
            <h2 class="alpha blog__title"><?php echo( $page->heading() ) ?></h2><span class="epsilon blog__date"><?php echo( $page->postingdate() ) ?></span>
            <p class="lettrine">
                <?php echo( kirbytext( $page->text() ) ) ?>
            </p>
            <a href="<?php echo( $page->parent()->url() ) ?>">&larr; Revenir à la liste des articles</a>
        </div>
    </section>

<?php snippet('footer') ?>
