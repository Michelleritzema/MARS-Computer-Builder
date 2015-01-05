/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range17" ).slider({
        range: true,
        min: 0,
        max: 9,
        values: [ 2, 5 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_5bay" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_5bay" ).val( + $( "#slider-range17" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range17" ).slider( "values", 1 ));
});
