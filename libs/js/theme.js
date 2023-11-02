document.addEventListener("DOMContentLoaded", function() {
    // Функция для определения текущей темы
    function getTheme() {
        return localStorage.getItem("theme") || (window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : "light");
    }

    // Функция для установки темы и обновления стиля переключателя
    function setTheme(theme) {
        if (theme === "dark") {
            document.body.classList.add("theme-dark");
        } else {
            document.body.classList.remove("theme-dark");
        }
        localStorage.setItem("theme", theme);

        // Обновление стиля переключателя
        const themeSwitch = document.getElementById("switch");
        if (themeSwitch) {
            themeSwitch.checked = (theme === "dark");
        }
    }

    // Инициализация темы при загрузке страницы
    const initialTheme = getTheme();
    setTheme(initialTheme);

    // Обработчик события для переключения темы
    const themeSwitch = document.getElementById("switch");
    if (themeSwitch) {
        themeSwitch.addEventListener("change", function () {
            if (this.checked) {
                setTheme("dark");
            } else {
                setTheme("light");
            }
        });
    }
});