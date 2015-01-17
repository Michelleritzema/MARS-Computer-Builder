<div class="parts-buttons col-md-12">
    <a href="voeding">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/voeding.gif"></td></tr>
            <tr class="link_row"><td id="text_powersupply" class="link">Voeding</td></tr>
        </table>
    </a>
    <a href="processorkoeler">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/processorkoelers.gif"></td></tr>
            <tr class="link_row"><td id="text_processorcooler" class="link">Processor<br>koeler</td></tr>
        </table>
    </a>
    <a href="internehardeschijf">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/internehardeschijven.gif"></td></tr>
            <tr class="link_row"><td id="text_internalharddrive" class="link">Harde schijf</td></tr>
        </table>
    </a>
    <a href="geluidskaart">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/geluidkaarten.gif"></td></tr>
            <tr class="link_row"><td id="text_soundcard" class="link">Geluidskaart</td></tr>
        </table>
    </a>
    <a href="PCI">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/PCI.gif"></td></tr>
            <tr class="link_row"><td id="text_PCI" class="link">PCI express</td></tr>
        </table>
    </a>
    <a href="videokaart">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/videokaart.gif"></td></tr>
            <tr class="link_row"><td id="text_videocard" class="link">Videokaart</td></tr>
        </table>
    </a>
</div>
<div class="parts-buttons col-md-12">
    <a href="processor">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/processor.gif"></td></tr>
            <tr class="link_row"><td id="text_processor" class="link">Processor</td></tr>
        </table>
    </a>
    <a href="internalmemory">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/internalmemory.gif"></td></tr>
            <tr class="link_row"><td id="text_internalmemory" class="link">Intern<br>geheugen</td></tr>
        </table>
    </a>
    <a href="motherboard">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/motherboard.gif"></td></tr>
            <tr class="link_row"><td id="text_motherboard" class="link">Moederbord</td></tr>
        </table>
    </a>
    <a href="casing">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/casing.gif"></td></tr>
            <tr class="link_row"><td id="text_casing" class="link">Behuizing</td></tr>
        </table>
    </a>
    <a href="ssd">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/ssd.gif"></td></tr>
            <tr class="link_row"><td id="text_ssd" class="link">SSD</td></tr>
        </table>
    </a>
    <a href="blu-raydvd">
        <table class="col-xs-2">
            <tr><td class="link_image"><img src="images/blu-rayDVD.gif"></td></tr>
            <tr class="link_row"><td id="text_bluraydvd" class="link">Blu-Ray<br>DVD</td></tr>
        </table>
    </a>
</div>

<script type="text/javascript">
    var menuitem = '<?php echo $menuitem; ?>';
    switch(menuitem) {
        case "powersupply":
            document.getElementById("text_powersupply").style.background="#e8e8e8";
            document.getElementById("text_powersupply").style.fontWeight="bold";
            break;
        case "processorcooler":
            document.getElementById("text_processorcooler").style.background="#e8e8e8";
            document.getElementById("text_processorcooler").style.fontWeight="bold";
            break;
        case "internalharddrive":
            document.getElementById("text_internalharddrive").style.background="#e8e8e8";
            document.getElementById("text_internalharddrive").style.fontWeight="bold";
            break;
        case "soundcard":
            document.getElementById("text_soundcard").style.background="#e8e8e8";
            document.getElementById("text_soundcard").style.fontWeight="bold";
            break;
        case "PCI":
            document.getElementById("text_PCI").style.background="#e8e8e8";
            document.getElementById("text_PCI").style.fontWeight="bold";
            break;
        case "videocard":
            document.getElementById("text_videocard").style.background="#e8e8e8";
            document.getElementById("text_videocard").style.fontWeight="bold";
            break;
        case "processor":
            document.getElementById("text_processor").style.background="#e8e8e8";
            document.getElementById("text_processor").style.fontWeight="bold";
            break;
        case "internalmemory":
            document.getElementById("text_internalmemory").style.background="#e8e8e8";
            document.getElementById("text_internalmemory").style.fontWeight="bold";
            break;
        case "motherboard":
            document.getElementById("text_motherboard").style.background="#e8e8e8";
            document.getElementById("text_motherboard").style.fontWeight="bold";
            break;
        case "casing":
            document.getElementById("text_casing").style.background="#e8e8e8";
            document.getElementById("text_casing").style.fontWeight="bold";
            break;
        case "ssd":
            document.getElementById("text_ssd").style.background="#e8e8e8";
            document.getElementById("text_ssd").style.fontWeight="bold";
            break;
        case "bluraydvd":
            document.getElementById("text_bluraydvd").style.background="#e8e8e8";
            document.getElementById("text_bluraydvd").style.fontWeight="bold";
            break;
        default:
            break;
    }
</script>