$(window).on('load', function() { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({'overflow':'visible'});
    })
    
    window.addEventListener('load', function(){
    function coverflow(i, el) {
        el.removeClass('pre following')
            .nextAll()
                .removeClass('pre following')
                .addClass('following')
            .end()
            .prevAll()
                .removeClass('pre following')
                .addClass('pre');
    }
   });