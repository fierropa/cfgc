<?php
/**
 * The template for displaying content.
 *
 * @package llorix-one-lite
 */
?>

<article itemscope itemprop="blogPosts" itemtype="http://schema.org/BlogPosting" itemtype="http://schema.org/BlogPosting" <?php post_class( 'border-bottom-hover testimonials-box' ); ?> title="<?php printf( esc_html__( 'Blog post: %s', 'llorix-one-lite' ), get_the_title() )?>">
  
  <div class="feedback">

    <div class="pic-container">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

          <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
              <?php
                $image_id = get_post_thumbnail_id();
                $image_url_big = wp_get_attachment_image_src( $image_id,'llorix-one-lite-post-thumbnail-big', true );
                $image_url_mobile = wp_get_attachment_image_src( $image_id,'llorix-one-lite-post-thumbnail-mobile', true );
              ?>
              <picture itemscope itemprop="image" class="pic-container-inner">
                <source media="(max-width: 600px)" srcset="<?php echo esc_url( $image_url_mobile[0] ); ?>">
                <img src="<?php echo esc_url( $image_url_big[0] ); ?>" alt="<?php the_title_attribute(); ?>">
              </picture>
          <?php } else { ?>
              <picture itemscope itemprop="image">
                <source media="(max-width: 600px)" srcset="<?php echo llorix_one_lite_get_file( '/images/no-thumbnail-mobile.jpg' );?> ">
                <img src="<?php echo llorix_one_lite_get_file( '/images/no-thumbnail.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
              </picture>
          <?php } ?>
        </a>
    </div>

    <?php llorix_one_lite_before_entry_meta_content_trigger(); ?>



    <div itemprop="description" class="feedback-text-wrap entry-summary">
        <?php 
          the_title( 
            sprintf( '<h5 class="colored-text" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>', 
            apply_filters( 'llorix_one_lite_filter_article_title_on_index', true )
          );
        ?>
        <div class="small-text"><?php the_meta(); ?></div>
      
        <?php
            $ismore = strpos( $post->post_content, '<!--more-->' );
            if ( $ismore ) : the_content( sprintf( esc_html__( 'Read more %s ...','llorix-one-lite' ), '<span class="screen-reader-text">' . esc_html__( 'about ', 'llorix-one-lite' ) . get_the_title() . '</span>' ) );
            else : the_excerpt();
            endif;
              
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'llorix-one-lite' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .feedback-text-wrap -->
    
  </div>
  
</article><!-- #post-## -->
