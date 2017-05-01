<?php
/**
 * Content template file
 *
 * PHP version 5.6
 *
 * @category    Sections
 * @package     Llorix_One_Lite
 * @author      Themeisle <andrei@themeisle.com>
 * @license     GNU General Public License v2 or later
 * @link        http://themeisle.com
 */

$llorix_one_lite_frontpage_content_show = get_theme_mod( 'llorix_one_lite_frontpage_content_show', 1 );

if ( isset( $llorix_one_lite_frontpage_content_show ) && $llorix_one_lite_frontpage_content_show != 1 ) {
	$class_to_add = '';
	$title_class  = '';
	if ( is_customize_preview() ) {
		$llorix_one_frontpage_featured = get_theme_mod( 'llorix_one_lite_feature_thumbnail' );
		if ( ! empty( $llorix_one_frontpage_featured ) ) {
			$class_to_add = 'overlay-layer-wrap white-text';
		} else {
			$class_to_add = 'brief';
			$title_class  = 'dark-text';
		}
	} else {
		if ( has_post_thumbnail() ) {
			$class_to_add                  = 'overlay-layer-wrap white-text';
			$llorix_one_frontpage_featured = get_the_post_thumbnail_url();
		} else {
			$class_to_add = 'brief';
			$title_class  = 'dark-text';
		}
	}

	?>

	<section class="frontpage-content <?php if ( ! empty( $class_to_add ) ) {
		echo esc_attr( $class_to_add );
	} ?> " <?php if ( ! empty( $llorix_one_frontpage_featured ) ) {
	echo 'style="background-image: url(\'' . esc_url( $llorix_one_frontpage_featured ) . '\')"';
	} ?>>
		<div class="container">
			<div class="row">
				<?php
				$llorix_frontpage_id = get_option( 'page_on_front' );
				if ( ! empty( $llorix_frontpage_id ) ) {
					$llorix_fp_title = get_the_title( $llorix_frontpage_id );
				}
				if ( ! empty( $llorix_fp_title ) ) {
					echo '<h2 class="text-left ' . esc_attr( $title_class ) . '">' . $llorix_fp_title . '</h2>';
					echo '<div class="colored-line-left"></div>';
				}

				// Show the selected frontpage content
        
				// if ( have_posts() ) :
//           while ( have_posts() ) : the_post();
//             get_template_part( 'content', 'frontpage' );
//           endwhile;
//         else : // I'm not sure it's possible to have no posts when this page is shown, but WTH
//           get_template_part( 'content', 'none' );
//         endif;
				?>
        
        <div id="u-subscribed" class="alert alert-success" style="display:none;">
          <span style="font-weight:bold;">Success!</span> Thank you for your interest in CFGC.
        </div>
        
        <div id="subscribe-form-container" class="single-service border-bottom-hover">
  
          <h3 class="colored-text text-center">
            Subscribe to Our Newsletter
          </h3>
  
          <div class="newsletter-form-container">
    
            <form method="POST" id="subscribe-form" name="subscribe_form">
              <!-- some inputs here ... -->
              <?php wp_nonce_field(basename(__FILE__), 'user-submitted-question' ); ?>

              <div class="newsletter-control row">

                <div class="newsletter-control-input col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0">
                  <div class="newsletter-control-input-content">
                    <input type="text" name="first_name" id="first-name" class="ng-pristine ng-valid ng-touched" placeholder="First Name">
                  </div>
                </div>

                <div class="newsletter-control-input col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0">
                  <div class="newsletter-control-input-content">
                    <input type="text" name="last_name" id="last-name" class="ng-pristine ng-valid ng-touched" placeholder="Last Name">
                  </div>
                </div>

                <div class="newsletter-control-input col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0">
                  <div class="newsletter-control-input-content">
                    <input type="text" id="email" name="email" class="ng-pristine ng-valid ng-touched" placeholder="Email Address*">
                  </div>
                </div>

              </div>



              <div class="newsletter-control row">

                <div class="newsletter-control-btn col-xs-offset-4 col-xs-4">
                  <button type="submit" id="user-submit-button" class="btn btn-signup">Sign Up</button>
                </div>
        
              </div>
              <input type="text" id="xyq" name="<?php echo apply_filters( 'honeypot_name', 'date-submitted' ); ?>" value="" style="display:none;">      
      
            </form>
          </div>
        </div>
			</div>
		</div>
	</section>
  
  <script type="text/javascript">
    // jQuery(document).ready(function($) {
//
//       $("#subscribe-form").validate({
//         rules: {
//           email: {
//             required: true,
//             email: true
//           }
//         }
//       });
//
//     });
  </script>
  
	<?php
}// End if().
