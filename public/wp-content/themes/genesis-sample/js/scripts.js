jQuery(document).ready(function() {
    jQuery('#menu-item-124 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Jumbo Super-Pro 59HP Mill with maxed hydraulics</p>');
    // jQuery('#menu-item-110 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>XL Super-Pro 49HP Mill with full hydraulics</p>');
    // jQuery('#menu-item-111 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Heavy Industrial 38HP Mill with full hydraulics</p>');
    // jQuery('#menu-item-112 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Massive Mid-size 27HP Mill with basic hydraulics</p>');
    // jQuery('#menu-item-113 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Fully Portable Mill with essential hydraulics</p>');
    // jQuery('#menu-item-114 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>World\'s toughest personal mill</p>');
    jQuery('#menu-item-447 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>XL Super-Pro 49HP Mill with full hydraulics</p>');
    jQuery('#menu-item-448 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Heavy Industrial 38HP Mill with full hydraulics</p>');
    jQuery('#menu-item-449 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Massive Mid-size 27HP Mill with basic hydraulics</p>');
    jQuery('#menu-item-450 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Fully Portable Mill with essential hydraulics</p>');
    jQuery('#menu-item-451 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>World\'s toughest personal mill</p>');
    jQuery('form.woocommerce-product-search').append('<i class="material-icons">search</i>');
});

jQuery(document).ready(function() {
    jQuery('#icon-one').click(function() {
        jQuery('.icon-row-icon').hide(200);
        jQuery('#icon-one-trigger').removeClass('hidden');

        jQuery('#icon-one-trigger').show(600);
    });
    jQuery('#icon-two').click(function() {
        jQuery('.icon-row-icon').hide(200);
        jQuery('#icon-two-trigger').removeClass('hidden');

        jQuery('#icon-two-trigger').show(600);
    });
    jQuery('#icon-three').click(function() {
        jQuery('.icon-row-icon').hide(200);
        jQuery('#icon-three-trigger').removeClass('hidden');

        jQuery('#icon-three-trigger').show(600);
    });
    jQuery('#icon-four').click(function() {
        jQuery('.icon-row-icon').hide(200);
        jQuery('#icon-four-trigger').removeClass('hidden');

        jQuery('#icon-four-trigger').show(600);
    });
    jQuery('.icon-trigger').click(function() {
        jQuery(this).hide(200);
        jQuery('.icon-row-icon').first().show("fast", function showNext() {
            jQuery(this).next(".icon-row-icon").show("fast", showNext);
        });
        jQuery('.icon-trigger').addClass('hidden');
    });
});

jQuery(document).ready(function() {
    jQuery('#tk-product-features').addClass('active');
    jQuery('.materialboxed').materialbox();
    jQuery(".button-collapse").sideNav();
    jQuery('.collapsible').collapsible();
    jQuery('#tk-modal').on('click', function() {
        jQuery('.modal').modal({
            complete: function() {
                jQuery("#tkPlayer iframe").attr("src", jQuery("#tkPlayer iframe").attr("src"));

            }
        });
    });
});

// Saw Mill Category Page

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
        focus.hide(200).then(f1220.show(400).then(scrollTo('#genesis-content')));

    });
    t1400.click(function() {
        focus.hide(200).then(f1400.show(400).then(scrollTo('#genesis-content')));

    });
    t1600.click(function() {
        focus.hide(200).then(f1600.show(400).then(scrollTo('#genesis-content')));

    });
    t2000.click(function() {
        focus.hide(200).then(f2000.show(400).then(scrollTo('#genesis-content')));

    });
    t2200.click(function() {
        focus.hide(200).then(f2200.show(400).then(scrollTo('#genesis-content')));

    });
    t2500.click(function() {
        focus.hide(200).then(f2500.show(400).then(scrollTo('#genesis-content')));

    });
});

// Add Class to Navigation
jQuery(document).ready(function() {

    jQuery('.nav-primary').addClass('hide-on-med-and-down');

    var mn = jQuery(".header-container");
    mns = "header-container-scrolled";
    hdr = jQuery('.site-header').height();

    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > hdr) {
            mn.addClass(mns);
        } else {
            mn.removeClass(mns);
        }
    });

});