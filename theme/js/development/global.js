$(function () {

    var $headerHeight = 86;

    if($('window').outerWidth() < 768) {
        $headerHeight = 74;
    }

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - $headerHeight
                }, 1000);
                return false;
            }
        }
    });

});