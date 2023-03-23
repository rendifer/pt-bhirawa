(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".sticky-top").addClass("shadow-sm").css("top", "0px");
        } else {
            $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        margin: 50,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
    });
    $(".testimonial-carousel2").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 2,
        margin: 15,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
    });
})(jQuery);

$(".submit").click(function () {
    swal(
        "Success",
        "Thank you for contact us. we will contact you shortly.",
        "success"
    );
});

$(document).ready(function () {
    $("#myForm").on("submit", function (e) {
        e.preventDefault();
        var nama = $("#nama").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        if (nama == "" || email == "" || subject == "" || message == "") {
            swal({
                title: "Error!",
                text: "Please fill all the fields!",
                icon: "error",
                button: "OK",
            });
        } else {
            $.ajax({
                type: "POST",
                url: "/contactUs",
                data: $("#myForm").serialize(),
                success: function (response) {
                    swal({
                        title: "Success!",
                        text: "Thank you for contact us. we will contact you shortly!",
                        icon: "success",
                        button: "OK",
                    }).then((value) => {
                        window.location.reload();
                    });
                },
            });
        }
    });
});
