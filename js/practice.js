/*$('.hoverlink').hover(function(e){
    e.preventDefault();
    $(this).find(".popup").stop().show('slow');
},
function() {
    $(this).find(".popup").stop().hide('slow');
});

$('.popup').hover(function(e){
    e.preventDefault();
    $(this).stop().show('slow');
},
function() {
    $(this).stop().hide('slow');
});
*/

$(".popup").mouseenter(function() {
  	$(this).stop().show('slow');
}).mouseleave(function() {
    $(this).stop().hide('slow');
 });


$(".hoverlink").mouseenter(function() {
  	$(this).find(".popup").stop().show('slow');
}).mouseleave(function() {
    $(this).find(".popup").stop().hide('slow');
 });

