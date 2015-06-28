<?php the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post-header">
    <h2><a href="<?php the_permalink(); ?>"
           rel="bookmark"
	   title="Permanent lenke til <?php the_title_attribute(); ?>">
      <?php the_title(); ?></a></h2>

    <div class="strong">
      Publisert <span class="date"><?php the_time ('Y-m-d'); ?></span>,
      av Simon Osen
    </div>

    <p>
      <div class="fb-like" data-share="true" show-faces="false"></div>
    </p>

  </div>

  <div class="entry clear thepost">
    <!-- @todo ingress. can not use the_excerpt() -->
    <?php the_content(); ?>
  </div>

  <footer class="post-footer">
    <!--
    <div class="fb-like" data-share="true" show-faces="false"></div>
    -->
  </footer>
  
  <div class = "fb-comments"
       data-width = "100%"
       data-colorscheme = "dark"
       data-order-by = "time"
       data-numposts = "5">
  </div>
  <!-- TODO
  https://developers.facebook.com/docs/plugins/comments#moderation-setup
  -->

</div>	<!-- div#post-id -->
