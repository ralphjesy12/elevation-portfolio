jQuery(function($){

});
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

if($('#ensigna-preloader').length > 0) {


    var progress = 0;
    var progressNow = 0;
    var totalFrames = 60;
    var frameNow = 0;
    var interval = null;
    function setPreloaderClass(progress,progressNow){
        var change = ((progress - progressNow) ) / 10;
        if(change < 0.01) change = 0.01;
        progressNow = progressNow + (change);
        frameNow = Math.floor(totalFrames * (progressNow)) - 1;
        if(frameNow < 1) frameNow = 0;

        if(frameNow > (totalFrames - 1)){
            frameNow = totalFrames - 1;
        }
        var len = 5;
        var s = frameNow.toString(), c = c || '0';
        while( s.length < len ) s = c+ s;

        $('.ensigna').addClass('ensigna-ensigna_' + s);
    }
    $.preload([
        assets + "/assets/img/ensigna.png"
        ,assets + "/assets/css/main.css"
        ,assets + "/assets/css/styles.css"
        ,assets + "/assets/favicon/android-icon-192x192.png"
        ,assets + "/assets/favicon/favicon-16x16.png"
        ,assets + "/assets/favicon/favicon-32x32.png"
        ,assets + "/assets/favicon/favicon-96x96.png"
        ,assets + "/assets/fonts/JaapokkiRegular/JaapokkiRegular.woff"
        ,assets + "/assets/fonts/ProximaNova-Regular/hinted-ProximaNova-Regular.woff2"
        ,assets + "/assets/img/background-8.jpg"
        ,assets + "/assets/img/background-9.jpg"
        ,assets + "/assets/img/code/001-coding-program.png"
        ,assets + "/assets/img/code/002-cloud.png"
        ,assets + "/assets/img/code/003-server.png"
        ,assets + "/assets/img/code/004-web-1.png"
        ,assets + "/assets/img/code/005-web.png"
        ,assets + "/assets/img/code/006-social.png"
        ,assets + "/assets/img/code/007-html-5-logo.png"
        ,assets + "/assets/img/code/008-js-file.png"
        ,assets + "/assets/img/code/009-interface.png"
        ,assets + "/assets/img/code/010-php-programming-language.png"
        ,assets + "/assets/img/code/011-css-file.png"
        ,assets + "/assets/img/Headline.png"
        ,assets + "/assets/img/me-lookup.png"
        ,assets + "/assets/img/wizards/wizard-00001.gif"
        ,assets + "/assets/img/wizards/wizard-00005.gif"
        ,assets + "/assets/img/wizards/wizard-00006.gif"
        ,assets + "/assets/img/wizards/wizard-00007.gif"
        ,assets + "/assets/img/wizards/wizard-00008.gif"
        ,assets + "/assets/img/wizards/wizard-00009.gif"
        ,assets + "/assets/img/wizards/wizard-00011.gif"
        ,assets + "/assets/js/fullPage.js/jquery.fullpage.extensions.min.js"
        ,assets + "/assets/js/fullPage.js/jquery.fullpage.min.css"
        ,assets + "/assets/js/fullPage.js/jquery.fullpage.min.js"
        ,assets + "/assets/js/jquery.parallax.js"
        ,assets + "/assets/js/jquery.preload.min.js"
        ,assets + "/assets/js/main.js"
        ,assets + "/assets/js/script.js"
        ,themeassets + "/assets/css/essentials.css"
        ,themeassets + "/assets/css/header-1.css"
        ,themeassets + "/assets/css/layout.css"
        ,themeassets + "/assets/fonts/font-icons.woff"
        ,themeassets + "/assets/fonts/fontawesome-webfont.woff2?v=4.7.0"
        ,themeassets + "/assets/js/contact.js"
        ,themeassets + "/assets/js/scripts.js"
        ,themeassets + "/assets/js/view/demo.revolution_slider.js"
        ,themeassets + "/assets/plugins/bootstrap/css/bootstrap.min.css"
        ,themeassets + "/assets/plugins/bootstrap/js/bootstrap.min.js"
        ,themeassets + "/assets/plugins/owl-carousel/owl.carousel.min.js"
        ,themeassets + "/assets/plugins/slider.layerslider/css/layerslider.css"
        ,themeassets + "/assets/plugins/slider.revolution/css/extralayers.css"
        ,themeassets + "/assets/plugins/slider.revolution/css/settings.css"
        ,themeassets + "/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"
        ,themeassets + "/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"
        ,themeassets + "/assets/plugins/slider.swiper/dist/css/swiper.min.css"
        ,themeassets + "/assets/plugins/smoothscroll.js"
    ]).then(function() {
        progress = 1;
        clearInterval(interval);
        interval = setInterval(function(){
            if(progress != progressNow){
                var change = ((progress - progressNow) ) / 10;
                if(change < 0.01) change = 0.01;
                progressNow = progressNow + (change);
                frameNow = Math.floor(totalFrames * (progressNow)) - 1;
                if(frameNow < 1) frameNow = 0;

                if(frameNow > (totalFrames - 1)){
                    frameNow = totalFrames - 1;
                }
                var len = 5;
                var s = frameNow.toString(), c = c || '0';
                while( s.length < len ) s = c+ s;

                $('.ensigna').addClass('ensigna-ensigna_' + s);
                $('.ensigna span').text((Math.floor(progressNow * 100)));
            }

            if(progressNow >= 1){
                $('.ensigna').removeClass().addClass('ensigna ensigna-ensigna_00059');
                setTimeout(function(){
                    $('#ensigna-preloader').fadeOut(2000,function(){
                        $('#ensigna-preloader').remove();
                    })
                },1000);
                clearInterval(interval);
            }

        }, 20);

    }, function() {
        console.error("Something went wrong.");
    }, function(progress) {
        // Generate the class now
        clearInterval(interval);
        interval = setInterval(function(){

            if(progress != progressNow){
                var change = ((progress - progressNow) ) / 10;

                if(change < 0.001) change = 0.001;

                progressNow = progressNow + (change);
                frameNow = Math.floor(totalFrames * (progressNow)) - 1;
                if(frameNow < 1) frameNow = 0;

                if(frameNow > (totalFrames - 1)){
                    frameNow = totalFrames - 1;
                }
                var len = 5;
                var s = frameNow.toString(), c = c || '0';
                while( s.length < len ) s = c+ s;

                $('.ensigna').addClass('ensigna-ensigna_' + s);
                $('.ensigna span').text((Math.floor(progressNow * 100)));
            }

            if(progressNow >= 1){
                clearInterval(interval);
            }

        }, 20);
    })


}
if($('#particles-js').length > 0) {
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#eee"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 207.079689136843,
                    "size": 7,
                    "duration": 5,
                    "opacity": 0.5,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
}
