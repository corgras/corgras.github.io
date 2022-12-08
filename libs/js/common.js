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
});



/*jq*/
(function() {
	"use strict";

	var app = {
		init: function() {
			this.btnHover();
		},
 
		setUpListeners: function() {
			$(".ripple").on("click", this.btnRipple);
		},

		//=== Ripple effect for buttons ===\\
		btnRipple: function(e) {
		var _this = $(this),
			offset = $(this).offset(),
			positionX = e.originalEvent.pageX - offset.left,
			positionY = e.originalEvent.pageY - offset.top;
		_this.append("<div class='ripple-effect'>");
		_this
			.find(".ripple-effect")
			.css({
				left: positionX,
				top: positionY
			})
			.animate({
				opacity: 0
			}, 1500, function() {
				$(this).remove();
			});
		},

		btnHover: function() {
			var btns = document.querySelectorAll(".btn, .el-ripple"),
			btn = [];

			btns.forEach(function(element, index) {
				var span = document.createElement("span");
				span.className = "el-ripple-circle";
				element.appendChild(span);

				// If The span element for this element does not exist in the array, add it.
				if (!btn[index])
				btn[index] = element.querySelector(".el-ripple-circle");

				element.addEventListener("mouseenter", function(e) {
					btnHandler(element, index, e);
				});

				element.addEventListener("mouseleave", function(e) {
					btnHandler(element, index, e);
				});
			});

			const btnHandler = function(element, index, e) {

				let offset = element.getBoundingClientRect(),
				left = e.pageX - offset.left - window.scrollX,
				top = e.pageY - offset.top - window.scrollY;

				btn[index].style.left = left + "px";
				btn[index].style.top = top + "px";
			}
		},
	}
	app.init();
}());