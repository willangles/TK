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

//* Custom Scripts
function theme_js() {
    wp_enqueue_script( 'sweetalert', get_stylesheet_directory_uri() . '/vendor/sweetalert/dist/sweetalert.min.js', true);
	wp_enqueue_script( 'materialize', get_stylesheet_directory_uri() . '/js/materialize.min.js', true);
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', true);
}
add_action('wp_enqueue_scripts', 'theme_js');



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

// Register Header Widgets
genesis_register_sidebar( array(
    'id'          => 'utility-bar-left',
    'name'        => __( 'Utility Bar Left', 'theme-prefix' ),
    'description' => __( 'This is the left utility bar above the header.', 'theme-prefix' ),
) );

genesis_register_sidebar( array(
    'id' => 'utility-bar-right',
    'name' => __( 'Utility Bar Right', 'theme-prefix' ),
    'description' => __( 'This is the right utility bar above the header.', 'theme-prefix' ),
) );



//* Reduce the secondary navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

add_action( 'genesis_before_header', 'utility_bar' );
/**
* Add utility bar above header.
*
* @author Carrie Dils
* @copyright Copyright (c) 2013, Carrie Dils
* @license GPL-2.0+
*/
function utility_bar() {
	echo '<div class="header-container">';
    echo '<div class="utility-bar"><div class="wrap">';
 
    genesis_widget_area( 'utility-bar-left', array(
        'before' => '<div class="utility-bar-left">',
        'after' => '</div>',
    ) );
 
    genesis_widget_area( 'utility-bar-right', array(
        'before' => '<div class="utility-bar-right">',
        'after' => '</div>',
    ) );
 
    echo '</div></div>';
 
}
add_action( 'genesis_after_header', 'closeWrap' );
function closeWrap(){
	echo '</div>';
}


add_filter('sp_custom_footer', 'do_shortcode');
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
	?>

    <div class="row top-footer">
    	<div class="col l2 m4 s12 footer-logo top-footer">
    		<img src="http://timberking.msaavedra.com/wp-content/uploads/footer-logo.png">
    	</div>
    	<div class="col l2 m4 s12 offset-l8 top-footer">
    		<h5 style="line-height: 75px;"><a href="tel:8009424406">800-942-4406</a></h5>
    	</div>
    </div>
    <div class="row">
    	<div class="col l2 m4 s12 hide-on-small"></div>
    	<div class="col l2 m2 s6">
    		<h5><a href="http://timberking.msaavedra.com/timberking-portable-saw-mills/">Portable Sawmills</a></h5>
    		<ul>
                <div class="row">
                    <div class="col l4 m6">
                        <li><a href="http://timberking.msaavedra.com/product/timberking-2500/">2500</a></li>
                        <li><a href="http://timberking.msaavedra.com/product/timberking-2200/">2200</a></li>
						<li><a href="http://timberking.msaavedra.com/product/timberking-2000/">2000</a></li>
                    </div>
                    <div class="col l4 m6">
                        <li><a href="http://timberking.msaavedra.com/product/timberking-1600/">1600</a></li>
                        <li><a href="http://timberking.msaavedra.com/product/timberking-1400/">1400</a></li>
                        <li><a href="http://timberking.msaavedra.com/product/timberking-1220/">1220</a></li>
                    </div>
                </div>
    		</ul>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5 class="tk-footer-link"><a href="/resources">Resources</a></h5>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-resources-menu', 'container_class' => 'footer-resources-menu' ) ); ?>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5 class="tk-footer-link"><a href="/news">News</a></h5>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5 class="tk-footer-link"><a href="/dealers">Dealers</a></h5>
    	</div>
    	<div class="col l2 m2 s6">
    		<h5 class="tk-footer-link"><a href="/contact">Contact</a></h5>
    	</div>
    </div>
    <div class="row site-credits">
    	<div class="col s12 m6">
    		<p>&copy;  <?php echo do_shortcode('[year]'); ?>  TimberKing Co. All Rights Reserved.  Use of the TimberKing websites and our Company Information constitutes acceptance of our <a href="#">Terms and Conditions</a>.  <a href="#">Privacy Policy</a>.</p>
    	</div>
    	<div class="col s12 m6 offset-m6 social-media-icons ">
			<a href="https://www.facebook.com/TimberKingSawmills" target="_blank"><img src="http://timberking.msaavedra.com/wp-content/uploads/2.png"></a>
    	</div>
    </div>

	<?php
}

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

function woocommerce_template_loop_product_thumbnail(){ ?>
  <div class="woo-product-img" style="background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: 100%; background-position: center center; background-repeat: no-repeat;"></div>
  <?php
}

function register_additional_menu() {
  
	register_nav_menu( 'third-menu' ,__( 'Third Navigation Menu' ));
	register_nav_menu( 'footer-resources-menu' ,__( 'Footer Resources Menu' ));
     
}
add_action( 'init', 'register_additional_menu' );
add_action( 'genesis_after_header', 'add_third_nav_genesis' ); 

function add_third_nav_genesis() { 
	echo '<div class="side-nav" id="mobile-demo">';
	wp_nav_menu( array( 'theme_location' => 'third-menu', 'container_class' => 'genesis-nav-menu' ) );
	echo '</div>';
}

// Year Shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');

// New Header Image
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
add_action('genesis_site_title','custom_site_title');
function custom_site_title() {
	echo '<div class="site-title">';
	echo '<a href="/"><img src="http://timberking.msaavedra.com/wp-content/uploads/2017/02/logo.png"></a>';
	echo '</div>';
}