<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boomrang_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'boomrang' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'boomrang' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title card-header">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'boomrang' ),
		'id'            => 'sidebar-left',
		'description'   => esc_html__( 'Add widgets here.', 'boomrang' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title card-header">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'boomrang' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'boomrang' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title heading h6 text-uppercase font-weight-700 mb-3">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'boomrang' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'boomrang' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title heading h6 text-uppercase font-weight-700 mb-3">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'boomrang' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'boomrang' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title heading h6 text-uppercase font-weight-700 mb-3">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'boomrang' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'boomrang' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title heading h6 text-uppercase font-weight-700 mb-3">',
		'after_title'   => '</h5>',
	) );


}
add_action( 'widgets_init', 'boomrang_widgets_init' );