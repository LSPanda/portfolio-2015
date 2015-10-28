<?php snippet('header') ?>

    <div class="wrapper__text">
        <h2 class="alpha works__title"><?php echo( $page->heading() ) ?></h2>
        <span class="epsilon work__utilities"><?php echo( $page->tags() ) ?></span>
        <p class="lettrine">
            <?php echo( $page->text()->html() ) ?>
        </p>

    </div>

    <section class="works correct__inline-block">
        <h2 class="hidden">Conception du projet <?php echo( $page->heading() ) ?></h2>
        <?php foreach( $page->images() as $image ): ?>
            <a href="<?php echo( $image->url() ) ?>" data-fresco-group="work" data-fresco-caption="<?php echo( $image->caption() ) ?>" class="inline-block fresco work"><img src="<?php echo( $image->url() ) ?>" alt="<?php echo( $image->alt() ) ?>" class="fresco__hightlight"></a>
        <?php endforeach ?>
    </section>

<?php snippet('footer') ?>
