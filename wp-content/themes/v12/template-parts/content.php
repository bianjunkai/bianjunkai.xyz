<article <?php post_class('v12-item'); ?> id="post-<?php the_ID(); ?>">
  <div class="featured-image">
    <?php
    if(has_post_thumbnail()){
      ?>
      <a href="<?php the_permalink(); ?>" >
        <?php
        the_post_thumbnail('v12_848');
        ?>
      </a>
      <?php
    }
    ?>
  </div>
  <div class="v12-content pbox clearfix">
    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
      <span class="sticky-post">Featured</span>
    <?php endif; ?>
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
      <h3 class="title"><a href="<?php echo esc_url( get_permalink() ) ; ?>" rel="bookmark"><?php _e('(No Title)', 'v12'); ?></a></h3>
      <?php
    } else {
      ?>
      <h3 class="title"><a href="<?php echo esc_url( get_permalink() ) ; ?>" rel="bookmark" ><?php the_title(); ?></a></h3>
      <?php
    }
    ?>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php echo esc_url( get_permalink() ) ; ?>" class="btn read-more"><?php _e('Read More', 'v12'); ?></a>
  </div>
</article>
