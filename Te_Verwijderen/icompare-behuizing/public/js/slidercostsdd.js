/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range11" ).slider({
        range: true,
        min: 0,
        max: 575,
        values: [ 150, 300 ],
        slide: function( event, ui ) {
            $( "#amount_ssd" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_ssd" ).val( "€" + $( "#slider-range11" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range11" ).slider( "values", 1 ));
});
