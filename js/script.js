gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.defaults({
    toggleActions: "restart pause resume pause",
    scroller: "main",
    snap: 1
});



gsap.from(".wrapper-nav", {
    y: -100,
    duration: 2,
    ease: "elastic"
})

gsap.from(".wrapper-nav2", {
    y: -100,
    duration: 2,
    delay: 0.2,
    ease: "elastic"
})

gsap.from(".slide1 h1", {
    scrollTrigger: {
        trigger: ".slide1",
        toggleActions: "restart reset restart reset"
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.5,
    ease: "back"
})

gsap.from(".slide1 p", {
    scrollTrigger: {
        trigger: ".slide1",
        toggleActions: "restart reset restart reset"
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.7,
    ease: "back"
})

gsap.from(".slide1 .btn", {
    scrollTrigger: {
        trigger: ".slide1",
        toggleActions: "restart reset restart reset"
    },
    x: -200,
    opacity: 0,
    duration: 1,
    delay: 0.8,
    ease: "back"
})

gsap.from(".slide2 article .title", {
    scrollTrigger: {
        trigger: ".slide2",
        toggleActions: "restart reset restart reset",
    },
    y: -300,
    opacity: 0,
    duration: 1,
    ease: "back",
    delay: 0.3
})

gsap.from(".slide2 article .title2", {
    scrollTrigger: {
        trigger: ".slide2",
        toggleActions: "restart reset restart reset",
    },
    y: -200,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 0.5
})

gsap.from(".slide2 article p", {
    scrollTrigger: {
        trigger: ".slide2",
        toggleActions: "restart reset restart reset",
    },
    y: 100,
    opacity: 0,
    duration: 0.5,
    stagger: 0.1,
    ease: "back",
    delay: 0.8
})

gsap.from(".slide2 .box-wrapper .box", {
    scrollTrigger: {
        trigger: ".slide2",
        toggleActions: "restart reset restart reset",
    },
    y: 300,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 1
})

gsap.from(".slide3 h1", {
    scrollTrigger: {
        trigger: ".slide3",
        toggleActions: "restart reset restart reset",
    },
    y: 300,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 0.3
})

gsap.from(".slide3 .img-box", {
    scrollTrigger: {
        trigger: ".slide3",
        toggleActions: "restart reset restart reset",
    },
    y: 200,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "back",
    delay: 0.5
})

gsap.from(".slide4 footer", {
    scrollTrigger: {
        trigger: ".slide4",
    },
    y: 100,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power1"
})