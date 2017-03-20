<?php
/**
 * This file adds the Front Page Template to any Genesis Child Theme.
 */
 
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'my_custom_loop' );
function my_custom_loop () {
?>
 <div id="front-page-stacks">
  	<section id="fpSplash">
  		<div class="row valign-wrapper">
  			<div class="valign">
	  			<h2>Built like a tank</h2>
	  			<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
	  			<a class="waves-effect waves-light btn button">See it in action<i class="material-icons right">play_arrow</i></a>
  			</div>
  		</div>
  	</section>
	<section id="fpIconRow">
		<div class="row">
			<div class="col l3 m6">
				<img src="http://willangles.com/tk/wp-content/uploads/measure.png">
				<h3>Built to Last</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div class="col l3 m6">
				<img src="http://willangles.com/tk/wp-content/uploads/hammer.png">
				<h3>Craftsmanship</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div class="col l3 m6">
				<img src="http://willangles.com/tk/wp-content/uploads/teamwork.png">
				<h3>Strongest Warranty</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div class="col l3 m6">
				<img src="http://willangles.com/tk/wp-content/uploads/time.png">
				<h3>Tradition</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
		</div>
	</section>
	<section id="fpPromo">
		<div class="row">
			<div class="col m6 s12 valign-wrapper" style="overflow:hidden;">
				<img src="http://willangles.com/tk/wp-content/uploads//header-product-img.png" class="responsive-img valign" >
			</div>
			<div class="col m6 s12 valign-wrapper">
				<div class="valign">
					<h2>Solid-Welded 4 Post Head</h2>
					<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="fpHistory">
		<div class="row">
			<div class="col s12 m6 valign-wrapper">
				<p class="valign">Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div class="col s12 m6 valign-wrapper">
				<div class="valign"><img src="http://willangles.com/tk/wp-content/uploads/history-img.png"></div>
			</div>
		</div>
	</section>
	<section id="fpFeatured">
		<div class="row">
			<div class="col s12 m6" style="background-image:url(http://willangles.com/tk/wp-content/uploads/measure.jpg);">
				<article>
					<h3>Lorem Ipsum</h3>
				</article>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div class="col s12 m6" style="background-image:url(http://willangles.com/tk/wp-content/uploads/lumber.jpg);">
				<article>
					<h3>Lorem Ipsum</h3>
				</article>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
		</div>
	</section>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>