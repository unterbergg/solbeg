import Swiper, { Navigation, EffectFade } from 'swiper';

const histories = document.querySelectorAll('.history');
if (histories.length) {
    histories.forEach(el => {
        // Years slider
        const years = el.querySelector('.history-years');
        const yearsSwiper = new Swiper(years.querySelector('.swiper'), {
            modules: [Navigation],
            slidesPerView: 'auto',
            spaceBetween: 0,
            centeredSlides: true,
            slideActiveClass: 'current',
            slideToClickedSlide: true,
            threshold: 2,
            navigation: {
                nextEl: el.querySelector('.swiper-nav--next'),
                prevEl: el.querySelector('.swiper-nav--prev'),
            },
        });
        years.swiperInstance = yearsSwiper;

        // Description slider
        const content = el.querySelector('.history-description');
        const contentSwiper = new Swiper(content.querySelector('.swiper'), {
            modules: [EffectFade],
            slidesPerView: 1,
            autoHeight: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
        content.swiperInstance = contentSwiper;


        yearsSwiper.on('slideChange', e => {
            contentSwiper.slideTo(yearsSwiper.activeIndex);
        });
        contentSwiper.on('slideChange', e => {
            yearsSwiper.slideTo(contentSwiper.activeIndex);
        });
    });
}