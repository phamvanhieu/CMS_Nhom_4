<?php


define('TPL_DIR_URI',get_template_directory_uri());

# Khai báo hằng số TPL_DIR bằng đường dẫn đến thư mục theme
define('TPL_DIR', get_stylesheet_directory());

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
// ===========================================
function register_svh_menus() {
    register_nav_menus([
        'main-menu' => __( 'Main Menu' )
    ]);
}
add_action('init', 'register_svh_menus');
// ============================================

// add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'post-thumbnails' ); 
function svh_widgets_init() {

    register_sidebar(
        [
            'name'          => 'Footer',
            'id'            => 'sidebar-footer',
            'description'   => 'Add widgets here to appear in your footer.',
            'before_widget' => '<div id="%1$s" class="col-12 col-lg-4 footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="footer-widget__title">',
            'after_title'   => '</h2>',
        ]
    );

    register_sidebar(
        [
            'name'          => 'Sidebar',
            'id'            => 'sidebar-main',
            'description'   => 'Add widgets here to appear in your sidebar.',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );

}
add_action( 'widgets_init', 'svh_widgets_init' );

// ========================================================
# Yêu cầu load file class-wp-bootstrap-navwalker.php
function register_navwalker(){
	require_once TPL_DIR . '/frontend/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
// ===============================================
/**
 * Thêm logo vào trang quản trị WordPress
 */
function config_custom_logo() {
    add_image_size( 'custom-image-size' , 240 , 100 , true );
    $defaults = array(
        'height' => 100,
        'width' => 240,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array(),
    );
    add_theme_support( 'custom-logo' , $defaults );

}

add_action( 'after_setup_theme' , 'config_custom_logo' );


?>