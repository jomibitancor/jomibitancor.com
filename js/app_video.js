const intro = document.getElementById('header')
const video = document.getElementById('video')
const text = document.getElementById('my-name')

const controller = new ScrollMagic.Controller();

const scene = new ScrollMagic.Scene({
    duration: 12000,
    trigger: intro,
    triggerHook: 0
})
.addIndicators()
.setPin(intro)
.addTo(controller);

//Video Animation
let accelamount = 0.05;
let scrollpos = 0;
let delay = 0;

scene.on('update', e => {
    scrollpos = e.scrollPos / 1000;
});

setInterval(() => {
    delay += (scrollpos - delay) * accelamount;
    video.currentTime = delay;
}, 15)