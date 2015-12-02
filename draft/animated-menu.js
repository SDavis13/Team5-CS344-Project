$(document).ready(function(){
	

	//Remove outline from links
	$("a").click(function(){
		$(this).blur();
	});
	//When mouse rolls over
	$("li").mouseover(function(){
		$(this).stop().animate({height:'50px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	$(extend2).mouseover(function(){
		$(this).stop().animate({height:'175px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	$(extend3).mouseover(function(){
		$(this).stop().animate({height:'230px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});

	//When mouse is removed
	$("li").mouseout(function(){
		$(this).stop().animate({height:'50px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
});