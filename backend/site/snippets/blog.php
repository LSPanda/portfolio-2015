<article class="blogs">
    <a href="<?php echo(  $blog->url() ) ?>" class="removeLink">
        <div class="blogs__block blogs__block--title">
            <h3 class="gamma"><?php echo(  $blog->heading() ) ?></h3><span class="blogs__date"><?php echo(  $blog->postingdate() ) ?></span>
        </div>
        <img src="<?php echo( $blog->image( 'thumb.jpg' )->url() ) ?>" alt="<?php echo( $blog->image( 'thumb.jpg' )->alt() ) ?>" class="blogs__img">
        <div class="blogs__block">
            <p>
                <?php echo(  $blog->exerc() ) ?>
            </p>
        </div>
    </a>
</article>
