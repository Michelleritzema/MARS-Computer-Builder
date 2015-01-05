/**
 * Created by Daslicer on 18-12-2014.
 */
$(function() {
    $( "#slider-range4" ).slider({
        range: true,
        min: 256,
        max: 8192,
        values: [ 512, 4096 ],
        slide: function( event, ui ) {
            $( "#amount_GPU_geheugen" ).val( + ui.values[ 0 ] + " MB - " + ui.values[ 1 ] + " MB" );
        }
    });
    $( "#amount_GPU_geheugen" ).val(  + $( "#slider-range4" ).slider( "values", 0 ) +
    " MB - " + $( "#slider-range4" ).slider( "values", 1 ) + "MB" );
});
amount_GPU_geheugen