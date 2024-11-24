gsap.registerPlugin(ScrollTrigger);

const bodyScrollBar = Scrollbar.init(document.body, {
    damping: 0.1,
    delegateTo: document,
    speed: 0.2,
});

ScrollTrigger.scrollerProxy("body", {
    scrollTop(value) {
        if (arguments.length) {
            bodyScrollBar.scrollTop = value;
        }
        return bodyScrollBar.scrollTop;
    },
});

bodyScrollBar.addListener(ScrollTrigger.update);

ScrollTrigger.defaults({
    scroller: document.body,
});

gsap.from(".wrapper-nav", {
    y: -100,
    duration: 1,
    ease: "back"
})

gsap.from(".wrapper-nav2", {
    y: -100,
    duration: 1,
    delay: 0.2,
    ease: "back"
})

gsap.from(".slide1 h1", {
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.5,
    ease: "back"
})

gsap.from(".slide1 p", {
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.7,
    ease: "back"
})

gsap.from(".slide1 .btn", {
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.8,
    ease: "back"
})

gsap.from(".slide2 article .title", {
    scrollTrigger: {
        trigger: ".slide2",
        toggleActions: "restart none none none",
    },
    y: -300,
    opacity: 0,
    duration: 1,
    ease: "back"
})

gsap.from(".slide2 article .title2", {
    scrollTrigger: {
        trigger: ".slide2 .title2",
        toggleActions: "restart none none none",
    },
    y: -200,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 0.2
})

gsap.from(".slide2 article p", {
    scrollTrigger: {
        trigger: ".slide2 p",
        toggleActions: "restart none none none",
    },
    y: 100,
    opacity: 0,
    duration: 0.5,
    stagger: 0.2,
    ease: "back",
    delay: 0.2
})

gsap.from(".slide2 .box-wrapper .box", {
    scrollTrigger: {
        trigger: ".slide2 .box-wrapper .box",
        toggleActions: "restart none none none",
    },
    y: 300,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 0.5
})

gsap.from(".slide3 h1", {
    scrollTrigger: {
        trigger: ".slide3",
        toggleActions: "restart none none none",
    },
    y: 300,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 0.8
})

gsap.from(".slide3 .img-box", {
    scrollTrigger: {
        trigger: ".slide3",
        toggleActions: "restart none none none",
    },
    y: 200,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 1.2
})

gsap.from(".slide4 footer", {
    scrollTrigger: {
        trigger: ".slide4 footer h1",
    },
    y: -100,
    opacity: 0,
    duration: 1,
    delay: 0.5
})