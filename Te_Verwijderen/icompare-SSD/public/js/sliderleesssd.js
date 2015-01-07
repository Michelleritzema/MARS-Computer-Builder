/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range13" ).slider({
        range: true,
        min: 420,
        max: 555,
        values: [ 450, 500 ],
        slide: function( event, ui ) {
            $( "#amount_ssd_lees" ).val(  + ui.values[ 0 ] + " -" + ui.values[ 1 ] + "MB/s"  );
        }
    });
    $( "#amount_ssd_lees" ).val( + $( "#slider-range13" ).slider( "values", 0 ) +
    " - " + $( "#slider-range13" ).slider( "values", 1 ) + "MB/s");
});
