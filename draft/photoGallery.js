$(document).ready(function(){
	
	$("img").mouseover(function(){
		$(mainPicture).attr("src", ($(this).attr("src")));
	});
	
});