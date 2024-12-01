gsap.registerPlugin(ScrollTrigger);


ScrollTrigger.defaults({
    toggleActions: "restart pause resume pause",
    scroller: "main",
    snap: 1
});

// sorot link aktif berdasarkan posisi scroll
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('.wrapper-nav a');

// loop melalui setiap section
sections.forEach(section => {
    ScrollTrigger.create({
        trigger: section,
        start: "top center", // trigger saat section berada di tengah viewport
        end: "bottom center",
        onEnter: () => setActiveLink(section.id),
        onEnterBack: () => setActiveLink(section.id),
    });
});

// fungsi untuk menambahkan kelas "active" pada link
function setActiveLink(id) {
    navLinks.forEach(link => link.classList.remove('active'));
    let activeLink = document.querySelector(`.wrapper-nav a[href="#${id}"]`);
    if (activeLink) activeLink.classList.add('active');
}

// smooth scroll untuk anchor links
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        let targetId = link.getAttribute('href').substring(1); // Ambil ID target
        let targetSection = document.getElementById(targetId);

        if (targetSection) {
            gsap.to(window, {
                scrollTo: { y: targetSection.offsetTop, autoKill: false },
                duration: 1,
                ease: "power2.out",
            });
        }
    });
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

// JavaScript
document.querySelectorAll(".slide2 .box-wrapper .box h1").forEach((el, index) => {
    const targetValue = parseInt(el.dataset.target.replace(/,/g, "")); // Mengambil angka target
    let suffix = ""; // Default suffix kosong

    // Menentukan suffix berdasarkan indeks
    if (index === 0) suffix = "";
    else if (index === 1) suffix = " JT+";
    else if (index === 2) suffix = " T+";

    gsap.fromTo(el, 
        { innerText: 0 }, 
        { 
            innerText: targetValue, 
            duration: 2.3,
            scrollTrigger: {
                trigger: ".slide2",
                start: "top center",
                toggleActions: "restart reset restart reset",
            },
            onUpdate: function () {
                // Format angka dan tambahkan suffix
                el.innerText = Math.ceil(el.innerText).toLocaleString() + suffix;
            },
            snap: { innerText: 1 } // Membulatkan nilai saat transisi
        }
    );
});

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


// //counter
// let section_counter = document.querySelector('#about');
// let counters = document.querySelectorAll('.slide2 .box .counter');

// //scroll anim
// let counterObserver = new IntersectionObserver(
//     (entries, observer) => {
//         let [entry] = entries;
//         if (!entry.isIntersecting) return;

//         let speed = 200;
//         counters.forEach((counter, index) => {
//             let suffix = "";
//             if (index === 0) suffix = "M";
//             else if (index === 1) suffix = "JT+";
//             else if (index === 2) suffix = "T+";

//             function UpdateCounter() {
//                 const targetNumber = +counter.CDATA_SECTION_NODE.target;
//                 const initialNumber = +counter.innerText.replace(/[^0-9]/g, '');
//                 const incPerCount = targerNumber / speed; 
//                 if (initialNumber < targetNumber) {
//                     counter.innerText = Math.ceil(initialNumber + incPerCount) + suffix;
//                     setTimeout(UpdateCounter, 40);
//                 } else {
//                     counter.innerText = targetNumber.toLocaleString() + suffix;
//                 }
//             }
//             UpdateCounter();

//             //slide anim
//             if (counter.parentElement.style.animation) {
//                 counter.parentElement.style.animation = '';
//             } else {
//                 counter.parentElement.style.animation = `slide-up 0.3s ease forwards ${
//                     index / counters,length + 0.5
//                 }s`;
//             }
//         });

//         observer.unobserve(section_counter);
//     },
//     {
//         root: null,
//         threshold: window.innerWidth > 768 ? 0.4 : 0.3,
//     }
// );

// CounterObserver.observe(section_counter);