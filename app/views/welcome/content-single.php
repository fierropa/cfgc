<?php
/**
 * The template for displaying single page content.
 *
 * @package llorix-one-lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-single-page' ); ?> data-template="content-single">
  <header class="entry-header single-header">
    <?php the_title( '<h1 itemprop="headline" class="dark-text entry-title single-title">', '</h1>' ); ?>
    <div class="colored-line"></div>
    <div class="clearfix"></div>
    
    <div class="entry-meta single-entry-meta">
      <span class="author-link" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
        <span itemprop="name" class="post-author author vcard">
          <i class="fa fa-user" aria-hidden="true"></i>
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" itemprop="url" rel="author"><?php the_author(); ?></a>
        </span>
      </span>
      <?php llorix_one_lite_after_author_in_entry_meta_trigger(); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <div itemprop="text" class="entry-content">
    <div class="featured-img text-center">
      <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
          <?php
            $image_id = get_post_thumbnail_id();
            $image_url_big = wp_get_attachment_image_src( $image_id,'llorix-one-lite-post-thumbnail-big', true );
            $image_url_mobile = wp_get_attachment_image_src( $image_id,'llorix-one-lite-post-thumbnail-mobile', true );
          ?>
          <picture itemscope itemprop="image" class="pic-container-inner">
            <source media="(max-width: 760px)" srcset="<?php echo esc_url( $image_url_mobile[0] ); ?>">
            <img src="<?php echo esc_url( $image_url_big[0] ); ?>" alt="<?php the_title_attribute(); ?>">
          </picture>
      <?php } ?>
    </div>
    
      
      
      <h3 class="subtitle">
        <?php the_meta(); ?>
        <a href="<?php echo get_post_meta($post->ID, 'website', true); ?>" target="_blank">
          <?php echo get_post_meta($post->ID, 'website', true); ?>
        </a>
      </h3>
      
      <?php the_content(); ?>
      
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'llorix-one-lite' ),
          'after'  => '</div>',
        ) );
      ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
  	<?php llorix_one_lite_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
