jQuery(function($){

});
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

if($('#ensigna-preloader').length > 0) {


    var progress = 0;
    var progressNow = 0;
    var totalFrames = 30;
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
        assets + '/assets/img/background.jpg',
        assets + '/assets/js/fullPage.js/jquery.fullpage.min.js',
        assets + '/assets/js/fullPage.js/jquery.fullpage.extensions.min.js',
        assets + '/assets/js/jquery.preload.min.js',
        assets + '/assets/js/main.js',
    ]).then(function() {
        progressNow = 0.5;
        progress = 1;
        totalFrames = 60;
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
