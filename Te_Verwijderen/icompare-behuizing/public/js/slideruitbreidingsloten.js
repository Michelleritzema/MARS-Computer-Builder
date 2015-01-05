/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range18" ).slider({
        range: true,
        min: 2,
        max: 11,
        values: [ 3, 7 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_uitbreiding" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_uitbreiding" ).val( + $( "#slider-range18" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range18" ).slider( "values", 1 ));
});
