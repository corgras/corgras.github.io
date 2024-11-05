document.addEventListener("DOMContentLoaded", () => {
    const getStoredTheme = () => localStorage.getItem('theme');

    const getPreferredTheme = () => {
        const storedTheme = getStoredTheme();
        if (storedTheme) {
            return storedTheme;
        }
        return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
    };

    const setTheme = (theme) => {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme);
        }
		
		// Обновление стиля переключателя
        const themeSwitch = document.getElementById("switch");
        if (themeSwitch) {
            themeSwitch.checked = (theme === "dark");
        }

        // Сохранение темы в localStorage
        localStorage.setItem('theme', theme);
    };

    setTheme(getPreferredTheme());

    const themeSwitch = document.getElementById("switch");
    if (themeSwitch) {
        themeSwitch.addEventListener("change", function () {
            const selectedTheme = this.checked ? "dark" : "light";
            setTheme(selectedTheme);
        });
    }

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        if (getStoredTheme() !== 'light' && getStoredTheme() !== 'dark') {
            setTheme(getPreferredTheme());
        }
    });
});