import Swiper from 'swiper';

const steps = document.querySelectorAll('.steps');
if (steps.length) {
    steps.forEach(el => {
        const swiper = new Swiper(el.querySelector('.swiper'), {
            slidesPerView: 'auto',
            spaceBetween: 24,
            breakpoints: {
                768: {
                    spaceBetween: 40
                },
                1024: {
                    enabled: false,
                    spaceBetween: 0
                }
            }
        });
    });
}