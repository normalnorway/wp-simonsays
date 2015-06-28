<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo ('charset'); ?>" />

    <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo ('pingback_url'); ?>">
    <link rel="alternate" type="application/rss+xml"
          title="<?php bloginfo ('name'); ?> RSS Feed"
          href="<?php bloginfo ('rss2_url'); ?>" />

    <!-- @todo async=1 defer=1. or move sdk.js to footer.php -->
    <script src="//connect.facebook.net/nb_NO/sdk.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/facebook.js"></script>

    <meta property="fb:app_id" content="1106109866085176" />

    <!-- OpenGraph -->
    <!-- @todo these change per article: url, description, image -->
    <meta property="og:locale" content="nb_NO" />
    <meta property="og:site_name" content="Simon Osens ruspolitiske blogg" />
    <meta property="og:title" content="<?php wp_title(''); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/simon1.jpg" />

    <!-- @todo defaults to website. only to this for post.php -->
    <meta property="og:type" content="article" />
    <meta property="article:author" content="https://www.facebook.com/simon.osen" />
    <meta property="article:publisher" content="https://www.facebook.com/NormalNorway" />

    <?php wp_head(); ?>
  </head>

  <body>
    <div id="fb-root"></div>
    <div id="wrapper">

    <header id="header">
      <h1>Simon Osens ruspolitiske blogg [BETA]</h1>
    </header>
