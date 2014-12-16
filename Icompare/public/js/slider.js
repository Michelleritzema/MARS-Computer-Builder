/**
 * Created by Daslicer on 15-12-2014.
 */
$(function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 1450,
        max: 4700,
        values: [ 1450, 2500 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
