if($(window).width()>991){
$(".gptwq2").mouseenter(function() {
    $(this).css("background", "#E94B0A").css("transition","0.5s");
    $("#gptwq1").css("background", "#211D70").css("transition","0.5s");
    $(".gptwans1").css("visibility", "hidden").css("opacity","0").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");

    $(this).next().css("visibility","visible").css("opacity","1").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
}).mouseleave(function() {
     $(this).css("background", "#211D70").css("transition","0.5s");
    $(".gptwans1").css("visibility", "visible").css("opacity","1").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
    $("#gptwq1").css("background", "#E94B0A").css("transition","0.5s");
    $(this).next().css("visibility","hidden").css("opacity","0").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
    $(this).next().mouseenter(function(){
    	$(this).css("visibility", "visible").css("opacity","1").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
    	$("#gptwq1").css("background", "#211D70").css("transition","0.5s");
    	$(".gptwans1").css("visibility", "hidden").css("opacity","0").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
    	$(this).prev().css("background", "#E94B0A").css("transition","0.5s");
    }).mouseleave(function(){
    	$(".gptwans1").css("visibility", "visible").css("opacity","1").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
    	$("#gptwq1").css("background", "#E94B0A").css("transition","0.5s");
    	$(this).prev().css("background", "#211D70").css("transition","0.5s");
		$(this).css("visibility", "hidden").css("opacity","0").css("transition","visibility 0s linear 0.5s,opacity 0.5s linear");
    });
 });
}
