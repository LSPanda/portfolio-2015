<?php snippet('header') ?>

    <div class="wrapper__text">
        <h2 class="alpha works__title"><?php echo( $page->heading() ) ?></h2>
        <p class="lettrine">
            <?php echo( $page->text()->html() ) ?>
        </p>
    </div>

    <section class="blog">
        <?php $blogs = $page->children()->paginate(3) ?>
        <h2 class="hidden"><?php echo( $page->hiddenheading() ) ?></h2>
        <?php foreach( $blogs as $blog ): ?>
            <?php snippet( 'blog', array( 'blog' => $blog ) ) ?>
        <?php endforeach ?>

        <?php if($blogs->pagination()->hasPages()): ?>
            <div class="pagination">

                <?php if($blogs->pagination()->hasNextPage()): ?>
                    <span class="inline-block pagination__element">
                        <a href="<?php echo( $blogs->pagination()->nextPageURL() )?>" class="block removeLink pagination__element">&rang;&rang;</a>
                    </span>
                <?php endif ?>

                <?php if($blogs->pagination()->hasPrevPage()): ?>
                <span class="inline-block pagination__element">
                    <a href="<?php echo( $blogs->pagination()->prevPageURL() )?>" class="block removeLink pagination__element">&lang;&lang;</a>
                </span>
                <?php endif ?>

            </div>
        <?php endif ?>
    </section>
<?php snippet('footer') ?>
