import Swiper from 'swiper';

const digits = document.querySelectorAll('.digits');
if (digits.length) {
    digits.forEach(el => {
        const swiper = new Swiper(el.querySelector('.swiper'), {
            slidesPerView: 'auto',
            spaceBetween: 60,
            breakpoints: {
                768: {
                    enabled: false,
                    spaceBetween: 0
                }
            }
        });
    });
}