
/*

$(function () {
      $('.carousel').find('.carousel-item').each(function (index, item) {
        var carouselItem = $(item).find('.carousel-number');
        if (carouselItem.length > 0) {
          carouselItem.text(index + 1);
          return;
        }
        var element = $('<div></div>');
        element
          .addClass('carousel-number')
          .text(index + 1);
        $(item).append(element);
      });
    });


*/






$(document).ready(function () {

    $('.carousel').carousel({
        interval: 10000
    })
	
	
	
	$("#myCarousel2").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#myCarousel2").swipeleft(function() {
      $(this).carousel('next');
   });
	
	
	
});







// social icons
    $('.g-language-nav > a').on('click', function(e) {
        var thisItem = $(this);
        var thisParent = $(this).parent('.g-language-nav');
        var siblings = $(thisParent).find('.language-content');
        if ($(siblings).length > 0 && $(siblings).css('display') === 'none') {
            $(siblings).show(300);
        }
        else {
            $(siblings).hide(300);
        }
        e.preventDefault();
    });