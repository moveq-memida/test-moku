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


// アンバサダーページ
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".c-bg-yellow .l-main__header", {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".c-bg-yellow .l-main__header",
            start: "top 80%",
            end: "top 50%",
            scrub: false,
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".p-mainVisual__txt", {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".c-bg-yellow .l-main__header",
            start: "top 80%",
            end: "top 50%",
            scrub: false,
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to('.p-ambassador img', {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.p-ambassador',
            start: 'top 80%',
            once: true,
        },
        onComplete: () => {
            gsap.to('.p-ambassador__text', {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power2.out',
            });
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);


    gsap.to('.p-activities__item', {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: 'power2.out',
        stagger: 0.3,
        scrollTrigger: {
            trigger: '.p-activities__list',
            start: 'top 80%',
            once: true,
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to('.p-entry-flow__item', {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: 'power2.out',
        stagger: 0.3,
        scrollTrigger: {
            trigger: '.p-entry-flow__list',
            start: 'top 80%',
            once: true,
        },
        onUpdate: () => {
            gsap.set('.p-entry-flow__item::before, .p-entry-flow__item::after', { all: 'unset' });
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".p-faq__list", {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".c-section-header",
            start: "top 80%",
            end: "top 50%",
            scrub: false,
        },
    });
});
