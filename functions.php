<?php

define('THEME_URL', get_stylesheet_directory());
define('THEME_DIC',  get_stylesheet_directory_uri());

define('CORE', THEME_URL . '/core');
define('ASSETS', THEME_DIC . '/assets');


/**
  @ Load file /core/init.php
 **/


require_once(CORE . '/init.php');


/**
  @ Define align theme setup funtion
 **/
if (!function_exists('alignvn_theme_setup')) {
    function alignvn_theme_setup()
    {
        $language_folder = THEME_URL . '/language';
        load_theme_textdomain('alignvn', $language_folder);
        add_theme_support('title-tag');
        add_theme_support('core-block-patterns');
        add_theme_support('admin-bar');
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('align-wide');
        add_theme_support('wp-block-styles');
    };

    add_action('init', 'alignvn_theme_setup');
}


/**
 *  Adding library
 */

function alignvn_style()
{
    //Jquery
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', '', '', true);
    //Gsap
    wp_enqueue_script('gsap-script', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js',  '', '', true);
    wp_enqueue_script('gsap-scrollTrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js',  '', '', true);
    wp_enqueue_script('gsap-cssruleplugin', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/CSSRulePlugin.min.js',  '', '', true);
    //Dflip js
    wp_enqueue_script('dflip-js', ASSETS . '/dflip/js/dflip.min.js', '', '', true);
    wp_enqueue_script('swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js', '', '', true);

    wp_enqueue_script('locomotive-js', ASSETS . '/js/Locomotive/index.js', '', '', true);
    wp_enqueue_script('swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js', '', '', true);
    wp_enqueue_script('splitting-js', '//unpkg.com/splitting/dist/splitting.min.js', '', '', true);
    wp_enqueue_script('three-js', '//cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', '', '', true);
    wp_enqueue_script('lottie-js', '//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.1/lottie.min.js', '', '', true);

    wp_enqueue_script('bootstrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js',  '', '', true);

    wp_enqueue_script('main-align-js', ASSETS . '/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('index-align-js', ASSETS . '/js/index.js', array('jquery'), '1.0', true);

    //Adding type module
    add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
    function add_type_attribute($tag, $handle, $src)
    {
        // if not your script, do nothing and return original $tag
        if ('index-align-js' !== $handle) {
            return $tag;
        }
        // change the script tag by adding type="module" and return it.
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        return $tag;
    }

    //Swiper style
    wp_enqueue_style('swiper-bundle', '//unpkg.com/swiper@8/swiper-bundle.min.css');

    //Splitting style
    wp_enqueue_style('splitting-style', '//unpkg.com/splitting/dist/splitting.css');
    wp_enqueue_style('splitting-cells-style', '//unpkg.com/splitting/dist/splitting-cells.css');

    //Dflip style
    wp_enqueue_style('dflip_min_css', ASSETS . '/dflip/css/dflip.min.css', 'all');
    wp_enqueue_style('themify_icons_css', ASSETS . '/dflip/css/themify-icons.min.css', 'all');

    //Bootstrap
    wp_enqueue_style('bootstrap-style', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');

    //locomotive css
    wp_enqueue_style('locomotive-css', ASSETS . '/css/locomotive.css', 'all');

    //Main script
    wp_enqueue_style('align_main_styles', ASSETS . '/css/main.css', 'all');
    wp_enqueue_style('align_extra_style', ASSETS . '/css/extra.css', 'all');
}
add_action('wp_enqueue_scripts', 'alignvn_style');



//Register Block

add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/testimonial');
    register_block_type(__DIR__ . '/blocks/quote');
}
