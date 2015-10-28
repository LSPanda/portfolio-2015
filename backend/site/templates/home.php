<?php snippet('header') ?>

    <div class="cover">
        <img src="assets/images/logo.svg" alt="Logo de Simon&amp;You. Code, design and Print" class="cover__logo">
        <img src="assets/images/animeMouse.svg" alt="Animation représentant une souris d’ordinateur" class="cover__mouse">
        <img src="assets/images/animeArrow.svg" alt="Animation représentant une flèche pointant vers le bas" class="cover__arrow bounce">
    </div>
    <div class="wrapper__text">
        <h2 class="hidden"><?php echo( $page->heading() ) ?></h2>
        <p class="lettrine">
            <?php echo( $page->text()->html() ) ?>
        </p>
    </div>
    
<?php snippet('footer') ?>
