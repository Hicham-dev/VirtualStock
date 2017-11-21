/* ============================================================
 * Sliders
 * Sliders using Ion Slider and noUiSlider jQuery Plugins
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function($) {

    'use strict';

    $(document).ready(function() {
        $(".prix_revendeur").ionRangeSlider({
            min: 6000,
            max: 11000,
            from_min: 7000,
            from_max: 7000,
            form: 7000,
            to: 10000,
            to_min: 10000,
            to_max: 10000,
            type: 'double',
            postfix: " DH",
            grid: true
        });

        $(".prix_finale").ionRangeSlider({
            min: 10000,
            max: 14500,
            form: 11000,
            to: 13500,
            from_min: 11000,
            from_max: 11000,
            to_max : 13500,
            to_min: 13500,
            type: 'double',
            postfix: " DH",
            maxPostfix: "+",
            grid: true
        });
    });
   
})(window.jQuery);