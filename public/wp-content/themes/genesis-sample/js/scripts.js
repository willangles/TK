jQuery(document).ready(function(){
	jQuery('#menu-item-87 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Jumbo Super-Pro 59HP Mill with maxed hydraulics</p>');
	jQuery('#menu-item-110 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>XL Super-Pro 49HP Mill with full hydraulics</p>');
	jQuery('#menu-item-111 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Heavy Industrial 38HP Mill with full hydraulics</p>');
	jQuery('#menu-item-112 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Massive Mid-size 27HP Mill with basic hydraulics</p>');
	jQuery('#menu-item-113 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>Fully Portable Mill with essential hydraulics</p>');
	jQuery('#menu-item-114 a').append('<br class="clearfix"><br class="clearfix"><br class="clearfix"><p>World\'s toughest personal mill</p>');
});

jQuery(document).ready(function(){
	jQuery('#icon-one').click(function(){
		jQuery('#icon-one-trigger').removeClass('hidden');
		jQuery('.icon-row-icon').hide(200);
		jQuery('#icon-one-trigger').show(600);
	});
	jQuery('#icon-two').click(function(){
		jQuery('#icon-two-trigger').removeClass('hidden');
		jQuery('.icon-row-icon').hide(200);
		jQuery('#icon-two-trigger').show(600);
	});
	jQuery('#icon-three').click(function(){
		jQuery('#icon-three-trigger').removeClass('hidden');
		jQuery('.icon-row-icon').hide(200);
		jQuery('#icon-three-trigger').show(600);
	});
	jQuery('#icon-four').click(function(){
		jQuery('#icon-four-trigger').removeClass('hidden');
		jQuery('.icon-row-icon').hide(200);
		jQuery('#icon-four-trigger').show(600);
	});
	jQuery('.icon-trigger').click(function(){
		jQuery(this).hide(200);
		jQuery('.icon-row-icon').first().show( "fast", function showNext() {
    		jQuery( this ).next( ".icon-row-icon" ).show( "fast", showNext );
    	});
		jQuery('icon-trigger').addClass('hidden');
	});
});