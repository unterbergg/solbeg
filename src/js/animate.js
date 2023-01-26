import modal from "./modal";

export const animate = {
    init: function () {
        // Percent in vewport
        const percent = 10;

       // Animation delay between two animations (in ms)
        const delay = 200;

       // Elements
        const entries = document.querySelectorAll(".animate");

        entries.length && entries.forEach(entry => {
            const images = entry.querySelectorAll('img');
            if (images.length)
                entry.classList.add('animate-images');
        })


        // Animate observer
        if (window.IntersectionObserver) {
            const observer = new IntersectionObserver((entries) => {
                let entryDelay = delay;
                entries.length && entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        if (!target.dataset.animationDelay) {
                            target.style.setProperty('--animation-delay', entryDelay + 'ms');
                            entryDelay -=- delay;
                        }
                        target.classList.add('in-viewport');
                    }
                })
            });
            entries.forEach(entry => observer.observe(entry));
        } else {
            entries.forEach(entry => entry.classList.add('in-viewport'));
        }
    }
}

window.animate = animate;
animate.init();
export default animate;

// Approach
const checkPosition = (el) => {
    const li = el.querySelectorAll('li');
    if (li.length == 0) return;
    
    // Window height
    const wh = window.innerHeight;

    // Animation sector
    const sector = wh * .8;

    // Window scroll position (center screen)
    const scrollY = window.scrollY + wh / 2;

    // Element center position
    const elCenter = el.offsetTop + el.offsetHeight / 2;

    const sectorTop = elCenter - sector / 2;
    const sectorBottom = elCenter + sector / 2;
    const inViewport = sectorTop <= scrollY && sectorBottom >= scrollY;

    li.forEach(el => el.classList.remove('show'));

    if (inViewport) {
        const subSector = sector / li.length;
        for (let index = 0; index < li.length; index++) {
            const currentSector = scrollY >= sectorTop + subSector * index && scrollY <= sectorTop + subSector * index + subSector;
            if (currentSector)
                li[index].classList.add('show');
        }
    }
};
const approaches = document.querySelectorAll(".approach");
approaches.length && approaches.forEach(entry => {
    window.addEventListener('scroll', () => {
        checkPosition(entry);
    });
});