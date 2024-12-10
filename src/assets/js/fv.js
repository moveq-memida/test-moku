"use strict";

// TOPページのHoverアクション用
class Inview {
    constructor() {
        this.els = document.querySelectorAll('[data-inview]');
        if (!this.els) return;
        this.init();
    }

    init() {
        this.els.forEach(el => {
            if (el.tagName === 'A') {
                this.addHoverEffect(el);
            }
        });
    }

    addHoverEffect(el) {
        const flipImage = el.querySelector('.p-bnr__img-flip');
        const mascotImage = el.querySelector('.p-bnr__img-mascot');
        const mascotTopImage = el.querySelector('.p-bnr__img-mascot-top');
        const mascotBottomImage = el.querySelector('.p-bnr__img-mascot-bottom');
        const mascotLeftImage = el.querySelector('.p-bnr__img-mascot-left');
        const mascotRightImage = el.querySelector('.p-bnr__img-mascot-right');

        if (flipImage && mascotImage) {
            el.addEventListener('mouseenter', () => {
                gsap.to(flipImage, {
                    x: '135%',
                    opacity: 1,
                    duration: 0.6,
                    rotation: 22,
                    ease: 'back.out(1.2)'
                });

                gsap.to(mascotImage, {
                    x: '-200%',
                    opacity: 1,
                    duration: 0.6,
                    rotation: -3,
                    ease: 'back.out(1.2)'
                });
            });

            el.addEventListener('mouseleave', () => {
                gsap.to(flipImage, {
                    x: 0,
                    opacity: 0.8,
                    duration: 0.6,
                    rotation: 0,
                    ease: 'back.out(1.2)'
                });

                gsap.to(mascotImage, {
                    x: 0,
                    opacity: 0.8,
                    duration: 0.6,
                    rotation: 0,
                    ease: 'back.out(1.2)'
                });
            });
        } else if (mascotTopImage && mascotBottomImage) {
            el.addEventListener('mouseenter', () => {
                gsap.to(mascotTopImage, {
                    y: '-135%',
                    opacity: 1,
                    duration: 0.6,
                    ease: 'back.out(1.2)'
                });

                gsap.to(mascotBottomImage, {
                    y: '-75%',
                    opacity: 1,
                    duration: 0.6,
                    ease: 'back.out(1.2)'
                });
            });

            el.addEventListener('mouseleave', () => {
                gsap.to(mascotTopImage, {
                    y: 0,
                    opacity: 1,
                    duration: 0.6,
                    ease: 'back.out(1.2)'
                });

                gsap.to(mascotBottomImage, {
                    y: 0,
                    opacity: 1,
                    duration: 0.6,
                    ease: 'back.out(1.2)'
                });
            });
        } else if (mascotLeftImage && mascotRightImage) {
            el.addEventListener('mouseenter', () => {
                gsap.to(mascotLeftImage, {
                    x: '130%',
                    opacity: 1,
                    duration: 0.2,
                    ease: Sine.easeOut,
                });

                gsap.to(mascotRightImage, {
                    x: '-130%',
                    opacity: 1,
                    duration: 0.2,
                    ease: Sine.easeOut,
                });
            });

            el.addEventListener('mouseleave', () => {
                gsap.to(mascotLeftImage, {
                    x: 0,
                    opacity: 1,
                    duration: 0.2,
                    ease: Sine.easeOut,
                });

                gsap.to(mascotRightImage, {
                    x: 0,
                    opacity: 1,
                    duration: 0.2,
                    ease: Sine.easeOut,
                });
            });
        }
    }
}

const inview = new Inview();
