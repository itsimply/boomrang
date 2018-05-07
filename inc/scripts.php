<?php
/**
 * Enqueue scripts and styles.
 */
function boomrang_scripts() {
	wp_enqueue_style( 'boomrang-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0' );

	wp_enqueue_script( 'boomrang-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'boomrang-custom-js', get_template_directory_uri() . '/js/src/site.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'boomrang-fa', '//use.fontawesome.com/releases/v5.0.1/js/all.js', array(), '5.0.1' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'boomrang_scripts' );


/**
 * Filter the HTML script tag of `leadgenwp-fa` script to add `defer` attribute.
 *
*/
function boomrang_defer_scripts( $tag, $handle, $src ) {
	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'boomrang-fa'
	);
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer></script>';
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'boomrang_defer_scripts', 10, 3 );