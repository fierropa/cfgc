<?php
/**
 * Template name: Careers
 *
 * @package llorix-one-lite
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div class="content-wrap">
	<div class="container">
		<?php $page_title = get_the_title(); ?>
		<div id="primary" class="content-area col-md-12 <?php if ( empty( $page_title ) ) {  echo 'llorix-one-lite-top-margin-5px'; } ?>">
			<main id="main" class="site-main directory" role="main" data-template="template-careers">
        
  			<?php while ( have_posts() ) : the_post(); ?>

  				<?php get_template_part( 'content', 'careers' ); ?>

  			<?php endwhile; // end of the loop. ?>
        
        
        
        <?php 
          $args = array('orderby' => 'date', 'order' => 'DESC', 'category_name' => 'employment-opportunity', 'meta_key' => 'location'); 
          $q = new WP_Query($args);
          // $posts = $q->posts;
        ?>
        
        <section id="employment-openings" data-job-results="">
          <div class="container content pad-top-medium">
            <div class="pad-bottom-medium" data-job-group="Public Service">
              <h3>Open Positions</h3>
              <table id="table-job-postings" class="table-border-rows table-collapse-until-medium table-pad-line table-pad-base-at-medium">
                <tbody>
                  <?php if ( $q->have_posts() ) : ?>
                  
                    <?php /* Start the Loop */ ?>
                    <?php while ( $q->have_posts() ) : $q->the_post(); ?>
                      <tr data-job-location="<?php get_post_meta(get_the_ID(), 'location', true); ?>">
                        <th class="one-fourth-at-medium">
                          <a href="<?php get_permalink(); ?>" target="_blank"><?php echo $q->post->post_title ?></a>
                        </th>
                        <td class="one-fourth-at-medium">
                          <?php get_template_part( 'content', 'listing' ); ?>
                        </td>
                        <td class="one-fourth-at-medium"><?php echo get_post_meta(get_the_ID(), 'location', true); ?></td>
                      </tr>
                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                    <?php else : ?>
                      <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <div class="pad-bottom-medium">
                <div class="closing content-width-medium">
                      <p class="cta instructions">
                        You can find our recruitment ads on <a href="www.socialservice.com">www.socialservice.com</a>, 
                        or you may email your resume to <a href="mailto:jsmock@cfgcenter.com" target="_top">jsmock@cfgcenter.com</a>. 
                        Please indicate which position you are applying for in the subject line of your email.
                      </p>

                      <h4 class="text-center">Thank you for your interest in joining our Team.</h4>
                    </div>
                </div>
            </div>
        </section>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>
