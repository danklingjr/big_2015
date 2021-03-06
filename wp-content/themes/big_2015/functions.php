<?php

// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Layout
require_once(CHILD_DIR.'/lib/layout.php');

// Template
include_once(CHILD_DIR.'/lib/template.php');

// Admin
//include_once(CHILD_DIR.'/lib/admin.php');

//error log
function elog($x){
    ob_start();
    print_r($x);
    $contents = ob_get_contents();
    ob_end_clean();
    error_log($contents);
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'after_setup_theme', 'vanguard_setup' );
function vanguard_setup() {
  add_image_size( 'large-thumb', 500, 500, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'nav_main', __( 'Main Nav', 'theme-slug' ) );
}

function register_wireless_menu() {
    register_nav_menu('wireless-sub', __('Wireless Technologies Nav'));
}
add_action('init', 'register_wireless_menu');

function register_software_menu() {
    register_nav_menu('software-sub', __('Software Development Nav'));
}
add_action('init', 'register_software_menu');

function register_networking_menu() {
    register_nav_menu('networking-sub', __('Networking Nav'));
}
add_action('init', 'register_networking_menu');

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};

acf_add_options_page();