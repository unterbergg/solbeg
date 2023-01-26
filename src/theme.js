/*
    Theme mode
*/

import Cookies from 'js-cookie';

window.Cookies = Cookies;

const toggleTheme = (theme) => {
    if (theme !== 'dark' && theme !== 'light')
        return false;
    Cookies.set('theme', theme);
    document.documentElement.dataset.theme = theme;
}

window.toggleTheme = toggleTheme;

const currentTheme = Cookies.get('theme');
if (currentTheme == void(0) || (currentTheme != 'dark' && currentTheme != 'light')) {
    const theme = (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) ? "dark" : "light";
    toggleTheme(theme);
    currentTheme = theme;
} else {
    document.documentElement.dataset.theme = currentTheme;
}

const currentCookies = Cookies.get('accepted');
if (currentCookies != void(0) && currentCookies == '1') {
    document.querySelector('.policy-agreement')?.classList.toggle('hide');
}
