$('.swiper').on({
    mouseenter: function () {
        $(this).addClass('hover');
    },
    mouseleave: function () {
        $(this).removeClass('hover');
    }
});

$(document).ready(function() {
    $('.fancybox').fancybox({
        helpers:  {
            thumbs : {
                width: 50,
                height: 50
            }
        }
    });
});


let swiperMain = new Swiper(".js-main-slider", {
    slidesPerView: 1,
    // freeMode: true,
    loop: true,
    // watchSlidesProgress: true,
    // freeMode: true,
    watchSlidesProgress: true,
    // autoHeight: true,
    // pagination: {
    // el: ".swiper-pagination",
    // clickable: true,
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


let swiperThumbs = new Swiper(".js-swiper-thumbs", {
    loop: true,
    spaceBetween: 5,
    //slidesPerGroup: 5,
    slidesPerView: 5,
    // slidesPerGroupAuto: true,
    breakpoints: {
        320: {
            slidesPerView: 2.5,
            // slidesPerGroup: 3,
        },
        480: {
            slidesPerView: 3.5,
            // slidesPerGroup: 4,
        },
        768: {
            slidesPerView: 4.5,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // mousewheel: true,


    freeMode: true,
    watchSlidesProgress: true,
});

let swiperProduct = new Swiper(".js-swiper-product", {
    loop: true,
    slidesPerView: 1,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        // el: ".swiper-pagination",
        clickable: true,
    },
    spaceBetween: 10,
    thumbs: {
        swiper: swiperThumbs,
    },
});

let swiperProducts = new Swiper(".js-product-slider", {
    slidesPerView: 2,
    loop:true,
    navigation: {
        nextEl: ".js-product-slider .swiper-button-next",
        prevEl: ".js-product-slider .swiper-button-prev",
    },
    spaceBetween: 10,
    breakpoints: {
        320: {
            slidesPerView: 2.5,
        },
        480: {
            slidesPerView: 3.5,
        },
        768: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 5,
        },
        1200: {
            slidesPerView: 6,
        }
    },
    pagination: {
        // el: ".swiper-pagination",
        clickable: true,
    },
});

