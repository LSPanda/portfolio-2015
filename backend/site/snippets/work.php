<article class="inline-block work">
    <h3 class="hidden"><?php echo( $work->hiddenheading() ) ?></h3>
    <a href="<?php echo(  $work->url() ) ?>" class="removeLink">
        <figure class="work__block"><img src="<?php echo( $work->image( 'thumb.jpg' )->url() ) ?>" alt="Image de travail" class="work__image">
            <figcaption class="work__caption">
                <div class="work__title"><span class="gamma work__title-head"><?php echo( $work->heading() ) ?></span>
                    <div class="work__title-line"></div>
                    <p><?php echo(  $work->tags() ) ?></p>
                </div>
            </figcaption>
        </figure>
    </a>
</article>
