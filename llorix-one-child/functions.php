<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);
//remove_filter( 'the_content', 'wpautop' );




/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

function wpdocs_excerpt_more( $more ) {
    return sprintf( ' ... <a href="%1$s" class="more-link">%2$s</a>',
          esc_url( get_permalink( get_the_ID() ) ),
          sprintf( __( 'continue reading %s', 'wpdocs' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more', 20 );



function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}




//add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
//function theme_enqueue_styles() {
//    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//}



if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}




function register_subscription_request_content_type() {
  $post_lbls = array(
    'name'               => 'Subscriptions', 
    'singular_name'      => 'Subscription',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Subscription',
    'edit'               => 'Edit',
    'edit_item'          => 'Edit Subscription Request',
    'new_item'           => 'New Subscription Request',
    'view'               => 'View',
    'view_item'          => 'View Subscription',
    'search_term'        => 'Search Subscription Requests',
    'parent'             => 'Parent Subscription',
    'not_found'          => 'No Subscriptions Found',
    'not_found_in_trash' => 'No Subscription Requests In Trash'
  );
  
  register_post_type('subscription', array('labels' => $post_lbls, 'public' => true));
  
}

function register_job_posting_content_type() {
  $post_lbls = array(
    'name'               => 'Job Postings', 
    'singular_name'      => 'Job Posting',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Job Posting',
    'edit'               => 'Edit',
    'edit_item'          => 'Edit Job Posting',
    'new_item'           => 'New Job Posting',
    'view'               => 'View',
    'view_item'          => 'View Job Posting',
    'search_term'        => 'Search Job Postings',
    'parent'             => 'Parent Job Posting',
    'not_found'          => 'No Job Postings Found',
    'not_found_in_trash' => 'No Job Postings In Trash'
  );
  
  register_post_type('job_posting', array('labels' => $post_lbls, 'public' => true));
  flush_rewrite_rules();
}




function process_subscription_request() {
 
  if ( ! empty( $_POST[ 'submission' ] ) ) {
    wp_send_json_error( 'Honeypot Check Failed' );
  }
  if ( ! check_ajax_referer( 'user-submitted-question', 'security' ) ) {
    wp_send_json_error( 'Security Check failed' );
  }
  $subscription_data = array(
    'post_title' => sprintf( '[%s] New Subscriber - %s %s',
      esc_attr( current_time( 'Y-m-d' ) ),
      sanitize_text_field( $_POST[ 'data' ][ 'first' ] ),
      sanitize_text_field( $_POST[ 'data' ][ 'last' ] )
    ),
    'post_status' => 'draft',
    'post_type' => 'subscription',
    'post_content' => sprintf( 'A new subscription for the CFGC newsletter has been received. The received subscriber information is as follows:%c[%s %s, %s]',
      10,
      sanitize_text_field( $_POST[ 'data' ][ 'first' ] ),
      sanitize_text_field( $_POST[ 'data' ][ 'last' ] ),
      sanitize_text_field( $_POST[ 'data' ][ 'email' ] )
     )
  );
  $post_id = wp_insert_post( $subscription_data, true );
  
  // echo esc_attr( $post_id );

  if ( $post_id ) {
    wp_send_json_success( $post_id );
  }

}




function newsletter_form_add_scripts() {
  wp_register_script( 'jquery-validate-script', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery'));
  wp_enqueue_script( 'jquery-validate-script' );

    // wp_register_script( 'newsletter-script', get_stylesheet_directory_uri() . '/newsletter.js', array( 'jquery','jquery-validate-script'));
//     wp_enqueue_script( 'newsletter-script' );
}


add_action( 'init', 'register_job_posting_content_type' );
add_action( 'init', 'register_subscription_request_content_type' );
add_action( 'wp_enqueue_scripts', 'newsletter_form_add_scripts' );
add_action( 'wp_ajax_process_subscription_request', 'process_subscription_request' );
add_action( 'wp_ajax_nopriv_process_subscription_request', 'process_subscription_request' );

