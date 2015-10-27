<nav class="inline-block navigation">
  <h2 class="hidden">Navigation à travers mon portfolio</h2>
    <span class="navigation__element"><a href="<?php echo( url() ) ?>" class="element__link animateLink">Accueil</a></span>
    <?php foreach( $pages->visible() as $p ): ?>
        <span class="navigation__element"><a href="<?php echo( $p->url() ) ?>" class="element__link animateLink"><?php echo( $p->title()->html() ) ?></a></span>
    <?php endforeach; ?>
</nav>
