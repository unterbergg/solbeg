import device from "current-device";

document.addEventListener('click', e => {
    const el = e.target;
    if (isLink(el, '.video-play')) {
        e.preventDefault();
        const button = el.matches('.video-play') ? el : el.closest('.video-play');
        const wrapper = el.closest('.video');

        // Iframe video
        const iframe = wrapper.querySelector('iframe');
        iframe && iframe?.src && (iframe.src += (iframe.src.includes('?') ? '&' : '?') + 'autoplay=1');

        // Native video
        const video = wrapper.querySelector('video');
        video && !device.desktop() && (video.paused ? video.play() : video.pause()); // Force play on mobile
        video && (video.muted =! video.muted);
        video && wrapper.classList.toggle('playing');

        (iframe || video) && button.classList.toggle('hidden');
    }
});

document.addEventListener('modal:closed', e => {
    const videos = document.querySelectorAll('.video');
    if (videos.length > 0)
        videos.forEach(wrapper => {
            // Native video
            const video = wrapper.querySelector('video');
            video && (video.muted =! video.muted);
            video && wrapper.classList.toggle('playing');
            video && video.pause()
        });
});

export function initVideos() {
    const videos = document.querySelectorAll('.video');
    if (videos.length && device.desktop()) {
        console.log('Init videos');
        videos.forEach(el => {
            const video = el.querySelector('video');
            if (video) {
                el.addEventListener('mouseenter', () => {
                    video.paused && video.play();
                });
                el.addEventListener('mouseleave', () => {
                    !video.paused && !el.classList.contains('playing') && video.pause();
                });
            }
        });
    }
}
initVideos();