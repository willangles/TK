<?php
/**
* Template Name: Thanks Template
* Description: Thanks Template
* 
* 
*/
// Add our custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'thanks_template' );
function thanks_template() { ?>

<div class="form-template-container">
		<div class="row">
            <div class="col m6 s12">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('ty_copy'); ?></p>
            </div>
            <div class="col m6 s12">
                <div class="row" style="padding-top: 4rem;">
                    <div class="col s6"><a href="https://timberking.com/" style="line-height:2.75;" class="waves-effect waves-light btn button">Return To Home</a></div>
                    <div class="col s6"><a href="https://timberking.com/shop/" style="line-height:2.75;" class="waves-effect waves-light btn button">Return To Store</a></div>
                </div>
            </div>
        </div>
</div>



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

<?php }

genesis();