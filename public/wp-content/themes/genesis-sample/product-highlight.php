<?php
/**
* Template Name: TimberKing Product Highlight
* Description: Used as a page template to show
* premium TimberKing Products
* through the "Genesis Office Hours" category
*/
// Add our custom loop
add_filter( 'body_class', 'childthemeprefix_tk_product_body_class' );
function childthemeprefix_tk_product_body_class( $classes ) {
	$classes[] = 'tk-product';
	return $classes;
}
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'product_highlight' );




function product_highlight() { ?>

	<div class="product-master-wrapper">
		<div class="product-main-wrapper wrap">
			<div class="row product-image-background" style="">
				<div class="col s12 m12 l6 valign-wrapper product-image">
					<?php the_post_thumbnail( 'single-post-thumbnail', array('class' => 'valign')); ?>
				</div>
				<div class="col s12 m12 l6 product-content">
					<h3>TimberKing 1400</h3>
					<div class="product-content-box">
						<p><strong>AMERICA'S FIRST & ONLY MID-SIZED MILL WITH KEY DIRECT-ACTION HYDRAULICS</strong></p>
						<p>The TimberKing 1400 offers fully-portable convenience with key Direct-Action Hydraulics for Hydraulic Blade Feed and Hydraulic Blade Up/Down.  Compare to similarly-priced brands with hand-crank feed, hand-crank blade up/down you'll see for yourself the TimberKing Value Advantage.
							<br>
						Not only do you take a big step up with these key hydraulics -- the 1400's features give you serious strength and stability that has made TimberKing the top choice of sawyers since 1929:  4-Post Cutting Head, Fully-Welded All-Steel Log Deck, Auto-Clutch, Automated Log Loading, Bi-Directional Chain Log Turner, Standard Transpart Package, best warranty in the business, and much more.</p>
					</div>
					<div class="row price-box">
						<div class="col s12">
							<h4 class="tk-product-price">$8,100</h4>
							<button class="waves-effect waves-light btn button"><i class="material-icons right">play_arrow</i>BUY NOW</button>
						</div>
						<div class="col s12">
							<h4 class="tk-product-deposit">$1,000</h4>
							<button class="deposit waves-effect waves-light btn button"><i class="material-icons right">play_arrow</i>DEPOSIT </button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row featured-extra-images">
				<div class="col s3"><img src="http://timberking.com/wp-content/uploads/icon1.jpg"></div>
				<div class="col s3"><img src="http://timberking.com/wp-content/uploads/icon2.jpg"></div>
				<div class="col s3"><img src="http://timberking.com/wp-content/uploads/icon3.jpg"></div>
				<div class="col s3"><img src="http://timberking.com/wp-content/uploads/icon4.jpg"></div>
			</div>
		</div><!-- Product Main Wrapper -->
		<div class="product-info-wrapper">
			<ul class="product-info-nav">
				<li class="info-panel"><a id="tk-product-overview">Overview</a></li>
				<li class="info-panel"><a id="tk-product-features">Features</a></li>
				<li class="info-panel"><a id="tk-product-specs">Specifications</a></li>
				<li class="info-panel"><a  id="tk-product-warranty" >Warranty</a></li>
				<li class="info-panel"><a id="tk-product-qa">Q&A</a></li>
			</ul>
			<div class="row wrap">
				<div class="col s12 m12 l8">
					<div id="overview" class="info-panel-to-show info-panel-show">
						<h2>Overview</h2>
						<p><strong>Cutting Head</strong><span>4-Post</span></p><hr>
						<p><strong>Cutting Deck</strong><span> Twin-Beam, Solid Welded</span></p><hr>
						<p><strong>Standard Motor</strong><span> 23.5 HP Kohler V-Twin</span></p><hr>
						<p><strong>Machine Weight</strong><span> 2,800 lbs.</span></p><hr>
						<p><strong>Max Log Diameter</strong><span> 34"</span></p><hr>
						<p><strong>Max Cut Length</strong><span> 20'</span></p><hr>
						<p><strong>Max Width of Cut</strong><span> 29"</span></p><hr>
						<p><strong>Clearance Above Blade</strong><span> 16"</span></p><hr>
						<p><strong>Machine Width</strong><span> 6' 10"</span></p><hr>
						<p><strong>Machine Length</strong><span> 29'</span></p><hr>
						<p><strong>Blade Clutch</strong><span> Standard</span></p><hr>
						<p><strong>Moveable Guide Roller</strong><span> Manual</span></p><hr>
						<p><strong>Command Post</strong><span> Walk-Along</span></p><hr>
						<p><strong>Direct-Action Hydraulics</strong><span> Standard on 1400H</span></p><hr>
						<p><strong>Feed System</strong><span> 1400M: Manual 1400H: Hydraulic</span></p><hr>
						<p><strong>Blade Up/Down</strong><span> 1400M: Manual 1400H: Hydraulic</span></p><hr>
						<p><strong>Bi-Directional Chain Log Turner</strong><span> Manual</span></p><hr>
						<p><strong>Log Stops</strong><span> Manual Mechanical (4)</span></p><hr>
						<p><strong>Log Clamp</strong><span> Manual</span></p><hr>
						<p><strong>Highway Transport</strong><span> Package Standard</span></p><hr>
						<p><strong>Fine Adjust Outriggers</strong><span> Standard</span></p><hr>
						<p><strong>Money-Back Guarantee</strong><span> 30-Day, No Questions</span></p><hr>
						<p><strong>Warranty</strong><span> 2 Year Limited</span></p><hr>
						<p><strong>Cutting Deck Warranty</strong><span> 5 Year Limited</span></p><hr>
					</div>
					<div id="features" class="info-panel-to-show">
						<img src="http://timberking.com/wp-content/uploads/head.gif" class="responsive-img">
					</div>
					<div id="specs" class="info-panel-to-show">
						<h2>Specifications</h2>
						<p><strong>Cutting Head</strong><span>4-Post</span></p><hr>
						<p><strong>Cutting Deck</strong><span> Twin-Beam, Solid Welded</span></p><hr>
						<p><strong>Standard Motor</strong><span> 23.5 HP Kohler V-Twin</span></p><hr>
						<p><strong>Machine Weight</strong><span> 2,800 lbs.</span></p><hr>
						<p><strong>Max Log Diameter</strong><span> 34"</span></p><hr>
						<p><strong>Max Cut Length</strong><span> 20'</span></p><hr>
						<p><strong>Max Width of Cut</strong><span> 29"</span></p><hr>
						<p><strong>Clearance Above Blade</strong><span> 16"</span></p><hr>
						<p><strong>Machine Width</strong><span> 6' 10"</span></p><hr>
						<p><strong>Machine Length</strong><span> 29'</span></p><hr>
						<p><strong>Blade Clutch</strong><span> Standard</span></p><hr>
						<p><strong>Moveable Guide Roller</strong><span> Manual</span></p><hr>
						<p><strong>Command Post</strong><span> Walk-Along</span></p><hr>
						<p><strong>Direct-Action Hydraulics</strong><span> Standard on 1400H</span></p><hr>
						<p><strong>Feed System</strong><span> 1400M: Manual 1400H: Hydraulic</span></p><hr>
						<p><strong>Blade Up/Down</strong><span> 1400M: Manual 1400H: Hydraulic</span></p><hr>
						<p><strong>Bi-Directional Chain Log Turner</strong><span> Manual</span></p><hr>
						<p><strong>Log Stops</strong><span> Manual Mechanical (4)</span></p><hr>
						<p><strong>Log Clamp</strong><span> Manual</span></p><hr>
						<p><strong>Highway Transport</strong><span> Package Standard</span></p><hr>
						<p><strong>Fine Adjust Outriggers</strong><span> Standard</span></p><hr>
						<p><strong>Money-Back Guarantee</strong><span> 30-Day, No Questions</span></p><hr>
						<p><strong>Warranty</strong><span> 2 Year Limited</span></p><hr>
						<p><strong>Cutting Deck Warranty</strong><span> 5 Year Limited</span></p><hr>
					</div>
					<div id="warranty" class="info-panel-to-show">
						<h2>Warranty</h2>

						<p>Lorem ipsum dolor sit amet, pri prompta alienum senserit ei, nec ne tritani alienum contentiones. Facer erant ius in. Dictas regione urbanitas vel ne, eum at sumo ocurreret, in utroque efficiendi eam. Cu sea nostro feugiat sapientem, modo nostrum eam ei, at vim fugit omittam voluptatibus. Pro an audiam option delenit, duo iriure docendi eloquentiam eu. Has no dictas utamur. Mel ne purto dicat honestatis, atqui dictas in sea, nam id impetus oblique.</p>

						<p>Eu facer salutandi adversarium est, ius adhuc sensibus cu. Eros primis id eum. Dico probatus tacimates pri id, ad has oblique nostrud partiendo, at eum debitis delicata. Id natum nulla referrentur eos. Option dolores complectitur at pro. Nec an propriae ocurreret.</p>

						<p>Nihil qualisque no duo, nobis scripta mediocrem ad vel, his viderer deserunt te. Ei his graeco nonumes, agam putent te sea. Pri in facilisi praesent. Summo mollis aperiri eum ei, id mei epicurei molestiae evertitur. Erat harum principes sed et, ut sea fierent scribentur. No vim quaeque legimus moderatius, nam ut graeci iudicabit honestatis. Ius at choro vitae euripidis.</p>

						<p>Sea altera splendide ei. Usu essent quaerendum suscipiantur in, his te sumo fabellas, et usu soluta noster atomorum. Pro in lorem decore. Meis nobis vel ex, id vis equidem delicata adolescens. Congue repudiare in ius, vis affert possit ex.</p>

						<p>In eius nominati vix. Ea discere singulis nam, sea commodo accusam omittantur ne, qui ad option menandri. Et usu habemus ocurreret. Pro ex tempor instructior, in vel debet integre. Cum at inani virtute, pro id habeo corpora delicata.</p>
					</div>
					<div id="qa" class="info-panel-to-show qa">

						<h2>Q & A</h2>
						<p><strong><span class="tk-red">Q:</span> What makes the 1400 my best choice in a Medium-Size mill?</strong></p>

						<p><span class="tk-red">A:</span> The 1400 offers many more standard features than the others in its class, including standard transport package and 4-Post Head. The Value Advantage of the 1400 really comes down to one thing: DIRECT-ACTION HYDRAULICS. No other mill in this price range offers the hydraulic automation available on the 1400. Automatic blade feed and automatic blade up/down come standard. Compare to other brands where hand cranks power these operations. And standard auto log loading and manual Bi-Directional Chain Log Turner give the 1400 labor saving power that’s simply not available on other brands.</p>

						<p><strong><span class="tk-red">Q:</span> Why does the 1400 have direct-action hydraulics ONLY on Blade Feed and Blade Up/Down?</strong></p>

						<p><span class="tk-red">A:</span> Hydraulics save time and effort but cost money. This is the mill for serious do-it-yourselfers: larger capacities and more convenience than our smallest mill, without the higher prices of our fully-hydraulic, pro sawyer mills.</p>

						<p><strong><span class="tk-red">Q:</span> How do I know if the 1400 is the right mill for me?</strong></p>

						<p><span class="tk-red">A:</span> If you have big plans but a tight budget, the 1400 could be a good choice for you. Think about the logs you’ll cut: the 1400 handles logs up to 20’ long by 34” diameter. Think about volume: the 1400 turns out a much as 275board feet per hour. Think about ease-of-use: the 1400’s key hydraulics make cutting easy and fun. Finally, think about value. No other brand offers so many features and so much automation at anywhere near the 1400’s low price.</p>

						<p><strong><span class="tk-red">Q:</span> Will the 1400 do what I need it to?</strong></p>

						<p><span class="tk-red">A:</span> Here are some ways to make sure. Give us a call and we can tell you about the 1400 in detail. Then try it for yourself. Every TK mill comes with our exclusive 30-Day Money Back Guarantee. Try it for a full month in your woodlot. Not satisfied for any reason, back it comes!</p>
					</div>
					<p class="notice">Specifications refer to standard configuration mills and are subject to change without notice.</p>
				</div>
				<div class="col s12 m12 l4">
					<div class="product-video-wrap">
						<div>
							<img src="http://timberking.com/wp-content/uploads/Screen-Shot-2017-02-23-at-10.47.51-PM.png">
						</div>
						<div>
							<img src="http://timberking.com/wp-content/uploads/Screen-Shot-2017-02-23-at-10.48.04-PM.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
	<script>
	
	$(document).ready(function(){ 
		$('#tk-product-overview').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#overview').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-features').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#features').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-specs').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#specs').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-warranty').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#warranty').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-qa').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#qa').show(600);
			$(this).addClass('active');
		});
	});

	</script>

<?php }

genesis();