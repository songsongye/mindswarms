$(document).ready(function() {

	$( ".trigger-nav" ).click(function() {
		$( "#mobile-nav" ).toggle( "slow", function() {
	    // Animation complete.
	  });
	});

});