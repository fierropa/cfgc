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



public function register_subscriber_content_type() {
  $post_lbls = array(
    'name'               => 'Subscribers', 
    'singular_name'      => 'Subscriber',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Subscriber',
    'edit'               => 'Edit',
    'edit_item'          => 'Edit Subscriber',
    'new_item'           => 'New Subscriber',
    'view'               => 'View',
    'view_item'          => 'View Subscriber',
    'search_term'        => 'Search Term',
    'parent'             => 'Parent',
    'not_found'          => 'No Subscribers Found',
    'not_found_in_trash' => 'No Subscribers In Trash'
  );
  
  register_post_type('subscriber', array('labels' => $post_lbls, 'public' => true));
  
  $tax_labels = array(
  		'name'              => _x( 'Subscriptions', 'text-domain' ),
  		'singular_name'     => _x( 'Subscription', 'text-domain' ),
  		'search_items'      => __( 'Search Subscriptions', 'text-domain' ),
  		'all_items'         => __( 'All Subscriptions', 'text-domain' ),
  		'parent_item'       => __( 'Parent Subscription', 'text-domain' ),
  		'parent_item_colon' => __( 'Parent Subscription:', 'text-domain' ),
  		'edit_item'         => __( 'Edit Subscription', 'text-domain' ),
  		'update_item'       => __( 'Update Subscription', 'text-domain' ),
  		'add_new_item'      => __( 'Add New Subscription', 'text-domain' ),
  		'new_item_name'     => __( 'New Subscription Name', 'text-domain' ),
  		'menu_name'         => __( 'Subscription', 'text-domain' ),
  	);
  register_taxonomy( 'subscriptions', 'subscriber', array( 'labels' => $tax_labels, 'rewrite' =>  array('slug' => 'location', 'with_front' => false) ) );
  
}


add_action( 'init', 'register_subscriber_content_type' );


function process_user_generated_post() {
	if ( ! empty( $_POST[ 'submission' ] ) ) {
		wp_send_json_error( 'Honeypot Check Failed' );
	}
	if ( ! check_ajax_referer( 'user-submitted-question', 'security' ) ) {
		wp_send_json_error( 'Security Check failed' );
	}
	$question_data = array(
		'post_title' => sprintf( '%s-%s-%s',
			sanitize_text_field( $_POST[ 'data' ][ 'name' ] ),
			sanitize_text_field( $_POST[ 'data' ][ 'product' ] ),
			esc_attr( current_time( 'Y-m-d' ) )
		),
		'post_status' => 'draft',
		'post_type' => 'user_question',
		'post_content' => sanitize_text_field( $_POST[ 'data' ][ 'question' ] )
	);
	$post_id = wp_insert_post( $question_data, true );
	if ( $post_id ) {
		wp_set_object_terms(
			$post_id,
			sanitize_text_field( $_POST[ 'data' ][ 'product' ] ),
			'products',
			true
		);
		update_post_meta( $post_id, 'contact_email', sanitize_email( $_POST[ 'data' ][ 'email' ] ) );
	}
	wp_send_json_success( $post_id );
}
add_action( 'wp_ajax_process_user_generated_post', 'process_user_generated_post' );
add_action( 'wp_ajax_nopriv_process_user_generated_post', 'process_user_generated_post' );
