<?php
function base_scripts_styles() {
    $version   = 1;
    $in_footer = true;

    // styles
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@600&family=Prompt:wght@200&display=swap', [] );
    wp_enqueue_style('swiper style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', [] );
	wp_enqueue_style('font-1', 'https://fonts.googleapis.com/css2?family=DM+Sans&display=swap', [] );
	wp_enqueue_style('font-2', 'https://api.fontshare.com/v2/css?f[]=clash-display@500,600&display=swap', [] );
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', [] );
    wp_enqueue_style('main style', get_template_directory_uri() . '/css/style.css', [] );
    wp_enqueue_style('theme', get_stylesheet_uri(), [] );

    // scripts
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', [], $version, $in_footer );
    wp_enqueue_script('swiper script', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], $version, $in_footer );
	  wp_enqueue_script('nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', [], $version, $in_footer );
	  wp_enqueue_script('stepper', get_template_directory_uri() . '/js/stepper.min.js', [], $version, $in_footer );
    wp_enqueue_script('main script', get_template_directory_uri() . '/js/main.js', [], $version, $in_footer );
    // wp_enqueue_script('google', 'https://maps.googleapis.com/maps/api/js?key='.get_field('google_api_key', 'option').'&libraries=places&language=en', [], '', $in_footer );
}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );

// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
}