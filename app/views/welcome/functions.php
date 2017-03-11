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
