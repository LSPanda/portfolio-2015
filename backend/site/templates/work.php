<?php snippet('header') ?>

    <div class="wrapper__text">
        <h2 class="alpha works__title"><?php echo( $page->heading() ) ?></h2>
        <span class="epsilon work__utilities"><?php echo( $page->tags() ) ?></span>
        <p class="lettrine">
            <?php echo( kirbytext( $page->text() ) ) ?>
        </p>
        <a href="<?php echo( $page->parent()->url() ) ?>">&larr; Revenir à la liste des travaux</a>
    </div>

<?php snippet('footer') ?>
