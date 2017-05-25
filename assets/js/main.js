jQuery(function($){
    $('#scene').parallax({
        originX: 0.5,
        originY: 0.5
    });

    // var phimgh = $('.phone-hold > img').height();
    // var phimgw = $('.phone-hold > img').width();
    //
    // $('.phone-hold .slide-wrapper').css('height',phimgh);
    // $('.phone-hold .slide-wrapper').css('width',phimgw);
    // $('.phone-hold .section,.phone-hold .slide,.phone-hold .fp-tableCell').css('height',parseFloat(phimgh) * 0.56);
    // $('.phone-hold .section,.phone-hold .slide,.phone-hold .fp-tableCell').css('width',parseFloat(phimgw) * 0.527);
    // $('.phone-hold .slide-wrapper').css($('.phone-hold > img').position());
    // $('.phone-hold').addClass('positioned');

    var $root = $('html, body');

    $(window).on('hashchange',function(){
        var hash = window.location.hash;
        hash = hash.replace('#','');
        var target = $("[data-anchor='"+hash+"']");
        if(target.length > 0){
            $root.animate({
                scrollTop: target.offset().top
            }, 500, function () {
                window.location.hash = '#'+hash;
            });
        }
    });

    if(window.location.hash.length > 0){
        var hash = window.location.hash;
        hash = hash.replace('#','');
        var target = $("[data-anchor='"+hash+"']");
        if(target.length > 0){
            $root.animate({
                scrollTop: target.offset().top
            }, 500, function () {
                window.location.hash = '#'+hash;
            });
        }
    }

    function checkVisible(elm, threshold, mode) {
        threshold = threshold || 0;
        mode = mode || 'visible';

        var rect = elm.getBoundingClientRect();
        var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
        var above = rect.bottom - threshold < 0;
        var below = rect.top - viewHeight + threshold >= 0;

        return mode === 'above' ? above : (mode === 'below' ? below : !above && !below);
    }

    $(window).on('scroll',function(){

        // var visiblesection = false;
        //
        // $('.section-snap').each(function(i,v){
        //     if(checkVisible(v)==true){
        //         visiblesection = $(v).data('anchor');
        //         return false;
        //     }
        // });
        //
        // switch (visiblesection) {
        //     case 'services':
        //     $('#header,#header #topNav a.logo').addClass('yellow').removeClass('purple black');
        //     break;
        //     case 'portfolio':
        //     $('#header,#header #topNav a.logo').addClass('purple').removeClass('yellow black');
        //     break;
        //     case 'testimonials':
        //     $('#header').removeClass('purple yellow');
        //     $('#header,#header #topNav a.logo').addClass('black').removeClass('yellow purple');
        //     break;
        // }

    },10);
});

;(function ($) {
    var on = $.fn.on, timer;
    $.fn.on = function () {
        var args = Array.apply(null, arguments);
        var last = args[args.length - 1];

        if (isNaN(last) || (last === 1 && args.pop())) return on.apply(this, args);

        var delay = args.pop();
        var fn = args.pop();

        args.push(function () {
            var self = this, params = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(self, params);
            }, delay);
        });

        return on.apply(this, args);
    };
}(this.jQuery || this.Zepto));
