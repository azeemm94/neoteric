$(function() {

    $("[name=apptype]").click(function(){
            $('.toHide1').hide('slow');
            $("#apptype-"+$(this).val()).show('slow');
    });

    $("[name=int]").click(function(){
            $('.toHide2').hide('slow');
            $("#position-"+$(this).val()).show('slow');
    });

    
 });
var x=0;

$("#jobq").click(function(){
    $("#jobform").stop().toggle('fast');
    return false;
});