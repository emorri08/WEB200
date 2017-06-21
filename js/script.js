//Elly Boyd
//WEB200
//Protosite
//script.js

//responsive navigation
(function($){
$(document).ready(function(){

$('#mainNav > ul').prepend('<li class=\"mobile\"><a href=\"#\"><span>Menu <i>&#9776;</i></span></a></li>');
$('#mainNav > ul > li > a').click(function(e) {
  $('#mainNav li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#mainNav ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if( $(this).parent().hasClass('mobile') ) {
    e.preventDefault();
    $('#mainNav').toggleClass('expand');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});
})(jQuery);