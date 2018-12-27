

$('.numberline').bind('inview', monitor);
function monitor(event, visible)
{
    if(visible)
    {
      $('.count').each(function () {
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
            }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }

            });

        });
    $('.numberline').unbind('inview');
    }
    else
    {
        
      // element has gone out of the viewport
    }
}