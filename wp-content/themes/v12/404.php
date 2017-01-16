<?php get_header(); ?>
<div class="col-md-9">
  <header class="v12-page-header">
	<h1 class="page-title"><?php _e('Oops! This page does not exist.', 'v12'); ?></h1>
  </header><!-- .page-header -->
  	<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'v12'); ?></p>
	<?php get_search_form(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
