<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="funcion()">
    <form id="frm_botonePayco" name="frm_botonePayco" method="post" action="https://secure.payco.co/checkout.php"   >
        <input name="p_cust_id_cliente" type="hidden" value="{{$datos[1]}}">
        <input name="p_key" type="hidden" value={{$datos[2]}}>
        <input name="p_id_invoice" type="hidden" value={{$datos[3]}}>
        <input name="p_description" type="hidden" value="{{ "id".$datos[3]}}">
        <input name="p_currency_code" type="hidden" value="COP">
        <input name="p_amount" id="p_amount" type="hidden" value={{$datos[4]}}>
        <input name="p_tax" id="p_tax" type="hidden" value="0">
        <input name="p_amount_base" id="p_amount_base" type="hidden" value={{$datos[4]}}>
        <input name="p_test_request" type="hidden" value="TRUE">
        <input name="p_url_response" type="hidden" value="http://google.com">
        <input name="p_url_confirmation" type="hidden" value="">
        <input name="p_signature" type="hidden" id="signature" value="{{$datos[5]}}" />

    </form>

</body>
<script>
function funcion(){
document.all["frm_botonePayco"].submit();
}
</script>
</html>



