new WOW().init();

        // SideNav Options
$('.button-collapse').sideNav({
edge: 'right', // Choose the horizontal origin
closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
});
$(document).ready(function() {
	var sync1 = $("#sync1");
	var sync2 = $("#sync2");
	var slidesPerPage = 4;
	var syncedSecondary = true;

	sync1.owlCarousel({
	  loop:true,
	  responsiveClass:true,
	 /// autoplay:true,
	  smartSpeed:5000,
	  autoplayTimeout:7000,
	  responsive:{
		0:{
		  items:1,
		  nav:false,
		  dots:false
		},
		576:{
		  items:1,
		  nav:true,
		  dots:false
		},
		992:{
		  items:1,
		  nav:false,
		  dots:false
		}
	  }
	}).on('changed.owl.carousel', syncPosition);

	sync2
	  .on('initialized.owl.carousel', function() {
		sync2.find(".owl-item").eq(0).addClass("current");
	  })
	  .owlCarousel({
		items: slidesPerPage,
		dots: false,
		autoplay:true,
		nav: false,
		smartSpeed:5000,
		autoplayTimeout:7000,
		slideBy: slidesPerPage,
		responsiveRefreshRate: 100
	  }).on('changed.owl.carousel', syncPosition2);

	function syncPosition(el) {
	  var count = el.item.count - 1;
	  var current = Math.round(el.item.index - (el.item.count / 2) - .5);

	  if (current < 0) {
		current = count;
	  }
	  if (current > count) {
		current = 0;
	  }

	  sync2
		.find(".owl-item")
		.removeClass("current")
		.eq(current)
		.addClass("current");
	  var onscreen = sync2.find('.owl-item.active').length - 1;
	  var start = sync2.find('.owl-item.active').first().index();
	  var end = sync2.find('.owl-item.active').last().index();

	  if (current > end) {
		sync2.data('owl.carousel').to(current, 100, true);
	  }
	  if (current < start) {
		sync2.data('owl.carousel').to(current - onscreen, 100, true);
	  }
	}

	function syncPosition2(el) {
	  if (syncedSecondary) {
		var number = el.item.index;
		sync1.data('owl.carousel').to(number, 100, true);
	  }
	}

	sync2.on("click", ".owl-item", function(e) {
	  e.preventDefault();
	  var number = $(this).index();
	  sync1.data('owl.carousel').to(number, 300, true);
	});
});

$("#owl-carousel-reviews").owlCarousel({
	loop:true,
	responsiveClass:true,
	autoplay:true,
	smartSpeed:5000,
	animateOut: 'fadeOut',
    animateIn: 'fadeIn',
	autoHeight:true,
	autoplayTimeout:7000,
		items:1,
		nav:false,
		dots:false
	
});


$("#owl-carousel-partners").owlCarousel({
	loop:true,
	responsiveClass:true,
	autoplay:true,
	smartSpeed:5000,
	autoplayTimeout:7000,
	responsive:{
	  0:{
		items:1,
		nav:false,
		dots:false
	  },
	  576:{
		items:2,
		nav:false,
		dots:false
	  },
	  992:{
		items:3,
		nav:true,
		dots:false
	  }
	}
});