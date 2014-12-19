/**
 * Created by Daslicer on 15-12-2014.
 */
$(function() {
    $( "#slider-range1" ).slider({
        range: true,
        min: 1450,
        max: 4700,
        values: [ 1450, 2500 ],
        slide: function( event, ui ) {
            $( "#speed" ).val( + ui.values[ 0 ] + " MHz - " + ui.values[ 1 ] + " MHz" );
        }
    });
    $( "#speed" ).val(  + $( "#slider-range1" ).slider( "values", 0 ) +
    " MHz - " + $( "#slider-range1" ).slider( "values", 1 ) + "MHz" );
});

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

$(function() {
    $( "#slider-range7" ).slider({
        range: "max",
        min: 0,
        max: 14,
        value: 3,
        slide: function( event, ui ) {
            $( "#amount_usb" ).val( ui.value );
        }
    });
    $( "#amount_usb" ).val( $( "#slider-range7" ).slider( "value" ) );
});

$(function() {
    $( "#slider-range8" ).slider({
        range: "max",
        min: 0,
        max: 6,
        value: 3,
        slide: function( event, ui ) {
            $( "#amount_sata300" ).val( ui.value );
        }
    });
    $( "#amount_sata300" ).val( $( "#slider-range8" ).slider( "value" ) );
});

$(function() {
    $( "#slider-range9" ).slider({
        range: "max",
        min: 0,
        max: 10,
        value: 4,
        slide: function( event, ui ) {
            $( "#amount_sata600" ).val( ui.value );
        }
    });
    $( "#amount_sata600" ).val( $( "#slider-range9" ).slider( "value" ) );
});

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

$(function() {
    $( "#slider-range15" ).slider({
        range: true,
        min: 2,
        max: 13,
        values: [ 2, 5 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_3bay" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_3bay" ).val( + $( "#slider-range15" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range15" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range16" ).slider({
        range: true,
        min: 0,
        max: 18,
        values: [ 5, 10 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_2bay" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_2bay" ).val( + $( "#slider-range16" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range16" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range17" ).slider({
        range: true,
        min: 0,
        max: 9,
        values: [ 2, 5 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_5bay" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_5bay" ).val( + $( "#slider-range17" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range17" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range18" ).slider({
        range: true,
        min: 2,
        max: 11,
        values: [ 3, 7 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing_uitbreiding" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#amount_behuizing_uitbreiding" ).val( + $( "#slider-range18" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range18" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range19" ).slider({
        range: true,
        min: 0,
        max: 375,
        values: [ 50, 250 ],
        slide: function( event, ui ) {
            $( "#amount_voeding" ).val( "€" + ui.values[ 0 ] + "€" + ui.values[ 1 ]  );
        }
    });
    $( "#amount_voeding" ).val("€" + $( "#slider-range19" ).slider( "values", 0 ) +
    "€" + $( "#slider-range19" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range20" ).slider({
        range: true,
        min: 350,
        max: 1500,
        values: [ 400, 1000 ],
        slide: function( event, ui ) {
            $( "#voeding_vermogen" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ] + "watt"  );
        }
    });
    $( "#voeding_pci" ).val( + $( "#slider-range20" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range20" ).slider( "values", 1 ) + "watt");
});

$(function() {
    $( "#slider-range21" ).slider({
        range: true,
        min: 1,
        max: 10,
        values: [ 3, 6 ],
        slide: function( event, ui ) {
            $( "#voeding_pci" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#voeding_pci" ).val( + $( "#slider-range21" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range21" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range22" ).slider({
        range: true,
        min: 3,
        max: 20,
        values: [ 5, 15 ],
        slide: function( event, ui ) {
            $( "#voeding_sata" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
        }
    });
    $( "#voeding_sata" ).val( + $( "#slider-range22" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range22" ).slider( "values", 1 ));
});
