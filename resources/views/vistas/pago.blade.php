<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
         <div align="center">
                <div class="row " style="padding-top:30px;">

                        <div class="col-10 col-md-4">


                        </div>

                        <div class="col-10 col-md-4">

                            <h1>Valor a pagar {{$amount}}</h1>

                            <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                                {{ csrf_field() }}
                                <input name="merchantId"    type="hidden"  value="{{$mercaid}}"   >
                                <input name="accountId"     type="hidden"  value="512321" >
                                <input name="description"   type="hidden"  value="Test PAYU"  >
                                <input name="referenceCode" type="hidden"  value="{{$ref}}" >
                                <input name="amount"        type="hidden"  value="{{$amount}}"   >
                                <input name="tax"           type="hidden"  value="{{$tax}}"  >
                                <input name="taxReturnBase" type="hidden"  value="16806" >
                                <input name="currency"      type="hidden"  value="COP" >
                                <input name="signature"     type="hidden"  value= "{{$signature}}"                 >
                                <input name="test"          type="hidden"  value="1" >
                                <input name="buyerEmail"    type="hidden"  value="test@test.com" >
                                <input name="responseUrl"    type="hidden"  value="https://google.com" >
                                <input name="confirmationUrl"    type="hidden"  value="http://www.test.com/confirmation" >
                                <input name="Submit"   class="btn"     type="submit"  value="Pagar" >
                              </form>
                        </div>
                        <div class="col-10 col-md-4">


                        </div>

                </div>

         </div>

</body>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</html>


