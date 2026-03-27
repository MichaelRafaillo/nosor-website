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
            $(".sticky-top").css("top", "0px");
        } else {
            $(".sticky-top").css("top", "-100px");
        }
    });

    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
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

    // Header carousel
    const initHeaderCarousel = function () {
        if (!$(".header-carousel").length || typeof $.fn.owlCarousel !== "function") {
            return false;
        }

        if ($(".header-carousel").hasClass("owl-loaded")) {
            $(".header-carousel").trigger("destroy.owl.carousel");
            $(".header-carousel").removeClass("owl-loaded");
            $(".header-carousel").find(".owl-stage-outer").children().unwrap();
        }

        $(".header-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            items: 1,
            dots: false,
            loop: true,
            nav: true,
            rtl: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>',
            ],
        });

        return true;
    };

    if (!initHeaderCarousel()) {
        $(window).on("load", function () {
            setTimeout(initHeaderCarousel, 100);
        });
    }

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });
})(jQuery);

function openLightbox(index) {
    const lightboxModal = new bootstrap.Modal(
        document.getElementById("imageLightbox")
    );
    const lightboxCarousel = new bootstrap.Carousel(
        document.getElementById("lightboxCarousel")
    );

    lightboxModal.show();

    // Wait for modal to be shown, then navigate to the clicked image
    document.getElementById("imageLightbox").addEventListener(
        "shown.bs.modal",
        function () {
            lightboxCarousel.to(index);
        },
        { once: true }
    );
}

// Close lightbox with Escape key
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        const lightboxModal = bootstrap.Modal.getInstance(
            document.getElementById("imageLightbox")
        );
        if (lightboxModal) {
            lightboxModal.hide();
        }
    }
});
