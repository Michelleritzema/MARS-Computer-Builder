/**
 * Created by Sander on 18-12-2014.
 */
$(function() {
    $( "#slider-range7" ).slider({
        range: "max",
        min: 0,
        max: 14,
        value: 3,
        slide: function( event, ui ) {
            $( "#amount_usb" ).val( ui.value );
        }
    });
    $( "#amount_usb" ).val( $( "#slider-range7" ).slider( "value" ) );
});