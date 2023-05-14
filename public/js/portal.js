// ------  SMOOTH SCROLLING  ------ //
// Select all links with hashes
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        check_paren_class = $($(this).parent()[0]).attr('class')
        // On-page links
        if (check_paren_class !== 'header_links_wrap' &&
            location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
            &&
            location.hostname === this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    }
                    ;
                });
            }
        }
    });

// ------  PRELOADER  ------ //
$(window).on('load', function () {
    $('.page-preloader-wrap').addClass('preloaded_hiding');
    window.setTimeout(function () {
        $('.page-preloader-wrap').addClass('preloaded_loaded');
        $('.page-preloader-wrap').removeClass('preloaded_hiding');
    }, 500);
});
// ------  //// PRELOADER  ------ //

// ------ Make Buttons for different sliders ----- //
$('.prev_slider').each(function (key) {
    $(this).attr('id', 'prev_slide_' + key)
})
$('.next_slider').each(function (key) {
    $(this).attr('id', 'next_slide_' + key)
})

// ------ Make Phone Masks for input ----- //
$(document).ready(function () {
    $('.mobile_input').mask('0 (000) 000-00-00');
})



// ------  // GOOD INFO DETAILED CHANGE ------ //
