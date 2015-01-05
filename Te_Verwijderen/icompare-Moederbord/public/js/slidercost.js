/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range2" ).slider({
        range: true,
        min: 0,
        max: 990,
        values: [ 100, 400 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount" ).val( "€" + $( "#slider-range2" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range2" ).slider( "values", 1 ));
});
