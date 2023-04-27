// ------  PRELOADER  ------ //
$(window).on('load', function () {
    $('.page-preloader-wrap').addClass('preloaded_hiding');
    window.setTimeout(function () {
        $('.page-preloader-wrap').addClass('preloaded_loaded');
        $('.page-preloader-wrap').removeClass('preloaded_hiding');
    }, 500);
});
// ------  //// PRELOADER  ------ //
