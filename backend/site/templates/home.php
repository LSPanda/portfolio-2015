<?php snippet('header') ?>

    <div class="cover">
        <img src="assets/images/logo.svg" alt="Logo de Simon&amp;You. Code, design and Print" class="cover__logo">
        <img src="assets/images/animeMouse.svg" alt="Animation représentant une souris d’ordinateur" class="cover__mouse">
        <img src="assets/images/animeArrow.svg" alt="Animation représentant une souris d’ordinateur" class="cover__arrow bounce">
    </div>
    <div class="wrapper__text">
        <h2 class="hidden">Bienvenu chez moi&nbsp;!</h2>
        <?php echo $page->text() ?>
    </div>
<?php snippet('footer') ?>
