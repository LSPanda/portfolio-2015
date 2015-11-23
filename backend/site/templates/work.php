<?php snippet('header') ?>

    <div class="wrapper__text">
        <h2 class="alpha works__title"><?php echo( $page->heading() ) ?></h2>
        <span class="epsilon work__utilities"><?php echo( $page->tags() ) ?></span>
        <?php echo( kirbytext( $page->text() ) ) ?>
        <a href="<?php echo( $page->parent()->url() ) ?>">Revenir à la liste des travaux</a>
    </div>

<?php snippet('footer') ?>
