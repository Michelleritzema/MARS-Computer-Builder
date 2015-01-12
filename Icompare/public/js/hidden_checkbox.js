/**
 * Created by Michelle on 12/01/2015.
 */

document.forms[0].GPU_producer1.addEventListener("click", enableDisableTable);

/*function enableDisableTable() {
    if (document.forms[0].GPU_producer1.checked) {
        alert("Checked");
    }
    else if (!document.forms[0].GPU_producer1.checked) {
        alert("Unchecked");
    }
}*/

/*var producer1 = document.getElementById('GPU_producer1'),
    producer2 = document.getElementById('GPU_producer2');

if (producer1.checked) {
    document.getElementById("amd_hidden").style.display="inline-block"
}*/

var checkbox = $('#GPU_producer1');
if(checkbox.length !== 0) {
    var hidden = $('#amd_hidden');
    if(checkbox.prop('checked')) {
        alert("checked");
        hidden.show();
    } else {
        alert("unchecked");
        hidden.hide();
    }
    checkbox.change(function() {
        if(this.checked) {
            hidden.show();
        } else {
            hidden.hide();
        }
    });
}