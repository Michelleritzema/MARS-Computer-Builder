/**
 * Created by Daslicer on 15-12-2014.
 */
$(function() {
    $( "#slider-range1" ).slider({
        range: true,
        min: 1450,
        max: 4700,
        values: [ 1450, 2500 ],
        slide: function( event, ui ) {
            $( "#speed" ).val( + ui.values[ 0 ] + " MHz - " + ui.values[ 1 ] + " MHz" );
        }
    });
    $( "#speed" ).val(  + $( "#slider-range1" ).slider( "values", 0 ) +
    " MHz - " + $( "#slider-range1" ).slider( "values", 1 ) + "MHz" );
});
