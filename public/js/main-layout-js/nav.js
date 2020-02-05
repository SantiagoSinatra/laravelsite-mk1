$( document ).ready(function() {

    /* Mobile Nav Slider */
    if( window.innerWidth <= 600){
        $('.nav-button').click(function(){
            $('.nav-container').slideToggle( 'slow', function(){
                console.log('clicked');
            });
        });
    }

});
