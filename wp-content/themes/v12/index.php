<?php get_header(); ?>
<div class="col-md-9">
  <?php if(have_posts()) : while(have_posts()) : the_post();
  	get_template_part( 'template-parts/content', get_post_format() );
  endwhile;
  ?>
  <div class="v12-pagination clearfix">
	   <?php the_posts_navigation(); ?>
  </div>
  <?php
  else :
  	get_template_part( 'template-parts/content', 'none' );
  endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
