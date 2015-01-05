/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range3" ).slider({
        range: true,
        min: 0,
        max: 1000,
        values: [ 100, 600 ],
        slide: function( event, ui ) {
            $( "#amount_GPU_prijs" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_GPU_prijs" ).val( "€" + $( "#slider-range3" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range3" ).slider( "values", 1 ));
});
