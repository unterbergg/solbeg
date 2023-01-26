import Swiper from 'swiper';

const offices = document.querySelectorAll('.offices');
if (offices.length) {
    offices.forEach(el => {
        // const swiper = new Swiper(el.querySelector('.swiper'), {
        //     spaceBetween: 16,
        //     slidesPerView: 'auto',
        // });
        // el.swiperInstance = swiper;

        const swiper_el = el.querySelector('.swiper')
        let swiper = null;
        let breakpoint = window.matchMedia('(min-width:768px)');
        let breakpointChecker = function() {
            if ( breakpoint.matches === true ) {
                if ( swiper !== null )  swiper.destroy( true, true );
                return ;
            } else if ( breakpoint.matches === false ) {
                return enableSwiper();
            }
        };
        const enableSwiper = function() {
            swiper = new Swiper(swiper_el, {
                    spaceBetween: 16,
                    slidesPerView: 'auto',
            });
            el.swiperInstance = swiper;
        };
        breakpoint.addListener(breakpointChecker);
        breakpointChecker();
    });
}