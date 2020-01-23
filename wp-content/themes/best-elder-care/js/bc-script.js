/*
 * Best Elder Care theme script (v1.0)
 * Created: January 2020
 * Author: James Mendoza (redwolfmendoza@gmail.com)
 */

var debug = {
    all: false,
    ui: false
};

$(window).load(function() {
    $('#slider').nivoSlider();
    });

$(document).ready(function() {

    if(debug.all) {
        console.log('BC Script loaded.');
    }

    //navigation fix for WordPress admin bar
    if( $('#wpadminbar').length > 0 ) {

        if(debug.all) {
            console.log('WP admin bar detected. Updating main naviation styles.');
        }
        $('.main-nav-container').addClass('wp-admin-bar-fix');
        
    }

    //homepage only
    if( $('body').hasClass('home') ){


        //animate scroll down to next content section
        $('.bc-ui-scrolldown .bc-ui-roundbutton').click(function(e){

            e.preventDefault();
            var target = $(this).attr("data-target");
            if( target != '' ){
                skipDown(target);
            }       
    
        });

    }


});

// scrolls the page down to the next section for the user (homepage only)
// requires an html element id to scroll down to
function skipDown(htmlID) {

    if(debug.ui){
        console.log('skipDown("'+ htmlID +'")');
    }

    //reset focus on the page (fixes relative scrolling)
    $('html,body').focus();

            
    //if href attr is an html ID
    if( htmlID.indexOf('#') > -1 ){
        setTimeout(function(){

            customOffset = 100;
            var headerOffset = 100;
            var target = htmlID.substring(1, htmlID.length);                


            //need to take margings and paddings into account, or will get wrong value/position
            var element = document.getElementById( target );
            var elementPosition = element.getBoundingClientRect().top;
            var offsetPosition = elementPosition - headerOffset + customOffset;

            if(debug.ui) {
                console.log('skipDown() -> offsetPosition position = ' + offsetPosition);
            }

            $('html,body').animate({
                scrollTop: offsetPosition
            }, 200);	

        }, 200);
    }
}