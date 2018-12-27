$('#datepicker').datepicker({
     dateFormat: 'dd-mm-yy',
     maxDate: new Date(),
     yearRange: "-100:+0",
     changeMonth: true,
     changeYear: true
 });

// Since confModal is essentially a nested modal it's enforceFocus method
// must be no-op'd or the following error results 
// "Uncaught RangeError: Maximum call stack size exceeded"
// But then when the nested modal is hidden we reset modal.enforceFocus

var enforceModalFocusFn = $.fn.modal.Constructor.prototype.enforceFocus;

$.fn.modal.Constructor.prototype.enforceFocus = function() {};

$confModal.on('hidden', function() {
    $.fn.modal.Constructor.prototype.enforceFocus = enforceModalFocusFn;
});
$confModal.modal({ backdrop : false });