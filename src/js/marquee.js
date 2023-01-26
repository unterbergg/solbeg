import Swiper, { Autoplay, FreeMode } from 'swiper';

window.addEventListener("load", () => {
    const marquees = document.querySelectorAll('.marquee');
    if (marquees.length) {
        marquees.forEach(el => {
            const swiper = new Swiper(el.querySelector('.swiper'), {
                modules: [Autoplay],
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 0,
                freeMode: true,
                preloadImages: true,
                centeredSlides: true,
                disableOnInteraction: true,
                speed: parseInt(el.dataset?.speed ?? 3000),
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false
                },
            });
            el.swiperInstance = swiper;
        });
    }
});