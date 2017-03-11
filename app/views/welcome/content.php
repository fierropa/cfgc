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
           <div class="pic-container-inner">
             <?php  if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' ); } ?>
           </div>
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
