<?php
/**
 * Template name: Testimonials
 *
 * @package llorix-one-lite
 */

	get_header();
?>

        </div>
        <!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<?php
        $llorix_one_lite_blog_header_image = get_theme_mod( 'llorix_one_lite_blog_header_image', apply_filters( 'llorix_one_lite_blog_header_image_filter',llorix_one_lite_get_file( '/images/background-images/background-blog.jpg' ) ) );
        $llorix_one_lite_blog_header_title = get_theme_mod( 'llorix_one_lite_blog_header_title', 'This Theme Supports a Custom FrontPage' );
        $llorix_one_lite_blog_header_subtitle = get_theme_mod( 'llorix_one_lite_blog_header_subtitle' );

        if ( ! empty( $llorix_one_lite_blog_header_image ) || ! empty( $llorix_one_lite_blog_header_title ) || ! empty( $llorix_one_lite_blog_header_subtitle ) ) :

        if ( ! empty( $llorix_one_lite_blog_header_image ) ) :
                echo '<div class="archive-top" style="background-image: url(' . $llorix_one_lite_blog_header_image . ');">';
                else :
                        echo '<div class="archive-top">';
                endif;
                echo '<div class="section-overlay-layer">';
                echo '<div class="container">';

                if ( ! empty( $llorix_one_lite_blog_header_title ) ) :
                        echo '<p class="archive-top-big-title">' . $llorix_one_lite_blog_header_title . '</p>';
                        echo '<p class="colored-line"></p>';
                        endif;

                if ( ! empty( $llorix_one_lite_blog_header_subtitle ) ) :
                        echo '<p class="archive-top-text">' . $llorix_one_lite_blog_header_subtitle . '</p>';
                        endif;

                echo '</div>';
                echo '</div>';
                echo '</div>';

        endif;

?>

<!-- To edit banner jumbotron image use customizer -->


<div role="main" id="content" class="content-wrap testimonials">
  
  <div class="container">
    
    <div class="section-header">
      
      <h2 class="dark-text">Testimonials</h2>
      <div class="colored-line"></div>
      <div class="disclaimer sub-heading">
        *The names of the parties involved in these stories have been changed to protect their confidentiality
      </div>
      
    </div>



    <?php 
      $args = array('orderby' => 'date', 'order' => 'DESC', 'category_name' => 'testimonials'); 
      $q = new WP_Query($args);
    ?>
    

    <div id="primary" class="content-area col-md-12 testimonials-wrap">
      <main <?php if ( $q->have_posts() ) { echo 'itemscope itemtype="http://schema.org/Blog"';} ?> id="main" class="site-main testimonials-wrap" role="main" data-template="home">


        
        <?php if ( $q->have_posts() ) : ?>
  
            <?php /* Start the Loop */ ?>
            
            
            
                <?php while ( $q->have_posts() ) : $q->the_post(); ?>

                                <?php

                                /**
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

                                <?php else : ?>

                                        <?php get_template_part( 'content', 'none' ); ?>

                                <?php endif; ?>

                        </main><!-- #main -->
                </div><!-- #primary -->


        </div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>