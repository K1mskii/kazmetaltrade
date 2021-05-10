// burger menu
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__nav');
if(iconMenu) {
    iconMenu.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    })
}


// Slider section
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1200,
    })
    new fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        navigationTooltips: ['Главная', 'О компании', 'Как заказать', 'Оплата'],
        showActiveTooltip: true,
        dragAndMove: true,
        anchors:['hero', 'about', 'order', 'payment'],
    })
});

