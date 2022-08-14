import anime from "animejs";

export default () => {
    // Hide site-header when scolling down and show when scrolling up
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("site-header").style.top = "0";
        } else {
            document.getElementById("site-header").style.top = "-87px";
        }
        prevScrollpos = currentScrollPos;
    }

    // Mobile menu toggler
    const menuToggler = document.querySelector('.menu-mogile-toggler');
    const menuElement = document.querySelector('.menu-mobile');
    
    
    menuToggler.addEventListener('click', function () {
        const barOne = this.querySelector('#icon-bar-1');
        const barTwo = this.querySelector('#icon-bar-2');

        if (menuElement.classList.contains('menu-open')) {
            menuElement.classList.remove('menu-open');
            anime({
                targets: menuElement,
                height: 0,
                easing: 'easeInQuad',
                duration: 500,
            });
            anime({
                targets: barOne,
                x: 4,
                y: 3,
                rotate: 0,
            });
            anime({
                targets: barTwo,
                x: 0,
                y: 12,
                rotate: 0,
            });
        } else {
            menuElement.classList.add('menu-open');
            anime({
                targets: menuElement,
                height: '400px',
                easing: 'easeOutQuad',
                duration: 500,
            });
            anime({
                targets: barOne,
                x: 5.1109,
                y: 2.98959,
                rotate: '45',
            });
            anime({
                targets: barTwo,
                x: 2.98959,
                y: 12.8891,
                rotate: '-45',
            })
        }
    });
}
