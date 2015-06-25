<!doctype html>
<html lang="nb">
  <head>
    <meta charset="<?php bloginfo ('charset'); ?>" />

    <title><?php wp_title ('|', true, 'right'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo ('pingback_url'); ?>">

    <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>">

    <!-- @todo async=1 defer=1. or move sdk.js to bottom -->
    <script src="//connect.facebook.net/nb_NO/sdk.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/facebook.js"></script>

    <?php wp_head(); ?>
  </head>

  <body>
    <div id="fb-root"></div>
    <div id="wrapper">

    <header id="header"> <!-- class=header? -->
      <h1>Insert header here</h1>
    </header>
