<?php get_header(); ?>
<div id="main">
  <div id="content">

    <?php include ('main.php'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <h4>Posted on <?php the_time('F jS, Y') ?></h4>
<!--
      <?php the_content(__('(more...)')); ?>
-->
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>  <!-- div#content -->

  <?php get_sidebar(); ?>
</div>	<!-- div#main -->

<div id="delimiter"></div>

<?php get_footer(); ?>
