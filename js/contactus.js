$(document).ready(function(){
	var x=0;
	$('input[type="checkbox"]').click(function(){
		if($(this).attr("value")=="other"&&x==1)
		{
			$('.toHide').stop().hide('slow');
			x=0;
		}
        else if($(this).attr("value")=="other"&&x==0){
        	$(".other").stop().show('slow');
        	x=1;
        }
});
	
	$(".navbar-nav li a").click(function(event) {
$(".navbar-collapse").collapse('hide');
});
});