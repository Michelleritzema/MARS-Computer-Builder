/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range16" ).slider({
        range: true,
        min: 0,
        max: 18,
        values: [ 5, 10 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_2bay" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_2bay" ).val( + $( "#slider-range16" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range16" ).slider( "values", 1 ));
});
