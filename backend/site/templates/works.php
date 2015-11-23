<?php snippet('header') ?>

    <div class="wrapper__text">
        <h2 class="alpha works__title"><?php echo( $page->heading() ) ?></h2>
        <p class="lettrine">
            <?php echo( $page->text()->html() ) ?>
        </p>
    </div>

    <section class="works correct__inline-block">
        <?php $works = $page->children()->flip()->paginate(6) ?>
        <h2 class="hidden"><?php echo( $page->hiddenheading() ) ?></h2>
        <?php foreach( $works as $work ): ?>
            <?php snippet( 'work', array( 'work' => $work ) ) ?>
        <?php endforeach ?>

        <?php if($works->pagination()->hasPages()): ?>
            <div class="pagination">

                <?php if($works->pagination()->hasNextPage()): ?>
                    <span class="inline-block pagination__element">
                        <a href="<?php echo( $works->pagination()->nextPageURL() )?>" class="block removeLink pagination__element">&rang;&rang;</a>
                    </span>
                <?php endif ?>

                <?php if($works->pagination()->hasPrevPage()): ?>
                <span class="inline-block pagination__element">
                    <a href="<?php echo( $works->pagination()->prevPageURL() )?>" class="block removeLink pagination__element">&lang;&lang;</a>
                </span>
                <?php endif ?>

            </div>
        <?php endif ?>

    </section>
<?php snippet('footer') ?>
