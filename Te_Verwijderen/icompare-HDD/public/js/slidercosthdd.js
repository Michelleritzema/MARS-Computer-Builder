/**
 * Created by Daslicer on 16-12-2014.
 */
$(function() {
    $( "#slider-range10" ).slider({
        range: true,
        min: 0,
        max: 275,
        values: [ 50, 150 ],
        slide: function( event, ui ) {
            $( "#amount_hdd" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_hdd" ).val( "€" + $( "#slider-range10" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range10" ).slider( "values", 1 ));
});
