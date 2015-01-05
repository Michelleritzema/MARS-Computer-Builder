/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range12" ).slider({
        range: true,
        min: 100,
        max: 530,
        values: [ 150, 350 ],
        slide: function( event, ui ) {
            $( "#amount_ssd_schrijf" ).val(  + ui.values[ 0 ] + " - " + ui.values[ 1 ] + "MB/s"  );
        }
    });
    $( "#amount_ssd_schrijf" ).val( + $( "#slider-range12" ).slider( "values", 0 ) +
    " - " + $( "#slider-range12" ).slider( "values", 1 ) + "MB/s");
});
