$(document).ready(function(){
	
	$("img").click(function(){
		$(mainPicture).attr("src", ($(this).attr("src")));
	});
	
});