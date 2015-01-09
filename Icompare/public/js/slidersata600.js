/**
 * Created by Sander on 18-12-2014.
 */
$(function() {
    $( "#slider-range9" ).slider({
        range: "max",
        min: 0,
        max: 10,
        value: 4,

        slide: function( event, ui ) {
            $( "#amount_sata600" ).val( ui.value );
        }
    });
    $( "#amount_sata600" ).val( $( "#slider-range9" ).slider( "value" ) );
});