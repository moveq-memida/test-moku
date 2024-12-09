const container = document.querySelector('.p-bnr');
const flip = document.querySelector('.p-bnr__img-flip');
const mascot = document.querySelector('.p-bnr__img-mascot');

container.addEventListener('mouseenter', () => {
    gsap.to(flip, {
        duration: 0.3,
        x: '-18%',
        rotation: 25,
        ease: 'back.out(1.7)'
    });
});

container.addEventListener('mouseleave', () => {
    gsap.to(flip, {
        duration: 0.3,
        x: '-100%',
        rotation: 0,
        ease: 'back.out(1.7)'
    });
});

container.addEventListener('mouseenter', () => {
    gsap.to(mascot, {
        duration: 0.3,
        x: '-15%',
        rotation: -3,
        ease: 'back.out(1.7)'
    });
});

container.addEventListener('mouseleave', () => {
    gsap.to(mascot, {
        duration: 0.3,
        x: '100%',
        rotation: 0,
        ease: 'back.out(1.7)'
    });
});

const container02 = document.querySelector('.p-bnr--02');
const mascotTop = document.querySelector('.p-bnr__img-mascot-top');
const mascotBottom = document.querySelector('.p-bnr__img-mascot-bottom');

container02.addEventListener('mouseenter', () => {
    gsap.to(mascotTop, {
        duration: 0.5,
        y: '-150%',
        ease: 'back.out(1.7)'
    });
});

container02.addEventListener('mouseleave', () => {
    gsap.to(mascotTop, {
        duration: 0.5,
        y: '0',
        ease: 'back.out(1.7)'
    });
});

container02.addEventListener('mouseenter', () => {
    gsap.to(mascotBottom, {
        duration: 0.5,
        y: '0',
        ease: 'power2.out'
    });
});

container02.addEventListener('mouseleave', () => {
    gsap.to(mascotBottom, {
        duration: 0.5,
        y: '150%',
        ease: 'back.out(1.7)'
    });
});


const container03 = document.querySelector('.p-bnr--03');
const mascotLeft = document.querySelector('.p-bnr__img-mascot-left');
const mascotRight = document.querySelector('.p-bnr__img-mascot-right');

container03.addEventListener('mouseenter', () => {
    gsap.to(mascotLeft, {
        duration: 0.3,
        x: '0',
        ease: 'power2.out'
    });
});

container03.addEventListener('mouseleave', () => {
    gsap.to(mascotLeft, {
        duration: 0.3,
        x: '-100%',
        ease: 'power2.out'
    });
});

container03.addEventListener('mouseenter', () => {
    gsap.to(mascotRight, {
        duration: 0.3,
        x: '0',
        ease: 'power2.out'
    });
});

container03.addEventListener('mouseleave', () => {
    gsap.to(mascotRight, {
        duration: 0.3,
        x: '100%',
        ease: 'power2.out'
    });
});
