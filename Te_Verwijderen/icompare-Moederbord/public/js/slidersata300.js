/**
 * Created by Sander on 18-12-2014.
 */
$(function() {
    $( "#slider-range8" ).slider({
        range: "max",
        min: 0,
        max: 6,
        value: 3,
        slide: function( event, ui ) {
            $( "#amount_sata300" ).val( ui.value );
        }
    });
    $( "#amount_sata300" ).val( $( "#slider-range8" ).slider( "value" ) );
});