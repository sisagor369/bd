<?php 
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// css bootstrap js file linkup
function SaifulTheme_scripts() {
	wp_enqueue_style( 'SaifulTheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'SaifulTheme-style', get_template_directory_uri().'/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'SaifulTheme-navigation', get_template_directory_uri() . './bootstrap.bundle.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'SaifulTheme_scripts' );

// logo 
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

// menu 
register_nav_menus([
	"TM"=>"Primary",
	"FM"=>"Footer"
]);

// banner
register_sidebar([
    'name' => 'Main Banner',
    'id'=> 'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''
]);
// side image and video
register_sidebar([
	'name'=>"Side Image small",
	'id'=>"sideimg",
	'before_widget'=>'<div class="sideimage">',
	'after_widget'=>'</div>'
]);
register_sidebar([
	'name'=>'Side video',
	'id'=>'sidevideo',
	'before_widget'=>'',
	'after_widget'=>''
]);
register_sidebar([
	'name'=>"Side Big Image",
	'id'=>"sideimgbig",
	'before_widget'=>'<div class="sidebibimage">',
	'after_widget'=>'</div>'
]);
register_sidebar([
	'name'=>'Side video after Image',
	'id'=>'sidevideobottom',
	'before_widget'=>'',
	'after_widget'=>''
]);
register_sidebar([
	'name'=>"Side Image small in Bottom",
	'id'=>"sideimgbottom",
	'before_widget'=>'<div class="sideimage">',
	'after_widget'=>'</div>'
]);

// uddog 
register_sidebar([
	'name'=>"uddog title",
	'id'=>'uddogtitle',
	'before_widget'=>'',
	'after_widget'=>''
]);
register_sidebar([
	'name'=>"uddog",
	'id'=>'uddog',
	'before_widget'=>'<div class="list">',
	'after_widget'=>'</div>'
]);
register_sidebar([
	'name'=>"Tab bar 2",
	'id'=>'tabbartwo',
	'before_widget'=>'<div class="tabbartwo">',
	'after_widget'=>'</div>'
]);
register_sidebar([
	'name'=>"footer Title",
	'id'=>'ftitle',
	'before_widget'=>'<div class="ftitle">',
	'after_widget'=>'</div>'
]);
register_sidebar([
	'name'=>"footer Image",
	'id'=>'footerimg',
	'before_widget'=>'<div class="footerimg">',
	'after_widget'=>'</div>'
]);
?>