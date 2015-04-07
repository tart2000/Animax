$(document).ready(function () {
        $('.accordion-group').accordion();

        $('#godown').click(function () {
                $('html, body').scrollTo($('#next-edition'), 300, {offset:{top:-70}});
            });

    });


