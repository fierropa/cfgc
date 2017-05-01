<?php
/**
 *
 * The template for contact template content.
 *
 * @package llorix-one-lite
 */?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'contact-page' ); ?>>

	<div class="container">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title single-title">', '</h1>' ); ?>
			<div class="colored-line-left"></div>
			<div class="clearfix"></div>
		</header><!-- .entry-header -->

		<div class="entry-content content-page llorix_one_lite_contact_form">
			<?php
				$llorix_one_lite_contact_form_shortcode = get_theme_mod( 'llorix_one_lite_contact_form_shortcode' );
			?>

      <section id="contact-us">
        
  			<?php the_content(); ?>
        
        <section id="contact-main">
          
          <div class="contact-form-wrapper col-md-7 col-xs-12">
            <!-- Displayed for small viewports only -->
            <section class="contact-grid-item address-block">
              <h2>CFGC</h2>
              <p>
                10929 South Street<br>Suite 208B<br>Cerritos, CA<br>90703<br><br>
                <a class="circle-link" href="https://goo.gl/maps/Myb8cijpGPF2">Google Maps</a>
              </p>
            </section>
            
            
            <?php
              if ( ! empty( $llorix_one_lite_contact_form_shortcode ) ) {
                echo '<fieldset>';
                echo '<legend>Contact Us</legend>';
                echo do_shortcode( $llorix_one_lite_contact_form_shortcode );
                echo '</fieldset>';
              }
            ?>
          </div>
          
          <div id="sidebar-secondary" class="col-md-5 widget-area col-xs-12 sidebar" itemtype="http://schema.org/WPSideBar" role="complementary" aria-label="Main sidebar">
            <aside id="text-2" class="widget widget_text">
              <h2 class="widget-title">Community Family Guidance Center</h2>
              <div class="colored-line-left"></div>
              <div class="clearfix widget-title-margin"></div>
              <div class="textwidget">
                <p>
                  <i class="fa fa-heart" aria-hidden="true"></i>&nbsp;<strong>Main Office</strong>
                  <br>10929 South Street, Suite 208B
                  <br>Cerritos, CA 90703
                  <br>ph: 562-924-5526
                  <br>fax: 562-924-1040
                </p>
                <br class="clear clearfix">
                <p>
                  <i class="fa fa-rss" aria-hidden="true"></i>&nbsp;<strong>Satellite Office</strong>
                  <br>8320 Iowa Street, #201
                  <br>Downey, CA 90241
                  <br>ph: 562-904-4815
                  <br><i class="fa fa-map-marker" aria-hidden="true" style="color:#f75448;"></i>&nbsp;<a class="sidebar-link" href="https://goo.gl/maps/ptMNvKrR6cH2">Google Maps</a>
                </p>
              </div>
            </aside>
            <aside id="nav_menu-3" class="widget widget_nav_menu">
              <div class="menu-social-links-menu-container">
                <ul id="menu-social-links-menu" class="menu">
                  <li id="menu-item-141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141">
                    <a href="http://facebook.com/communityfamilyguidancecenter"><i class="fa fa-facebook-square fa-3x"></i></a>
                  </li>
                  <li id="menu-item-142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142">
                    <a href="http://twitter.com/cfgcenter"><i class="fa fa-twitter fa-3x"></i></a>
                  </li>
                </ul>
              </div>
            </aside>
            <aside id="text-7" class="widget widget_text">
              <div class="textwidget">
                <div class="career-sc">
                  <span id="education-link">
                    <a href="/about/employment/" class="button btn-careers">
                      <div class="icon-label">
                        <i class="fa fa-suitcase fa-2x" aria-hidden="true"></i>
                      </div>
                      <div class="label">
                        <span style="font-weight:500;font-size:15px;"> Click Here For Career Opportunities </span><br>
                        <span class="mini-click-here"></span>
                      </div>
                    </a>
                  </span>
                </div>
              </div>
            </aside>
          </div>
        </section>
      </section>
        
        
        
        
			<footer class="entry-footer">
				<?php edit_post_link( esc_html__( 'Edit', 'llorix-one-lite' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .fentry-footer -->

		</div><!-- .entry-content -->

	</div>

</article><!-- #post-## -->





<script>
    var recaptchacalls = 0;
    var onloadCallback = function(e) {
      grecaptcha.render('cap-' + recaptchacalls, {
        'sitekey' : '6LcEHhYUAAAAAPmdRCIfMjhd3pFjcXHrcTSnAMUx'
      });
  
      recaptchacalls++;
    };
    console.log("recaptchacalls", recaptchacalls)
</script>
