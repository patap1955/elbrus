import Swiper, {Autoplay, Navigation} from 'swiper';

if (document.querySelector(".portfolioSwiper")) {
    const swiper = new Swiper(".portfolioSwiper", {
        modules: [Autoplay, Navigation],
        spaceBetween: 30,
        autoHeight: true,
        allowTouchMove: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },
        breakpoints: {
            200: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            300: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            481: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1390: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
}

