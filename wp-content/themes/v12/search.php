<?php get_header(); ?>
<div class="col-md-9">
  <header class="v12-page-header">
	<h1 class="page-title"><?php printf( __('Search Results for', 'v12').' &ldquo;%s&rdquo;', '<span>' . get_search_query() . '</span>' ); ?></h1>
  </header><!-- .page-header -->
  <?php if(have_posts()) : ?>
  <?php
  while(have_posts()) : the_post();
  get_template_part('template-parts/content', get_post_format());
  endwhile;
  else: ?>
  	<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'v12'); ?></p>
	<?php get_search_form(); ?>
  <?php endif; ?>
  <div class="v12-pagination clearfix">
	   <?php the_posts_navigation(); ?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
