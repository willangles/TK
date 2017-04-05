<?php
/**
* Template Name: TimberKing Mill Types Template
* Description: Display All Mills Available
*/
 
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'my_custom_loop' );
function my_custom_loop () {
?>

<section id="mill-types-header" class="valign-wrapper" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <h2 class="valign"><?php single_post_title(); ?></h2>
</section>

<section id="mill-focus">
    <article id="focus-intro" class="row focus-item">
        <div class="col s12">
            <h3><?php the_field('focus_intro_headline'); ?></h3>
            <p><?php the_field('focus_intro_content'); ?></p>
        </div>
    </article>

    <article id="focus-1220" class="row hidden focus-item" style="background: url(<?php the_field('focus1220_image'); ?>); background-size: cover; background-position: center;">
        <div class="col m6 s12"></div>
        <div class="col m6 s12">
            <h3><?php the_field('focus1220_headline'); ?></h3>
            <p><?php the_field('focus1220_content'); ?></p>
            <p style="text-align: center;"><a class="btn btn-default" href="<?php the_field('focus1220_link'); ?>">Learn More</a></p>
        </div>
    </article>
    
    <article id="focus-1400" class="row hidden focus-item" style="background: url(<?php the_field('focus1400_image'); ?>); background-size: cover; background-position: center;">
        <div class="col m6 s12"></div>
        <div class="col m6 s12">
            <h3><?php the_field('focus1400_headline'); ?></h3>
            <p><?php the_field('focus1400_content'); ?></p>
            <p style="text-align: center;"><a class="btn btn-default" href="<?php the_field('focus1400_link'); ?>">Learn More</a></p>
        </div>
    </article>
    <article id="focus-1600" class="row hidden focus-item" style="background: url(<?php the_field('focus1600_image'); ?>); background-size: cover; background-position: center;">
        <div class="col m6 s12"></div>
        <div class="col m6 s12">
            <h3><?php the_field('focus1600_headline'); ?></h3>
            <p><?php the_field('focus1600_content'); ?></p>
            <p style="text-align: center;"><a class="btn btn-default" href="<?php the_field('focus1600_link'); ?>">Learn More</a></p>
        </div>
    </article>
    <article id="focus-2000" class="row hidden focus-item" style="background: url(<?php the_field('focus2000_image'); ?>); background-size: cover; background-position: center;">
        <div class="col m6 s12"></div>
        <div class="col m6 s12">
            <h3><?php the_field('focus2000_headline'); ?></h3>
            <p><?php the_field('focus2000_content'); ?></p>
            <p style="text-align: center;"><a class="btn btn-default" href="<?php the_field('focus2000_link'); ?>">Learn More</a></p>
        </div>
    </article>
    <article id="focus-2200" class="row hidden focus-item" style="background: url(<?php the_field('focus2200_image'); ?>); background-size: cover; background-position: center;">
        <div class="col m6 s12"></div>
        <div class="col m6 s12">
            <h3><?php the_field('focus2200_headline'); ?></h3>
            <p><?php the_field('focus2200_content'); ?></p>
            <p style="text-align: center;"><a class="btn btn-default" href="<?php the_field('focus2200_link'); ?>">Learn More</a></p>
        </div>
    </article>
    <article id="focus-2500" class="row hidden focus-item" style="background: url(<?php the_field('focus2500_image'); ?>); background-size: cover; background-position: center;">
        <div class="col m6 s12"></div>
        <div class="col m6 s12">
            <h3><?php the_field('focus2500_headline'); ?></h3>
            <p><?php the_field('focus2500_content'); ?></p>
            <p style="text-align: center;"><a class="btn btn-default" href="<?php the_field('focus2500_link'); ?>">Learn More</a></p>
        </div>
    </article>
</section>
 <section id="mill-types">
  	<div class="row">
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col s12">
                  <div class="mill-type type-1220"><img src="<?php the_field('focus1220_image'); ?>"></div>
              </div>
              <div class="col s12">
                  <h3 class="mill-type type-1400"><?php the_field('focus1220_headline'); ?></h3>
              </div>
          </div>
      </div>
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col s12">
                  <div class="mill-type type-1400"><img src="<?php the_field('focus1400_image'); ?>"></div>
              </div>
              <div class="col s12">
                  <h3 class="mill-type type-1400"><?php the_field('focus1400_headline'); ?></h3>
              </div>
          </div>
      </div>

      <div class="col m4 s6 ">
          <div class="row">
              <div class="col s12">
                  <div class="mill-type type-1600"><img src="<?php the_field('focus1600_image'); ?>"></div>
              </div>
              <div class="col s12">
                  <h3 class="mill-type type-1400"><?php the_field('focus1600_headline'); ?></h3>
              </div>
          </div>
      </div>
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col s12">
                  <div class="mill-type type-2000"><img src="<?php the_field('focus2000_image'); ?>"></div>
              </div>
              <div class="col s12">
                  <h3 class="mill-type type-1400"><?php the_field('focus2000_headline'); ?></h3>
              </div>
          </div>
      </div>

      <div class="col m4 s6 ">
          <div class="row">
              <div class="col s12">
                  <div class="mill-type type-2200"><img src="<?php the_field('focus2200_image'); ?>"></div>
              </div>
              <div class="col s12">
                  <h3 class="mill-type type-1400"><?php the_field('focus2200_headline'); ?></h3>
              </div>
          </div>
      </div>
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col s12">
                  <div class="mill-type type-2500"><img src="<?php the_field('focus2500_image'); ?>"></div>
              </div>
              <div class="col s12">
                  <h3 class="mill-type type-1400"><?php the_field('focus2500_headline'); ?></h3>
              </div>
          </div>
      </div>

    </div>
 </section> <!-- end main container -->

 <script>
     jQuery(document).ready(function() {
    var focus = jQuery('.focus-item'),
        mt = jQuery('.mill-type'),
        f1220 = jQuery('#focus-1220'),
        f1400 = jQuery('#focus-1400'),
        f1600 = jQuery('#focus-1600'),
        f2000 = jQuery('#focus-2000'),
        f2200 = jQuery('#focus-2200'),
        f2500 = jQuery('#focus-2500'),
        fintro = jQuery('#focus-intro'),
        t1220 = jQuery('.type-1220'),
        t1400 = jQuery('.type-1400'),
        t1600 = jQuery('.type-1600'),
        t2000 = jQuery('.type-2000'),
        t2200 = jQuery('.type-2200'),
        t2500 = jQuery('.type-2500');

    t1220.click(function() {
        focus.hide(200);
        jQuery('html,body').animate({scrollTop:500},400);
        f1220.show(400);
        console.log('1220');
    });
    t1400.click(function() {
        focus.hide(200);
        jQuery('html,body').animate({scrollTop:500},400);
        f1400.show(400);
        console.log('1400');
    });
    t1600.click(function() {
        focus.hide(200);
        jQuery('html,body').animate({scrollTop:500},400);
        f1600.show(400);
        console.log('1600');
    });
    t2000.click(function() {
        focus.hide(200);
        jQuery('html,body').animate({scrollTop:500},400);
        f2000.show(400);
        console.log('2000');
    });
    t2200.click(function() {
        focus.hide(200);
        jQuery('html,body').animate({scrollTop:500},400);
        f2200.show(400);
        console.log('2200');
    });
    t2500.click(function() {
        focus.hide(200);
        jQuery('html,body').animate({scrollTop:500},400);
        f2500.show(400);
        console.log('2500');
    });
});
 </script>
<?php } ?>


<?php genesis(); ?>