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
        navigationTooltips: ['Главная', 'О компании', 'Как заказать', 'Оплата', 'Прайс', 'Отзывы', 'Контакты'],
        showActiveTooltip: true,
        dragAndMove: true,
        anchors:['hero', 'about', 'order', 'payment', 'price', 'testimonials', 'contacts'],
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


    // Yandex map
    ymaps.ready(init);
    var myMap,
    myPlacemark1,
    myPlacemark2;
    function init(){
        // Создание карты.
            myMap = new ymaps.Map("map", {
            center: [43.51583407764735,73.20454185556727],
            zoom: 6
        });

        myMap.controls
            .remove('trafficControl')
            .remove('geolocationConrol')
            .remove('searchControl')
            .remove('typeSelector');

        myMap.behaviors.disable([
        'drag'
        ]);

        myPlacemark1 = new ymaps.Placemark([43.3410295745422,76.96583], {
        balloonContentHeader: 'Филиал г. Алматы',
        balloonContent: 'пр. Суюнбая, 152Г'
        });
        myPlacemark2 = new ymaps.Placemark([42.29497538416909,69.64130883600399], {
        balloonContentHeader: 'Филиал г. Шымкент',
        balloonContent: 'ул. Койкелди Батыра, 26'
        });
        myMap.geoObjects.add(myPlacemark1).add(myPlacemark2);
    };

});


