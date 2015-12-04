$(document).ready(function(){
	//Remove outline from links
	$("a").click(function(){
		$(this).blur();
	});
	//When mouse rolls over
	$(".extend").mouseover(function(){
		$(this).stop().animate({height:'2.6em'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	$(".extend2").mouseover(function(){
		$(this).stop().animate({height:'7em'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	$(".extend3").mouseover(function(){
		$(this).stop().animate({height:'9em'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});

	//When mouse is removed
	$(".extend").mouseout(function(){
		$(this).stop().animate({height:'2.6em'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
});