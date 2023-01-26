import Swiper from 'swiper';

const recalcMaxHeight = (el) => {
    const ww = window.innerWidth;
    const wrapper = el.querySelector('.employees-wrapper');
    if (ww > 1024) {
        // Calc max-height
        wrapper.dataset.maxHeight = wrapper.scrollHeight;

        // Calc min height
        wrapper.classList.add('limit');
        wrapper.dataset.minHeight = wrapper.scrollHeight;
        wrapper.classList.remove('limit');

        // Set style
        const maxHeoght = wrapper.classList.contains('opened') ? wrapper.dataset.maxHeight : wrapper.dataset.minHeight;
        wrapper.style.setProperty("--max-height", maxHeoght + "px");
    } else {
        wrapper.style = false;
    }
}

const employees = document.querySelectorAll('.employees');
if (employees.length) {
    employees.forEach(el => {
        // Swiper
        const swiper = new Swiper(el.querySelector('.swiper'), {
            slidesPerView: 'auto',
            spaceBetween: 24,
            breakpoints: {
                1024: {
                    enabled: false,
                    spaceBetween: 0
                }
            }
        });

        // Wrapper slide down
        recalcMaxHeight(el);
        window.addEventListener("resize", function() {
            recalcMaxHeight(el);
        });
        const wrapper = el.querySelector('.employees-wrapper');
        const toggleLink = el.querySelector('.employees-toggle');
        toggleLink.addEventListener('click', (e) => {
            e.preventDefault();
            // Animate height
            const maxHeoght = wrapper.classList.contains('opened') ? wrapper.dataset.minHeight : wrapper.dataset.maxHeight;
            wrapper.style.setProperty("--max-height", maxHeoght + "px");
            wrapper.style.transition = ".4s ease-in-out max-height";

            // Toggle link text
            const text = toggleLink.dataset.text;
            toggleLink.dataset.text = toggleLink.innerText;
            toggleLink.innerText = text;

            // Disable animations
            setTimeout(() => { wrapper.style.transition = 'none'; }, 450);
            wrapper.classList.toggle('opened');
        })
    });
}