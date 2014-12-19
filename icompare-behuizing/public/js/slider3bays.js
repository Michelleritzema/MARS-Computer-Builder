/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range15" ).slider({
        range: true,
        min: 2,
        max: 13,
        values: [ 2, 5 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_3bay" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_3bay" ).val( + $( "#slider-range15" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range15" ).slider( "values", 1 ));
});
