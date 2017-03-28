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
	  			<a class="waves-effect waves-light btn button" href="#">See it in action<i class="material-icons right">play_arrow</i></a>

  			</div>
  		</div>
  	</section>
	<section id="fpIconRow">
		<div class="row">
			<div id="icon-one" class="col l3 m6 icon-row-icon">
				<img src="http://timberking.msaavedra.com/wp-content/uploads/measure.png">
				<h3>Built to Last</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div id="icon-two" class="col l3 m6 icon-row-icon">
				<img src="http://timberking.msaavedra.com/wp-content/uploads/hammer.png">
				<h3>Craftsmanship</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div id="icon-three" class="col l3 m6 icon-row-icon">
				<img src="http://timberking.msaavedra.com/wp-content/uploads/teamwork.png">
				<h3>Strongest Warranty</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div id="icon-four" class="col l3 m6 icon-row-icon">
				<img src="http://timberking.msaavedra.com/wp-content/uploads/time.png">
				<h3>Tradition</h3>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
 
 			<!-- Triggered Icon Boxes -->
			<div id="icon-one-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="http://timberking.msaavedra.com/wp-content/uploads/measure.png" class="responsive-img">
					</div>
					<div class="col s12 m9 valign">
						<h3>Built to Last</h3>
						<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
					</div>
				</div>				
			</div>
			<div id="icon-two-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="http://timberking.msaavedra.com/wp-content/uploads/hammer.png" class="responsive-img">
					</div>
					<div class="col s12 m9 valign">
						<h3>Craftsmanship</h3>
						<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
					</div>
				</div>		
			</div>
			<div id="icon-three-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="http://timberking.msaavedra.com/wp-content/uploads/teamwork.png" class="responsive-img">
					</div>
					<div class="col s12 m9 valign">
						<h3>Strongest Warranty</h3>
						<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
					</div>
				</div>
			</div>
			<div id="icon-four-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="http://timberking.msaavedra.com/wp-content/uploads/time.png" class="responsive-img">
					</div>
					<div class="col s12 m9 valign">
						<h3>Tradition</h3>
						<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare. Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="fpPromo">
		<div class="row">
			<div class="col m6 s12 valign-wrapper" style="overflow:hidden;">
				<img src="http://timberking.msaavedra.com/wp-content/uploads//header-product-img.png" class="responsive-img valign" >
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
				<div class="valign"><img src="http://timberking.msaavedra.com/wp-content/uploads/history-img.png"></div>
			</div>
		</div>
	</section>
	<section id="fpFeatured">
		<div class="row">
			<div class="col s12 m6" style="background-image:url(http://timberking.msaavedra.com/wp-content/uploads/measure.jpg);">
				<article>
					<h3>Lorem Ipsum</h3>
				</article>
				<p>Lorem ipsum dolor sit amet, ferri suavitate in sea, et posse fuisset tractatos ius, cum cu causae mnesarchum accommodare.</p>
			</div>
			<div class="col s12 m6" style="background-image:url(http://timberking.msaavedra.com/wp-content/uploads/lumber.jpg);">
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