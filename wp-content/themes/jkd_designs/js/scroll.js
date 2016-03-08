var jq = document.createElement('script');
jq.src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js";
document.querySelector('head').appendChild(jq);

jq.onload =jqReady;

function jqReady() {
	console.log("ready");

	// Change href of all back to top links
	//$('.back-to-top').attr('href','#contents');
	
	// Add animated scroll to a tags
	$('.navbar-inverse .navbar-nav > li > a').click(smoothScroll);
	
	//Add click event to nav h1
	// Show / hide nav list
	//$('#main-navigation h1').click(showNav);
}	
	
function smoothScroll() {
	//Set the scroll duration based on the distance to travel
	var dur = $( $(this).attr('href') ).offset().top / 30 + 1000;
	
	//Set the position to travel tpo based on the target element 
	var pos = $( $(this).attr('href') ).offset().top;
	
	//Output to the browser console for testing 
	console.log("scroll duration: "+dur+" scroll position: "+pos);
	
	//Animate the scroll of the window
	$('html,body').animate({ scrollTop: pos }, dur);
	
	// jquery animate: http://api.jquery.com/animate/
	// I know I don't need this (above), just wanted to keep it here for future ref! :) 
}

function showNav() {
	//Toggle main nav//
	//$('#main-navigation nav').toggle();
}


