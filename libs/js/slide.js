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
		
		let scrolled = window.pageYOffset;
		
		document.getElementById("slide-book").style.bottom  = -64+(0.2)*scrolled + 'px'; 
		document.getElementById("slide-paperclip1").style.bottom  = 207+(0.3)*scrolled + 'px';
		document.getElementById("slide-paperclip2").style.bottom  = 245+(0.3)*scrolled + 'px';
		document.getElementById("slide-oculos").style.bottom  = 46+(0.4)*scrolled + 'px';
		document.getElementById("slide-tablet").style.bottom  = -87+(0.3)*scrolled + 'px';
		document.getElementById("slide-pen").style.bottom  = 45+(0.4)*scrolled + 'px';
		document.getElementById("scroll-btn").style.bottom  = 20-(0.4)*scrolled + 'px';
	};
};

window.onload = function() {
	var headercontent = document.querySelector(".header-section__content");
	headercontent.classList.add("animate-header__content");

	var slidebook = document.querySelector(".slide-book");
	slidebook.classList.add("animate-book");

	var slidepaperclip1 = document.querySelector(".slide-paperclip1");
	slidepaperclip1.classList.add("animate-paperclip1");

	var slidepaperclip2 = document.querySelector(".slide-paperclip2");
	slidepaperclip2.classList.add("animate-paperclip2");

	var slideoculos = document.querySelector(".slide-oculos");
	slideoculos.classList.add("animate-oculos");

	var slidetablet = document.querySelector(".slide-tablet");
	slidetablet.classList.add("animate-tablet");

	var slidepen = document.querySelector(".slide-pen");
	slidepen.classList.add("animate-pen");
};