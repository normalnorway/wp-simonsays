
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post-header">
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark"
	   title="Permanent Link to <?php the_title_attribute(); ?>">
      <?php the_title(); ?></a>
    </h2>
    <div class="date"><?php the_time ('Y-m-d'); ?></div>
    <div class="author">Author: <?php the_author(); ?></div>
  </div>

  <div class="entry clear">
    <?php if (function_exists ('add_theme_support')) the_post_thumbnail(); ?>
    <?php edit_post_link(); ?>
    <?php wp_link_pages(); ?>
    <!--
    <?php the_content(); ?>
    -->
  </div>

  <footer class="post-footer">
    <div class="comments"><?php comments_popup_link ('Leave a Comment', '1 Comment', '% Comments'); ?></div>
  </footer>

</div>	<!-- div#post-<id> -->
<?php endwhile; ?>

<nav class="navigation index">
  <div class="alignleft"><?php next_posts_link ('Older Entries'); ?></div>
  <div class="alignright"><?php previous_posts_link ('Newer Entries'); ?></div>
</nav>

<!-- @todo if (!have_posts()) -->
