<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/icon?family=Material+Icons', array(), CHILD_THEME_VERSION );  
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'width'           => 600,
	'height'          => 160,
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'flex-height'     => true,
) );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 1 );

//* Add Image Sizes
add_image_size( 'featured-image', 720, 400, TRUE );

//* Rename primary and secondary navigation menus
add_theme_support( 'genesis-menus' , array( 'primary' => __( 'After Header Menu', 'genesis-sample' ), 'secondary' => __( 'Footer Menu', 'genesis-sample' ) ) );

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

//* Reduce the secondary navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
	?>

    <div class="row top-footer">
    	<div class="col l2 m4 s12 footer-logo top-footer">
    		<img src="http://willangles.com/tk/wp-content/uploads/footer-logo.png">
    	</div>
    	<div class="col l2 m4 s12 offset-l8 top-footer">
    		<h5 style="line-height: 75px;">800-942-4406</h5>
    	</div>
    </div>
    <div class="row">
    	<div class="col l2 m4 s12 hide-on-small"></div>
    	<div class="col l2 m2 s6">
    		<h5>Portable Saw Mills</h5>
    		<ul>
    			<li><a href="#">2500</a></li>
    			<li><a href="#">2200</a></li>
    			<li><a href="#">2000</a></li>
    			<li><a href="#">1600</a></li>
    			<li><a href="#">1400</a></li>
    			<li><a href="#">1220</a></li>
    		</ul>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5>Resources</h5>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5>News</h5>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5>Dealers</h5>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5>Contact</h5>
    	</div>
    </div>
    <div class="row site-credits">
    	<div class="col s12 m6">
    		<p>2016 TimberKing Co. All Rights Reserved.  Use of the TimberKing websites and our Company Information constitutes acceptance of our <a href="#">Terms and Conditions</a>.  <a href="#">Privacy Policy</a>.</p>
    	</div>
    	<div class="col s12 m6 offset-m6 social-media-icons ">
			<a href="#"><img src="http://willangles.com/tk/wp-content/uploads/1.png"></a>
			<a href="#"><img src="http://willangles.com/tk/wp-content/uploads/2.png"></a>
			<a href="#"><img src="http://willangles.com/tk/wp-content/uploads/3.png"></a>
    	</div>
    </div>

	<?php
}

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
