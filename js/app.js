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
});

    function sendContact() {
        var valid;
        valid = validateContact();
        if (valid) {
            jQuery.ajax({
                url: "mailer.php",
                data: '&contactName=' + $("#contactName").val() + '&contactEmail=' +
                    $("#contactEmail").val() + '&phone=' +
                    $("#contactPhone").val() + '&message=' +
                    $('#contactMsg').val(),
                type: "POST",
                success: function (data) {
                    $("#mail-status").html(data);
                },
                error: function () {}
            });
        }
    }

    function validateContact() {
        var valid = true;
        $(".demoInputBox").css('background-color', '');
        $(".info").html('');
        if (!$("#contactName").val()) {
            $("#contactNameErrorMsg").html("(required)");
            $("#contactName").css('background-color', '#FFFFDF');
            valid = false;
        }
        if (!$("#contactEmail").val()) {
            $("#contactEmailErrorMsg").html("(required)");
            $("#contactEmail").css('background-color', '#FFFFDF');
            valid = false;
        }
        if (!$("#contactEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#contactEmailErrorMsg").html("(invalid)");
            $("#contactEmail").css('background-color', '#FFFFDF');
            valid = false;
        }

        if (!$("#contactMsg").val()) {
            $("#contactMsgErrorMsg").html("(required)");
            $("#contactMsg").css('background-color', '#FFFFDF');
            valid = false;
        }
        return valid;
    }