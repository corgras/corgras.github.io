var menu_btn = document.querySelector(".nav-hamburger__btn");

menu_btn.onclick = function(e) {
	e.preventDefault();
	menu_btn.classList.toggle('is-active');
	document.querySelector('.header__navigation').classList.toggle('is-active');
};

if (window.matchMedia("(min-width: 991px)").matches) {
	var minOffset = 50;
	window.onscroll = function() { 
		let has_class = document.body.classList.contains("is_scrolled");

		if (minOffset < document.documentElement.scrollTop ) {
			if (!has_class) {
				document.body.classList.add("is_scrolled");
			}
		} else if (has_class) {
			document.body.classList.remove("is_scrolled")
		}
	};
};

const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
	animationTime = 400,
	framesCount = 20;

anchors.forEach(function(item) {
	item.addEventListener('click', function(e) {
		e.preventDefault();

		let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;

		let scroller = setInterval(function() {
			let scrollBy = coordY / framesCount;

			if(scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
				window.scrollBy(0, scrollBy);
			} else {
				window.scrollTo(0, coordY);
				clearInterval(scroller);
			}
		}, animationTime / framesCount);
	});
});



$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#scrollTop').css("display", "flex").fadeIn();
			} else {
				$('#scrollTop').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#scrollTop').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
		
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

});