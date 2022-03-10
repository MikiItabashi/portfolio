// LPのMoreボタン
jQuery(function($) {
    $('.js-more--lp').on('click', function() {
        $(this).toggleClass('is-open');
        $('.works__items--lp').toggleClass('is-open');
    });
});

// WordPressのMoreボタン
jQuery(function($) {
    $('.js-more--wp').on('click', function() {
        $(this).toggleClass('is-open');
        $('.works__items--wp').toggleClass('is-open');
    });
});