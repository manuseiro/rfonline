// LOADER
$(window).load(function () {
    // will first fade out the loading animation
    $(".loaded").fadeOut();
    // will fade out the whole DIV that covers the website.
    $(".loader").delay(1000).fadeOut("slow");
});

//NAVBAR FIXO
$(window).scroll(function () {
    if ($(this).scrollTop() > 5) {
        $(".navbar-rfonline").addClass("navbar-fixed-top");
    } else {
        $(".navbar-rfonline").removeClass("navbar-fixed-top");
    }
});
//ANIMATE.CSS - WOW.JS
var wow = new WOW({
    mobile: false, // trigger animations on mobile devices (default is true)
});
wow.init();
//COUNTER-UP
$('.counter-up').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
//ACCORDION
function toggleIcon(e) {
    $(e.target)
        .prev(".panel-heading")
        .find(".more-less")
        .toggleClass("fas fa-plus fas fa-minus");
}
$(".panel-group").on("hidden.bs.collapse", toggleIcon);
$(".panel-group").on("shown.bs.collapse", toggleIcon);
//BOTTOM FAB
function toggleFAB(fab) {
    if (document.querySelector(fab).classList.contains('show')) {
        document.querySelector(fab).classList.remove('show');
    } else {
        document.querySelector(fab).classList.add('show');
    }
}

document.querySelector('.fab-btn .main').addEventListener('click', function () {
    toggleFAB('.fab-btn');
});

document.querySelectorAll('.fab-btn ul li button').forEach((item) => {
    item.addEventListener('click', function () {
        toggleFAB('.fab-btn');
    });
});