
const scrollContainer = document.querySelector('[data-scroll-container]');
const body = document.querySelector('body');
export const scroller = new LocomotiveScroll({
    el: scrollContainer,
    smooth: true,
    lerp: 0.05,
    scrollFromAnywhere: true,
    tablet: {
        smooth: false,
    },
    smartphone: { smooth: false },
});
setTimeout(() => {
    scroller.update();
}, 500);

