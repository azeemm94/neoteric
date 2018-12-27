var x=$(window).width();


var onresize = function(e) {
   //note i need to pass the event as an argument to the function
   x=e.target.outerWidth;

}
window.addEventListener("resize", onresize);

	if(x > 1200){

		$('.neotericnavbar').mouseover(function() {
		  $('.tabimg').stop().slideDown('fast');
		});

		$('.neotericnavbar').mouseout(function() {
		  $('.tabimg').stop().slideUp('fast');
		});
	}

	else{};
   



