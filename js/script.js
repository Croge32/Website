$(document).ready(function() {
	$('.sidebuttons').mouseover(function(){
		$(this).fadeTo('fast', 1);
	});

	$('.sidebuttons').mouseleave(function(){
		$(this).fadeTo('fast', 0.5);
	});
});