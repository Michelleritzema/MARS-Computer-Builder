document.forms[0].GPU_producer1.addEventListener("click", EnableDisableToolTip);

function EnableDisableNvidia() {
    if(document.forms[0].GPU_producer1.checked) {
        $('.GPU_type_NVIDIA_table').toggle();
        document.getElementById(GPU_type_AMD_table).style.display = 'block';
    } else {
        $('.GPU_type_NVIDIA_table').toggle();
        document.getElementById(GPU_type_AMD_table).style.display = 'hidden';
    }
}

function EnableDisableAMD() {
    if(document.forms[0].GPU_producer2.checked) {
        $('.GPU_type_AMD_table').toggle();
        document.getElementById(GPU_type_AMD_table).style.display = 'block';
    } else {
        $('.GPU_type_AMD_table').toggle();
        document.getElementById(GPU_type_AMD_table).style.display = 'hidden';
    }
}