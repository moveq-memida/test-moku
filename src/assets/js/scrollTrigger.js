"use strict";

gsap.to('.p-story__txt--01', {
    y: 0,
    scrollTrigger: {
        trigger: '.scroll-trigger-img--01',
        start: 'center center',
        end: '+=1000',
        pin: true,
    }
});

gsap.to('.p-story__txt--02', {
    y: 0,
    scrollTrigger: {
        trigger: '.scroll-trigger-img--02',
        start: 'center center',
        end: '+=1000',
        pin: true,
    }
});

gsap.to('.p-story__txt--03', {
    y: 0,
    scrollTrigger: {
        trigger: '.scroll-trigger-img--03',
        start: 'center center',
        end: '+=1000',
        pin: true,
    }
});

gsap.to('.p-story__txt--04', {
    y: 0,
    scrollTrigger: {
        trigger: '.scroll-trigger-img--04',
        start: 'center center',
        end: '+=1000',
        pin: true,
    }
});

gsap.to('.scroll-trigger-img--01', {
    opacity: 1,
    scale: 1,
    duration: 0.3,
    scrollTrigger: {
        trigger: '.scroll-trigger--01',
        start: 'top center',
        end: '+=1000',
        toggleActions: 'play reverse play reverse',
    }
});

gsap.to('.scroll-trigger-img--02', {
    opacity: 1,
    scale: 1,
    duration: 0.3,
    scrollTrigger: {
        trigger: '.scroll-trigger--02',
        start: 'top center',
        end: '+=1000',
        toggleActions: 'play reverse play reverse',
    }
});

gsap.to('.scroll-trigger-img--03', {
    opacity: 1,
    scale: 1,
    duration: 0.3,
    scrollTrigger: {
        trigger: '.scroll-trigger--03',
        start: 'top center',
        end: '+=1000',
        toggleActions: 'play reverse play reverse',
    }
});

gsap.to('.scroll-trigger-img--04', {
    opacity: 1,
    scale: 1,
    duration: 0.3,
    scrollTrigger: {
        trigger: '.scroll-trigger--04',
        start: 'top center',
        end: '+=1000',
        toggleActions: 'play reverse play reverse',
    }
});

gsap.to('.p-everyone__img--mascot', {
    opacity: 1,
    y: -120,
    duration: 0.3,
    ease: "power2.out",
    scrollTrigger: {
        trigger: '.l-everyone',
        start: 'top center',
        end: '+=1000',
        toggleActions: 'play reverse play reverse',
    }
});
