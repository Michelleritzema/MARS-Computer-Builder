/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range14" ).slider({
        range: true,
        min: 0,
        max: 310,
        values: [ 100, 150 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing" ).val( "€" + $( "#slider-range14" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range14" ).slider( "values", 1 ));
});
