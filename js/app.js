$(document).ready(function () {
    $('.example-gallery').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    //$(function () {
        var showClass = 'show';

        $('input').on('checkval', function () {
            var label = $(this).prev('label');
            if (this.value !== '') {
                label.addClass(showClass);
            } else {
                label.removeClass(showClass);
            }
        }).on('keyup', function () {
            $(this).trigger('checkval');
        });
   // });

});
