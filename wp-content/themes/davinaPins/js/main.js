$('.header__menu-btn').click(function (e) {
    $(this).toggleClass('active');
    $('.header__menu').toggleClass('active')
    $('.header__btns').toggleClass('active')
})

const swiper = new Swiper(".what__swiper", {
    slidesPerView: 2.75,
    loop: true,
    slidesPerSlide: 1,
    speed: 550,
    navigation: {
        nextEl: ".what__navigation .what__navigation-btn_next",
        prevEl: ".what__navigation .what__navigation-btn_prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1.4,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 2.75,
            spaceBetween: 20,
        },
    },
});

// Select all »a« elements with a parent class »links« and add a function that is executed on click
$('a[href*="#"]').on('click', function (e) {

    // Define variable of the clicked »a« element (»this«) and get its href value.
    var href = $(this).attr('href');

    // Run a scroll animation to the position of the element which has the same id like the href value.
    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, '500');

    // Prevent the browser from showing the attribute name of the clicked link in the address bar
    e.preventDefault();

});

$('select').niceSelect();

$(document).ready(function () {
    $("form").submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "wp-content/themes/davinaPins/form.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
        });
    });
});