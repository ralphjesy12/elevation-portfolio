jQuery(function($){
    if($('#ensigna-preloader').length > 0) {


    }

});

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
]).then(function() {
    progressNow = 0.5;
    progress = 1;
    totalFrames = 60;
    clearInterval(interval);
    interval = setInterval(function(){
        console.log(progress,progressNow);
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
            $('.ensigna span').text((Math.ceil(progressNow * 100)) * 100);
        }

        if(progressNow >= 1){
            clearInterval(interval);
        }

    }, 20);
})
