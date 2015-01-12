<script>
    document.forms[0].GPU_producer1.addEventListener("click", enableDisableTable);

    function enableDisableTable() {
        if (document.forms[0].GPU_producer1.checked) {
            alert("Checked");
        }
        else if (!document.forms[0].GPU_producer1.checked) {
            alert("Unchecked");
        }
    }
</script>
<form>
    <input type="checkbox" name="GPU_producer1" value="foo" />
</form>