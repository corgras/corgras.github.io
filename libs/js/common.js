document.addEventListener("DOMContentLoaded", function() {
	// Отображение/скрытие кнопки прокрутки вверх
	function setupScrollTopButton() {
		var scrollTopButton = document.getElementById("scrollTop");

		if (scrollTopButton) {
			window.addEventListener("scroll", function() {
				scrollTopButton.style.display = window.scrollY > 50 ? "flex" : "none";
			});

			scrollTopButton.addEventListener("click", function() {
				var scrollDuration = 400;
				var scrollStep = -window.scrollY / (scrollDuration / 15);
				var scrollInterval = setInterval(function() {
				if (window.scrollY != 0) {
					window.scrollBy(0, scrollStep);
				} else {
					clearInterval(scrollInterval);
				}
				}, 15);
			});
		}
	}

	// Плавный скролл по якорям
	function setupSmoothScroll() {
		const anchors = document.querySelectorAll('a[href*="#"]');
		const animationTime = 400;
		const framesCount = 20;

		anchors.forEach(function(anchor) {
			anchor.addEventListener('click', function(event) {
				event.preventDefault();

				let targetId = anchor.getAttribute('href').substr(1);
				let targetElement = document.getElementById(targetId);

				if (targetElement) {
					let targetY = targetElement.getBoundingClientRect().top + window.pageYOffset;
					let scrollBy = (targetY - window.pageYOffset) / framesCount;
	
					let scroller = setInterval(function() {
						if (scrollBy > window.pageYOffset - targetY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
							window.scrollBy(0, scrollBy);
						} else {
							window.scrollTo(0, targetY);
							clearInterval(scroller);
						}
					}, animationTime / framesCount);
				}
			});
		});
	}

	// Проверка ширины окна перед добавлением класса
	function checkWindowWidth() {
		if (window.matchMedia("(min-width: 991px)").matches) {
			var minOffset = 50;

			window.addEventListener("scroll", function() {
				let hasClass = document.body.classList.contains("is_scrolled");
		
				if (minOffset < document.documentElement.scrollTop) {
					if (!hasClass) {
						document.body.classList.add("is_scrolled");
					}
				} else if (hasClass) {
					document.body.classList.remove ("is_scrolled");
				}
			});
		}
	}

	// Отображение/скрытие кнопки прокрутки вверх
	function setupScrollAnchor() {
		var scrollAnchor = document.querySelector('.anchor');
		var firstSection = document.querySelector('.home');
	
		window.addEventListener('scroll', function() {
			if (window.scrollY > firstSection.offsetHeight) {
				scrollAnchor.classList.add('hide');
			} else {
				scrollAnchor.classList.remove('hide');
			}
		});
	}
	
	// Функция для определения, на какой якорь указывает ссылка
	function getTargetTop(targetId) {
		var target = document.querySelector(targetId);
		return target.getBoundingClientRect().top + window.pageYOffset;
	}

	// Функция, чтобы добавить класс "active" к активной ссылке
	function setActiveLink() {
		var windowHeight = window.innerHeight;
		var scrollPosition = window.scrollY;
		var links = document.querySelectorAll('.nav a');

		for (var i = 0; i < links.length; i++) {
			var anchor = links[i].getAttribute('href');
			var target = document.querySelector(anchor); // Объявляем переменную target
			var targetTop = getTargetTop(anchor);
			var targetHeight = target.offsetHeight; // Добавляем эту строку для получения высоты элемента

			// Учитываем, что текст будет находиться на середине экрана
			var middleOfScreen = windowHeight / 4;

			if (scrollPosition >= targetTop - middleOfScreen && scrollPosition < targetTop + targetHeight - middleOfScreen) {
				links[i].classList.add('active');
			} else {
				links[i].classList.remove('active');
			}
		}
	}

	// Обработчик прокрутки страницы
	window.addEventListener('scroll', setActiveLink);

	// Вызовем setActiveLink() один раз при загрузке страницы, чтобы определить активную ссылку при первоначальной загрузке
	window.addEventListener('load', setActiveLink);

	setupScrollTopButton();
	setupSmoothScroll();
	checkWindowWidth();
	setupScrollAnchor();
});