function initDarkMode() {
    const buttonElement = document.querySelectorAll('.darkModeToggler');
    
    buttonElement.forEach(element => {
        let iconLight = element.querySelector('.darkModeIconLight');
        let iconDark = element.querySelector('.darkModeIconDark');

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            iconDark.classList.remove('hidden');
            iconLight.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            iconDark.classList.add('hidden');
            iconLight.classList.remove('hidden');
        }
    });
};
function toggleDarkMode(buttonElement) {
    const htmlElement = document.querySelector('html');
    const iconLight = buttonElement.querySelector('.darkModeIconLight');
    const iconDark = buttonElement.querySelector('.darkModeIconDark');

    if (localStorage.theme === 'light') {
        localStorage.theme = 'dark';
        htmlElement.classList.add('dark');
        iconLight.classList.add('hidden');
        iconDark.classList.remove('hidden');
        
    } else {
        localStorage.theme = 'light';
        htmlElement.classList.remove('dark');
        iconLight.classList.remove('hidden');
        iconDark.classList.add('hidden');
    }
}
export {initDarkMode, toggleDarkMode};