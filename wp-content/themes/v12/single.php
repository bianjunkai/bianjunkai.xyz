<?php get_header(); ?>
<div class="col-md-9">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  	  <div class="featured-image">
	    <?php
	    if(has_post_thumbnail()){
	      the_post_thumbnail('v12_848');
	    }
	    ?>
	  </div>
	  <div class="wrapper clearfix">
	    <p class="meta">
	      <span><?php the_time( get_option( 'date_format' ) ); ?></span> /
	      <span>by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span> /
	      <span><?php the_category(', '); ?></span> /
	      <span><?php comments_number( __('No Comments', 'v12'), __('1 Comment', 'v12'), __('% Comments', 'v12') ); ?></span>
	    </p>
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
	    </div><?php wp_link_pages( array(
	'before'      => '<div class="page-links">',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>&nbsp;',
	'pagelink'         => __('Page %', 'v12')
	) );
?>

	  <div class="single-tags">
	  	<?php the_tags(' '); ?>
	  </div>
    <div class="single-post-navigation">
      <?php the_post_navigation(); ?>
    </div>
	  </div>
	</article>
	<?php comments_template(); ?>
  <?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
