/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range5" ).slider({
        range: true,
        min: 0,
        max: 275,
        values: [ 50, 120 ],
        slide: function( event, ui ) {
            $( "#amount_ram" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_ram" ).val( "€" + $( "#slider-range5" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range5" ).slider( "values", 1 ));
});
