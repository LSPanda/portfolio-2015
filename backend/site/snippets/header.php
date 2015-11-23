<!DOCTYPE html><!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo( $site->title()->html() ) ?> | <?php echo( $page->title()->html() ) ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="">
    <?php echo( css( 'assets/css/main-min.css' ) ) ?>
    <?php echo( js( 'assets/js/vendor/modernizr-2.6.2.min.js' ) ) ?>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Sanchez">
</head>
<body>
    <header class="header header--visible">
      <h1 class="hidden"><?php echo( $site->title()->html() ) ?> | <?php echo( $page->title()->html() ) ?></h1>
      <div class="header__nav">
        <div class="inline-block social">
          <h2 class="hidden">Retrouver moi ailleurs !</h2><span class="social__link"><a href="https://www.facebook.com/simon.leyder" class="social__link--facebook">Facebook</a></span><span class="social__link"><a href="https://github.com/LSPanda" class="social__link--github">Github</a></span>
        </div>
        <?php snippet( 'menu' ) ?>
      </div>
    </header>
