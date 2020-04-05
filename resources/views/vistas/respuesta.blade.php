<!DOCTYPE html>
            <html lang="es">

            <head>
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            </head>

            <body>
                <header id="main-header" style="margin-top:20px">
                    <div class="row">
                        <div class="col-lg-12 franja">
                            <img class="center-block" src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/logo1.png" style="">
                        </div>
                    </div>
                </header>
                <div class="container">
                    <div class="row" style="margin-top:20px">
                        <div class="col-lg-8 col-lg-offset-2 ">
                            <h4 style="text-align:left"> Respuesta de la Transacción </h4>
                            <hr>
                        </div>
                        <div class="col-lg-8 col-lg-offset-2 ">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Referencia</td>
                                            <td id="referencia">{{$datos['data']['x_transaction_id']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Fecha</td>
                                            <td id="fecha" class="">{{$datos['data']['x_transaction_date']}}</td>
                                        </tr>
                                        <tr>
                                            <td>Respuesta</td>
                                            <td id="respuesta"></td>
                                        </tr>
                                        <tr>
                                            <td>Motivo</td>
                                            <td id="motivo"></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Banco</td>
                                            <td class="" id="banco">
                                        </tr>
                                        <tr>
                                            <td class="bold">Recibo</td>
                                            <td id="recibo"></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Total</td>
                                            <td class="" id="total">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="row">
                        <div class="container">
                            <div class="col-lg-8 col-lg-offset-2">
                                <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/pagos_procesados_por_epayco_260px.png" style="margin-top:10px; float:left"> <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/credibancologo.png" height="40px" style="margin-top:10px; float:right">
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->

            </body>

            </html>
