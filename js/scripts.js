$(document).ready(function() {

	$( ".trigger-nav" ).click(function() {
		$( "#mobile-nav" ).toggle( "slow", function() {
	    
	  });
	});


	$( ".overlay" ).hover(function() {
	  $(this).fadeOut( 100 );
	  $(this).css('display','none');
	});

});