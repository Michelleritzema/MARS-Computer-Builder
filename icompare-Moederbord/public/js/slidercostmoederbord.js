/**
 * Created by Sander on 16-12-2014.
 */
$(function() {
    $( "#slider-range6" ).slider({
        range: true,
        min: 0,
        max: 450,
        values: [ 100, 250 ],
        slide: function( event, ui ) {
            $( "#amount_moederbord" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_moederbord" ).val( "€" + $( "#slider-range6" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range6" ).slider( "values", 1 ));
});
