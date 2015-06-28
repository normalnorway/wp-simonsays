<?php while (have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post-header">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="date"><?php the_date(); ?></div>
  </div>

  <div class="entry clear">
    <?php the_excerpt(); ?>
  </div>

  <div class="post-footer">
    <p><a href="<?php the_permalink(); ?>">Les videre &hellip;</a></p>
  </div>

</div>	<!-- div#post-<id> -->

<?php endwhile; ?>

<!--
<br />
Note this is currently not available in HTML5
Can fetch this via json instead
https://graph.facebook.com/v2.3/?fields=share{comment_count}&id=<YOUR_URL>
<p>Kommentarer:
  <span class="fb-comments-count" data-href="http://simon.normal.no/"></span>
</p>
-->
