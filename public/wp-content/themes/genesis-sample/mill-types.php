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
    <h3 class="valign"><?php single_post_title(); ?></h3>
</section>

<section id="mill-focus">
    <article id="focus-intro" class="row focus-item">
        <div class="col s12">
            <p>1Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
    <article id="focus-1220" class="row hidden focus-item">
        <div class="col m6 s12">
            <img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png">
        </div>
        <div class="col m6 s12">
            <p>2Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
    <article id="focus-1400" class="row hidden focus-item">
        <div class="col m6 s12">
            <img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png">
        </div>
        <div class="col m6 s12">
            <p>3Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
    <article id="focus-1600" class="row hidden focus-item">
        <div class="col m6 s12">
            <img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png">
        </div>
        <div class="col m6 s12">
            <p>1Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
    <article id="focus-2000" class="row hidden focus-item">
        <div class="col m6 s12">
            <img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png">
        </div>
        <div class="col m6 s12">
            <p>1Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
    <article id="focus-2200" class="row hidden focus-item">
        <div class="col m6 s12">
            <img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png">
        </div>
        <div class="col m6 s12">
            <p>1Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
    <article id="focus-2500" class="row hidden focus-item">
        <div class="col m6 s12">
            <img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png">
        </div>
        <div class="col m6 s12">
            <p>1Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam</p>
            <p><a class="btn btn-default">Learn More</a></p>
        </div>
    </article>
</section>

 <section id="mill-types">
  	<div class="row">
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col m6 s12">
                  <a class="mill-type" id="type-1220"><img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png"></a>
              </div>
              <div class="col m6 s12">
                  <p>Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam. <a class="mill-type" id="type-1220">Learn More</a></p>
              </div>
          </div>
      </div>
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col m6 s12">
                  <a class="mill-type" id="type-1400"><img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png"></a>
              </div>
              <div class="col m6 s12">
                  <p>Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam. <a class="mill-type" id="type-1400">Learn More</a></p>
              </div>
          </div>
      </div>

      <div class="col m4 s6 ">
          <div class="row">
              <div class="col m6 s12">
                  <a class="mill-type" id="type-1600"><img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png"></a>
              </div>
              <div class="col m6 s12">
                  <p>Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam. <a class="mill-type" id="type-1600">Learn More</a></p>
              </div>
          </div>
      </div>
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col m6 s12">
                  <a class="mill-type" id="type-2000"><img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png"></a>
              </div>
              <div class="col m6 s12">
                  <p>Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam. <a class="mill-type" id="type-2000">Learn More</a></p>
              </div>
          </div>
      </div>

      <div class="col m4 s6 ">
          <div class="row">
              <div class="col m6 s12">
                  <a class="mill-type" id="type-2200"><img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png"></a>
              </div>
              <div class="col m6 s12">
                  <p>Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam. <a class="mill-type" id="type-2200">Learn More</a></p>
              </div>
          </div>
      </div>
      <div class="col m4 s6 ">
          <div class="row">
              <div class="col m6 s12">
                  <a class="mill-type" id="type-2500"><img src="http://www.norwoodsawmills.com/sites/norwood/files/lumberprohd36.png"></a>
              </div>
              <div class="col m6 s12">
                  <p>Lorem ipsum dolor sit amet, an duo dicta nihil interpretaris, ut quo nihil definitionem. Pri an facete reprehendunt, ei tollit iudicabit nam, no corpora efficiantur nam. <a class="mill-type" id="type-2500">Learn More</a></p>
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
        t1220 = jQuery('#type-1220'),
        t1400 = jQuery('#type-1400'),
        t1600 = jQuery('#type-1600'),
        t2000 = jQuery('#type-2000'),
        t2200 = jQuery('#type-2200'),
        t2500 = jQuery('#type-2500');

    t1220.click(function() {
        focus.hide(200);
        f1220.show(400);
        console.log('1220');
    });
    t1400.click(function() {
        focus.hide(200);
        f1400.show(400);
        console.log('1400');
    });
    t1600.click(function() {
        focus.hide(200);
        f1600.show(400);
        console.log('1600');
    });
    t2000.click(function() {
        focus.hide(200);
        f2000.show(400);
        console.log('2000');
    });
    t2200.click(function() {
        focus.hide(200);
        f2200.show(400);
        console.log('2200');
    });
    t2500.click(function() {
        focus.hide(200);
        f2500.show(400);
        console.log('2500');
    });
});
 </script>
<?php } ?>


<?php genesis(); ?>