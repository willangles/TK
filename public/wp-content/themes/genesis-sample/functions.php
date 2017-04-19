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
	wp_enqueue_script( 'prettyinit', get_stylesheet_directory_uri() . '/vendor/prettyPhoto/jquery.prettyPhoto.js', true);
	wp_enqueue_script( 'prettyphoto', get_stylesheet_directory_uri() . '/vendor/prettyPhoto/jquery.prettyPhoto.init.js', true);
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
// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

function custom_cart_shortcode() {
    return '<a href="/cart"><i class="nav-cart-icon material-icons dp48">shopping_cart</i> (' . WC()->cart->get_cart_contents_count()  . ')</a>';
}
add_shortcode('cartCount', 'custom_cart_shortcode');

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
    	<div class="col l2 m6 s12 footer-logo top-footer">
    		<img src="https://timberking.com/wp-content/uploads/footer-logo.png">
    	</div>
    	<div class="col l2 m6 s12 offset-l8 top-footer">
    		<h5 style="line-height: 75px;"><a href="tel:8009424406">800-942-4406</a></h5>
    	</div>
    </div>
    <div class="row">
    	<div class="col l2 m4 s12 hide-on-med-and-down"></div>
    	<div class="col l2 m4 s12">
    		<h5><a href="https://timberking.com/timberking-portable-saw-mills/">Portable Sawmills</a></h5>
    		<ul>
                <div class="row">
                    <div class="col l4 m6 s12">
                        <li><a href="https://timberking.com/product/timberking-1220/">1220</a></li>
						<li><a href="https://timberking.com/product/timberking-1400/">1400</a></li>
						<li><a href="https://timberking.com/product/timberking-1600/">1600</a></li>
                    </div>
                    <div class="col l4 m6 s12">
                        <li><a href="https://timberking.com/product/timberking-2000/">2000</a></li>
						<li><a href="https://timberking.com/product/timberking-2200/">2200</a></li>
						<li><a href="https://timberking.com/product/timberking-2500/">2500</a></li>
                    </div>
                </div>
    		</ul>
    	</div>
    	<div class="col l4 m4 s12">
    		<h5 class="tk-footer-link"><a href="/resources">Resources</a></h5>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-resources-menu', 'container_class' => 'footer-resources-menu' ) ); ?>
    	</div>
    	<div class="col l2 m4 s12 contact-col">
    		<h5 class="tk-footer-link"><a href="/contact">Contact</a></h5>
			<p><a href="https://goo.gl/maps/JpacJvcU4eu" target="_blank">1431 North Topping Avenue Kansas City, Missouri 64120</a></p>
			<p><a href="/contact">info@timberking.com</a></p>
    	</div>
    </div>
    <div class="row site-credits">
    	<div class="col s12 m6">
    		<p>&copy;  <?php echo do_shortcode('[year]'); ?> TimberKing Portable Sawmills</p>
    	</div>
    	<div class="col s12 m6 offset-m6 social-media-icons ">
			<a href="https://www.youtube.com/user/timberkingsawmills" target="_blank"><img src="https://timberking.com/wp-content/uploads/yt.png"></a>
			<a href="https://www.facebook.com/TimberKingSawmills" target="_blank"><img src="https://timberking.com/wp-content/uploads/2.png"></a>
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
	echo '<section id="woocommerce_product_search-2" class="widget woocommerce widget_product_search"><div class="widget-wrap">';
	echo	'<form role="search" method="get" class="mobile-search woocommerce-product-search" action="/">';
	echo    	'<label class="screen-reader-text active" for="woocommerce-product-search-field">Search for:</label>';
	echo		'<input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products…" value="" name="s" title="Search for:">';
	echo		'<input type="hidden" name="post_type" value="product"></form>';
	echo		'</div></section>';
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
	echo '<a href="/"><img src="https://timberking.com/wp-content/uploads/2017/02/logo.png"></a>';
	echo '</div>';
}

// Custom Button shortcode
function sButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   extract(shortcode_atts(array('class' => '#'), $atts));
   return '<a class="waves-effect waves-light btn button '.$class.'" href="'.$link.'"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('button', 'sButton');


add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
		$description = wc_format_content( term_description() );
		
	    if ( $image ) {
		    echo '<div class="row category-image-row">';
				echo '<div class="col s12 m6">';
				echo '<p>'. $description .'</p>';
				echo '</div>';
				echo '<div class="col s12 m6 category-image" style="background-image: url(' . $image . ');">';
				echo '</div>';
				
			echo '</div>';
		}
	}
}

add_action('wp_head', 'wpse_43672_wp_head');
function wpse_43672_wp_head(){
    ?>
	<script type="text/javascript">
		(function(a,e,c,f,g,h,b,d){var k={ak:"1072544920",cl:"oHGACNHFrHAQmPm2_wM",autoreplace:"800-942-4406"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
	</script>
    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-34946466-1', 'auto');
		ga('send', 'pageview');
	</script>
    <?php
}

if(is_page_template('contact-template.php')){
	add_action('genesis_after','genessee_tracking_info');
	function genessee_tracking_info(){
		?>
			<!-- Google Code for Signup Conversion Page -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 1072544920;
			var google_conversion_language = "en";
			var google_conversion_format = "1";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "ZE0ECOLNUhCY-bb_Aw";
			var google_conversion_value = 1.00;
			var google_conversion_currency = "USD";
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
			<noscript>
				<div style="display:inline;">
					<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1072544920/?value=1.00&amp;currency_code=USD&amp;label=ZE0ECOLNUhCY-bb_Aw&amp;guid=ON&amp;script=0"/>
				</div>
			</noscript>
		<?php
	}
}

if(is_page_template('thankyou.php')){
	add_action('genesis_after','genessee_tracking_info');
	function genessee_tracking_info(){
		?>
			<!-- Google Code for Signup Conversion Page -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 1072544920;
			var google_conversion_language = "en";
			var google_conversion_format = "1";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "ZE0ECOLNUhCY-bb_Aw";
			var google_conversion_value = 1.00;
			var google_conversion_currency = "USD";
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
			<noscript>
				<div style="display:inline;">
					<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1072544920/?value=1.00&amp;currency_code=USD&amp;label=ZE0ECOLNUhCY-bb_Aw&amp;guid=ON&amp;script=0"/>
				</div>
			</noscript>
		<?php
	}
}
