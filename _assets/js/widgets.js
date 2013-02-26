var $j = jQuery.noConflict();

// Sanfona no click do titulo
$j('.widget-header').click( function() {
	widget = $j(this).parent();
	widget.find('.widget-content').stop().slideToggle();
});