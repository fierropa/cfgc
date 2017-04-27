<?php

  require("lib/utils.php");
  require("lib/nusoap.php");
/**
 * Template name: Newsletter
 *
 * @package llorix-one-lite
 */

  get_header();
?>

        </div>
        <!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div role="main" id="content" class="content-wrap newsletter">
  
  <div class="container">

    <div id="primary" class="content-area col-md-12 testimonials-wrap">
      <main id="main" class="site-main testimonials-wrap" role="main">
        <div class="single-service border-bottom-hover">
  
          <h3 class="colored-text text-center">
            Subscribe to Our Newsletter
          </h3>
  
          <div class="newsletter-form-container">
    
            <form method="POST" name="subscribe_form" onsubmit="return validate_form()" onload="setupPage('email');" action="https://sna.etapestry.com/prod/HostedOnlineDonorRegSave.jsp">
              <!-- some inputs here ... -->
              <?php wp_nonce_field( 'name_of_my_action', 'subject' ); ?>
              <?php startEtapestrySession(); ?>
              


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
        
      </main><!-- #main -->
    </div><!-- #primary -->
  </div>
</div><!-- .content-wrap -->
<!-- .content-wrap -->
