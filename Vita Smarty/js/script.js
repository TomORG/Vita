$(function(){
	//Set links for the navigation
	$("#navigation").children(".navigationLink").each(function( ) {
		$(this).attr("href", "index.php?site=" + $(this).attr("name"));
	});
});
