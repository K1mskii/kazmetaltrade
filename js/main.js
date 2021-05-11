document.addEventListener('DOMContentLoaded', () => {
    // Burger menu
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
    new fullpage('#fullpage', {
        autoScrolling: true,
        navigation: true,
        navigationTooltips: ['Главная', 'О компании', 'Как заказать', 'Оплата', 'Прайс'],
        showActiveTooltip: true,
        dragAndMove: true,
        anchors:['hero', 'about', 'order', 'payment', 'price'],
    })

    // Accordion
    function initAcc(elem, option){
        document.addEventListener('click', function (e) {
            if (!e.target.matches(elem+' .accordion__link')) return;
            else{
                if(!e.target.parentElement.classList.contains('active')){
                    if(option==true){
                        let elementList = document.querySelectorAll(elem+' .accordion__item');
                        Array.prototype.forEach.call(elementList, function (e) {
                            e.classList.remove('active');
                        });
                    }            
                    e.target.parentElement.classList.add('active');
                }else{
                    e.target.parentElement.classList.remove('active');
                }
            }
        });
    }
    initAcc('.accordion.v1', true);

    // AOS animation
    AOS.init({
        disable: 'phone',
        duration: 1200
    });

    // inputMask
    let inputs = document.querySelectorAll('input[type="tel"]');
    let im = new Inputmask('+7 (999) 999-99-99');
    im.mask(inputs);
});


