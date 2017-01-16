<?php get_header(); ?>
<div class="col-md-9">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	  <div class="wrapper clearfix">
	    <?php
        $title = get_the_title();
        if(empty($title)){ // supporting PHP 5.5 and before. older version only accept variables for empty function().
	      ?>
	      <h1 class="title"><?php _e('(No Title)', 'v12'); ?></h1>
	      <?php
	    } else {
	      ?>
	      <h1 class="title"><?php the_title(); ?></h1>
	      <?php
	    }
	    ?>
	    <div class="content">
	      <?php the_content(); ?>
	    </div>
	    <?php wp_link_pages( array(
	'before'      => '<div class="page-links">',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>&nbsp;',
	'pagelink'         => __('Page %', 'v12')
	) );
?>
	  </div>
	</article>
  <?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
