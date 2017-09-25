
function mainOfficeH() {
  var mainOfficeheight = $('#main-office').outerHeight();
  $('#rightContent, #leftContent').css('height', mainOfficeheight + 'px');
}
$(document).ready(function(){
	mainOfficeH();
});

$(window).resize(function() {
	mainOfficeH();
});