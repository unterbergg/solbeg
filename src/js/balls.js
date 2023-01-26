import Swiper, { Autoplay } from 'swiper';

const balls = document.querySelectorAll('.balls');
if (balls.length) {
    balls.forEach(el => {
        const slides = el.querySelectorAll('.swiper-slide')?.length || 0;
        const swiper = new Swiper(el.querySelector('.swiper'), {
            modules: slides > 3 ? [Autoplay] : [],
            loopedSlides: 3,
            loop: slides > 3,
            autoplay: {
                delay: 1500,
            },
            speed: 200,
            spaceBetween: 0,
            slidesPerView: 3,
            watchSlidesProgress: true,
        });
        el.swiperInstance = swiper;
    });
}