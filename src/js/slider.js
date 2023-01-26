import Swiper, { Navigation, Pagination, EffectFade } from 'swiper';

const sliders = document.querySelectorAll('.slider');
if (sliders.length) {
    sliders.forEach(el => {
        const swiper = new Swiper(el.querySelector('.swiper'), {
            modules: [Navigation, Pagination, EffectFade],
            effect: el.dataset?.effect || 'slide',
            slidesPerView: 'auto',
            spaceBetween: 0,
            autoHeight: Boolean(el.dataset?.autoheight),
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: el.querySelector('.swiper-nav--next'),
                prevEl: el.querySelector('.swiper-nav--prev'),
            },
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                type: 'bullets',
                clickable: true,
                renderBullet: (index, className) => '<div class="' + className + '"><span></span></div>'
            }
        });
        el.swiperInstance = swiper;
    });
}