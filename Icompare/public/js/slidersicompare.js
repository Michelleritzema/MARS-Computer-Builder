/**
 * Created by Daslicer on 15-12-2014.
 */
$(function() {
    $( "#slider-range1" ).slider({
        range: true,
        min: 1450,
        max: 4710,
        step:20,
        values: [ 1450, 2500 ],
        slide: function( event, ui ) {
            $( "#speed" ).val( + ui.values[ 0 ] + " MHz - " + ui.values[ 1 ] + " MHz" );
            document.getElementById("processor_clocking0").value = ui.values[0];
            document.getElementById("processor_clocking1").value = ui.values[1];


        }
    });
    $( "#speed" ).val(  + $( "#slider-range1" ).slider( "values", 0 ) +
    " MHz - " + $( "#slider-range1" ).slider( "values", 1 ) + "MHz" );
});

// Processor - Prijs
$(function() {
    $( "#processor_price" ).slider({
        range: true,
        min: 0,
        max: 1000,
        step:20,
        values: [ 100, 400 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("processor_price0").value = ui.values[0];
            document.getElementById("processor_price1").value = ui.values[1];

        }
    });
    $( "#amount" ).val( "€" + $( "#processor_price" ).slider( "values", 0 ) +
    " - €" + $( "#processor_price" ).slider( "values", 1 ));
});

