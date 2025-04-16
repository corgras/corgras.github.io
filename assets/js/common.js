document.addEventListener("DOMContentLoaded", function() {

	// Версия READMORE 
	// Функция проверки наличия элемента
	function shouldRunScript() {
		return document.getElementById('release-version') !== null;
	}

	async function fetchLatestRelease() {
		// Проверяем наличие элемента перед выполнением
		if (!shouldRunScript()) {
			return; // Если элемента нет, выходим
		}

		const owner = 'corgras';
		const repo = 'readmore.js';
		const url = `https://api.github.com/repos/${owner}/${repo}/releases/latest`;

		try {
			const response = await fetch(url, {
				headers: {
					'Accept': 'application/vnd.github.v3+json'
				}
			});

			if (!response.ok) {
				throw new Error('Ошибка при загрузке данных');
			}

			const data = await response.json();
			const version = data.tag_name || '';
			const releaseElement = document.getElementById('release-version');
			releaseElement.textContent = `${version}`;
			releaseElement.classList.remove('loading');
		} catch (error) {
			const releaseElement = document.getElementById('release-version');
			releaseElement.textContent = '';
			releaseElement.classList.remove('loading');
			releaseElement.classList.add('error');
		}
	}

	// Вызываем функцию при загрузке страницы
	fetchLatestRelease();
	// Конец Версия READMORE
	
	// Проверка ширины окна перед добавлением класса
	function checkWindowWidth() {
		if (window.matchMedia("(min-width: 991px)").matches) {
			var minOffset = 50;

			window.addEventListener("scroll", function() {
				let hasClass = document.body.classList.contains("scrolls");

				if (minOffset < document.documentElement.scrollTop) {
					if (!hasClass) {
						document.body.classList.add("scrolls");
					}
				} else if (hasClass) {
					document.body.classList.remove("scrolls");
				}
			});
		}
	}

	// Функция, чтобы добавить класс "active" к активной ссылке
	function setActiveLink() {
		var windowHeight = window.innerHeight;
		var scrollPosition = window.scrollY;
		var li = document.querySelectorAll('.nav li');
		var links = document.querySelectorAll('.nav a');

		// Получаем верхнюю часть первой секции
		var firstSection = document.querySelector('article');
		var firstSectionTop = firstSection.getBoundingClientRect().top + window.pageYOffset;

		for (var i = 0; i < li.length; i++) {
			var anchor = links[i].getAttribute('href');
			var targetId = anchor.substr(1); // Получаем id целевого элемента без символа #
			var targetTop = getTargetTop(targetId);
			var targetElement = document.getElementById(targetId); // Получаем целевой элемент по его id
			var targetHeight = targetElement ? targetElement.offsetHeight : 0; // Используем targetElement здесь

			// Учитываем, что текст будет находиться на верхней части экрана
			var textTop = targetTop - windowHeight / 2;

			if ((i === 0 && scrollPosition >= textTop && scrollPosition < firstSectionTop) || // Для первой ссылки
				(scrollPosition >= targetTop - windowHeight / 2 && scrollPosition < targetTop + targetHeight - windowHeight / 2)) {
				li[i].classList.add('active');
			} else {
				li[i].classList.remove('active');
			}
		}
	}

	checkWindowWidth();

	// Кнопка копирования NPM
	const button = document.querySelector(".btn-clipboard");
	if (!button) return;

	const icon = button.querySelector("i.ics");
	const codeTextElement = document.querySelector(".code-snippet .line");
	if (!icon || !codeTextElement) return;

	const codeText = codeTextElement.textContent;

	button.addEventListener("click", function() {
		navigator.clipboard.writeText(codeText).then(() => {
			icon.classList.add("ics-hide");

			setTimeout(() => {
				icon.classList.remove("ics-clipboard", "ics-hide");
				icon.classList.add("ics-d-check");

				setTimeout(() => icon.classList.remove("ics-hide"), 50);

				setTimeout(() => {
					icon.classList.add("ics-hide");
					setTimeout(() => {
						icon.classList.remove("ics-d-check", "ics-hide");
						icon.classList.add("ics-clipboard");

						setTimeout(() => icon.classList.remove("ics-hide"), 50);
					}, 300);
				}, 5000);
			}, 300);
		}).catch(err => {
			console.error("Ошибка копирования текста: ", err);
		});
	});
});