// Videokaart - Prijs
$(function() {
    $( "#videocard_price" ).slider({
        range: true,
        min: 0,
        max: 1000,
        step: 20,
        values: [ 100, 600 ],
        slide: function( event, ui ) {
            $( "#amount_GPU_prijs" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("videocard_price0").value = ui.values[0];
            document.getElementById("videocard_price1").value = ui.values[1];
        }
    });
    $( "#amount_GPU_prijs" ).val( "€" + $( "#videocard_price" ).slider( "values", 0 ) +
    " - €" + $( "#videocard_price" ).slider( "values", 1 ));
});

// Videokaart - Geheugen
$(function() {
    $( "#videocard_memory" ).slider({
        range: true,
        min: 256,
        max: 8200,
        step:20,
        values: [ 512, 4096 ],
        slide: function( event, ui ) {
            $( "#amount_GPU_geheugen" ).val( + ui.values[ 0 ] + " MB - " + ui.values[ 1 ] + " MB" );
            document.getElementById("videocard_memoryMb0").value = ui.values[0];
            document.getElementById("videocard_memoryMb1").value = ui.values[1];
        }
    });
    $( "#amount_GPU_geheugen" ).val(  + $( "#videocard_memory" ).slider( "values", 0 ) +
    " MB - " + $( "#videocard_memory" ).slider( "values", 1 ) + "MB" );
});

// RAM - Prijs
$(function() {
    $( "#ram_price" ).slider({
        range: true,
        min: 0,
        max: 280,
        step:20,
        values: [ 50, 120 ],
        slide: function( event, ui ) {
            $( "#amount_ram" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );

            document.getElementById("ram_price0").value = ui.values[0];
            document.getElementById("ram_price1").value = ui.values[1];

        }
    });
    $( "#amount_ram" ).val( "€" + $( "#ram_price" ).slider( "values", 0 ) +
    " - €" + $( "#ram_price" ).slider( "values", 1 ));
});

// Moederbord - Prijs
$(function() {
    $( "#motherboard_price" ).slider({
        range: true,
        min: 0,
        max: 460,
        step:20,
        values: [ 100, 250 ],
        slide: function( event, ui ) {
            $( "#amount_moederbord" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("motherboard_price0").value = ui.values[0];
            document.getElementById("motherboard_price1").value = ui.values[1];
        }
    });
    $( "#amount_moederbord" ).val( "€" + $( "#motherboard_price" ).slider( "values", 0 ) +
    " - €" + $( "#motherboard_price" ).slider( "values", 1 ));
});

// Moederbord - Poorten
$(function() {
    $( "#motherboard_ports" ).slider({
        range: "min",
        min: 0,
        max: 14,
        value: 3,
        slide: function( event, ui ) {
            $( "#amount_usb" ).val( ui.value );
            document.getElementById("Usb_port0").value = ui.value;
        }
    });
    $( "#amount_usb" ).val( $( "#motherboard_ports" ).slider( "value" ) );
});






// Moederbord - SATA 300
$(function() {
    $( "#motherboard_sata300" ).slider({
        range: "min",
        min: 0,
        max: 6,
        value: 3,
        slide: function( event, ui ) {
            $( "#amount_sata300" ).val( ui.value );
            document.getElementById("motherboard_sata300connection0").value = ui.value;
        }
    });
    $( "#amount_sata300" ).val( $( "#motherboard_sata300" ).slider( "value" ) );
});

// Moederbord - SATA 600
$(function() {
    $( "#motherboard_sata600" ).slider({
        range: "min",
        min: 0,
        max: 10,
        value: 4,
        slide: function( event, ui ) {
            $( "#amount_sata600" ).val( ui.value );
            document.getElementById("motherboard_sata600connection0").value = ui.value;
        }
    });
    $( "#amount_sata600" ).val( $( "#motherboard_sata600" ).slider( "value" ) );
});

// Harddisk drive - Prijs
$(function() {
    $( "#slider_harddiskdrive_price" ).slider({
        range: true,
        min: 0,
        max: 280,
        step: 20,
        values: [ 50, 150 ],
        slide: function( event, ui ) {
            $( "#amount_hdd" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("harddiskdrive_price0").value = ui.values[0];
            document.getElementById("harddiskdrive_price1").value = ui.values[1];
        }
    });
    $( "#amount_hdd" ).val( "€" + $( "#slider_harddiskdrive_price" ).slider( "values", 0 ) +
    " - €" + $( "#slider_harddiskdrive_price" ).slider( "values", 1 ));
});

// SSD - Prijs
$(function() {
    $( "#ssd_price" ).slider({
        range: true,
        min: 0,
        max: 580,
        step:20,
        values: [ 150, 300 ],
        slide: function( event, ui ) {
            $( "#amount_ssd" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("ssd_price0").value = ui.values[0];
            document.getElementById("ssd_price1").value = ui.values[1];
        }
    });
    $( "#amount_ssd" ).val( "€" + $( "#ssd_price" ).slider( "values", 0 ) +
    " - €" + $( "#ssd_price" ).slider( "values", 1 ));
});

// SSD = schrijfsnelheid
$(function() {
    $( "#ssd_writespeed" ).slider({
        range: true,
        min: 100,
        max: 540,
        step:20,
        values: [ 150, 350 ],
        slide: function( event, ui ) {
            $( "#amount_ssd_schrijf" ).val(  + ui.values[ 0 ] + " - " + ui.values[ 1 ] + "MB/s"  );
            document.getElementById("ssd_writespeed0").value = ui.values[0];
            document.getElementById("ssd_writespeed1").value = ui.values[1];

        }
    });
    $( "#amount_ssd_schrijf" ).val( + $( "#ssd_writespeed" ).slider( "values", 0 ) +
    " - " + $( "#ssd_writespeed" ).slider( "values", 1 ) + "MB/s");
});

// SSD - leessnelheid
$(function() {
    $( "#ssd_readspeed" ).slider({
        range: true,
        min: 420,
        max: 560,
        values: [ 450, 500 ],
        slide: function( event, ui ) {
            $( "#amount_ssd_lees" ).val(  + ui.values[ 0 ] + " -" + ui.values[ 1 ] + "MB/s"  );
            document.getElementById("ssd_readspeed0").value = ui.values[0];
            document.getElementById("ssd_readspeed1").value = ui.values[1];
        }
    });
    $( "#amount_ssd_lees" ).val( + $( "#ssd_readspeed" ).slider( "values", 0 ) +
    " - " + $( "#ssd_readspeed" ).slider( "values", 1 ) + "MB/s");
});

$(function() {
    $( "#slider-range14" ).slider({
        range: true,
        min: 0,
        max: 300,
        step: 20,
        values: [ 100, 150 ],
        slide: function( event, ui ) {
            $( "#amount_behuizing" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("casing_Price0").value = ui.values[0];
            document.getElementById("casing_Price1").value = ui.values[1]
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

            document.getElementById("casing_HDD_0").value = ui.values[0];
            document.getElementById("casing_HDD_1").value = ui.values[1]


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
            document.getElementById("casing_HDD/SSD_0").value = ui.values[0];
            document.getElementById("casing_HDD/SSD_1").value = ui.values[1]
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
            document.getElementById("casing_Bayss0").value = ui.values[0];
            document.getElementById("casing_Bayss1").value = ui.values[1]


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
             document.getElementById("casing_expansion_0").value = ui.values[0];
            document.getElementById("casing_expansion_1").value = ui.values[1]
        }
    });
    $( "#amount_behuizing_uitbreiding" ).val( + $( "#slider-range18" ).slider( "values", 0 ) +
    " tot " + $( "#slider-range18" ).slider( "values", 1 ));
});

// Voeding - Prijs
$(function() {
    $( "#slider_powersupply_price" ).slider({
        range: true,
        min: 0,
        max: 400,
        step: 20,
        values: [ 50, 200 ],
        slide: function( event, ui ) {
            $( "#amount_voeding" ).val( "€" + ui.values[ 0 ] + " tot €" + ui.values[ 1 ]  );
            document.getElementById("voeding_cost0").value = ui.values[0];
            document.getElementById("voeding_cost1").value = ui.values[1];
        },
        stop: function(event, ui) {
            // when the user stopped changing the slider
            $.POST("to.php",{first_value:ui.values[0], second_value:ui.values[1]},function(data){});
        }
    });
    $( "#amount_voeding" ).val("€" + $( "#slider_powersupply_price" ).slider( "values", 0 ) +
    " tot €" + $( "#slider_powersupply_price" ).slider( "values", 1 ));
});

// Voeding - Vermogen
$(function() {
    $( "#slider_powersupply_power" ).slider({
        range: true,
        min: 350,
        max: 1500,
        step: 20,
        values: [ 400, 1000 ],
        slide: function( event, ui ) {
            $( "#voeding_vermogen" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]);
            document.getElementById("Powersupply_power0").value = ui.values[0];
            document.getElementById("Powersupply_power1").value = ui.values[1];
        }
    });
    $( "#voeding_vermogen" ).val( + $( "#slider_powersupply_power" ).slider( "values", 0 ) +
    " tot " + $( "#slider_powersupply_power" ).slider( "values", 1 ));
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

// Voeding - S-ATA
$(function() {
    $( "#slider_sata" ).slider({
        range: true,
        min: 0,
        max: 12,
        values: [ 0, 4 ],
        slide: function( event, ui ) {
            $( "#voeding_sata" ).val(  + ui.values[ 0 ] + " tot " + ui.values[ 1 ]  );
            document.getElementById("Sata-connection0").value = ui.values[0];
            document.getElementById("Sata-connection1").value = ui.values[1];
        }
    });
    $( "#voeding_sata" ).val( + $( "#slider_sata" ).slider( "values", 0 ) +
    " tot " + $( "#slider_sata" ).slider( "values", 1 ));
});

// PCI - Prijs
$(function() {
    $( "#pci_price" ).slider({
        range: true,
        min: 0,
        max: 80,
        step: 20,
        values: [ 20, 50 ],
        slide: function( event, ui ) {
            $( "#amount_pci" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("pci_price0").value = ui.values[0];
            document.getElementById("pci_price1").value = ui.values[1];

        }
    });
    $( "#amount_pci" ).val( "€" + $( "#pci_price" ).slider( "values", 0 ) +
    " - €" + $( "#pci_price" ).slider( "values", 1 ));
});

// Geluidskaart - Prijs
$(function() {
    $( "#soundcard_price" ).slider({
        range: true,
        min: 0,
        max: 200,
        step: 20,
        values: [ 50, 100 ],
        slide: function( event, ui ) {
            $( "#amount_geluid" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("soundcard_price0").value = ui.values[0];
            document.getElementById("soundcard_price1").value = ui.values[1];

        }
    });
    $( "#amount_geluid" ).val( + $( "#soundcard_price" ).slider( "values", 0 ) +
    " - €" + $( "#soundcard_price" ).slider( "values", 1 ));
});

$(function() {
    $( "#slider-range25" ).slider({
        range: true,
        min: 0,
        max: 120,
       step:20,
        values: [ 50, 90 ],
        slide: function( event, ui ) {
            $( "#amount_brander" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("Blu-RayDVD_price0").value = ui.values[0];
            document.getElementById("Blu-RayDVD_price1").value = ui.values[1];

        }
    });
    $( "#amount_brander" ).val( "€" + $( "#slider-range25" ).slider( "values", 0 ) +
    " - €" + $( "#slider-range25" ).slider( "values", 1 ));
});

// Processor koeler - Prijs
$(function() {
    $( "#slider_processorcooler_price" ).slider({
        range: true,
        min: 0,
        max: 100,
        step: 20,
        values: [ 50, 90 ],
        slide: function( event, ui ) {
            $( "#amount_koeler" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ]  );
            document.getElementById("ProcessorCoolerP0").value = ui.values[0];
            document.getElementById("ProcessorCoolerP1").value = ui.values[1];
        }
    });
    $( "#amount_koeler" ).val( "€" + $( "#slider_processorcooler_price" ).slider( "values", 0 ) +
    " - €" + $( "#slider_processorcooler_price" ).slider( "values", 1 ));
});

// Processor koeler - Diameter
$(function() {
$( "#slider_processorcooler_diameter" ).slider({
    range: "min",
    min: 6,
    max: 14,
    value: 9,
    slide: function( event, ui ) {
        $( "#koeler_diameter" ).val( ui.value );
        document.getElementById("ProcessorCoolerVentilatorDm0").value = ui.value;

    }
});
$( "#koeler_diameter" ).val( $( "#slider_processorcooler_diameter" ).slider( "value" ) );
});

// Processor koeler - Rotatiesnelheid
$(function() {
    $( "#slider_processorcooler_rotation" ).slider({
        range: true,
        min: 800,
        max: 3300,
        step: 20,
        values: [ 500, 1200 ],
        slide: function( event, ui ) {
            $( "#koeler_rotatie" ).val(  ui.values[ 0 ] + " - " + ui.values[ 1 ]  );
            document.getElementById("ProcessorCoolerRSpeed0").value = ui.values[0];
            document.getElementById("ProcessorCoolerRSpeed1").value = ui.values[1];

        }
    });
    $( "#koeler_rotatie" ).val( $( "#slider_processorcooler_rotation" ).slider( "values", 0 ) +
    " - " + $( "#slider_processorcooler_rotation" ).slider( "values", 1 ));
});