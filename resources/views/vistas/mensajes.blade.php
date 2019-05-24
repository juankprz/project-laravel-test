
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

                               <img src="images/comunicacion.png" alt="hola mundo" width="300" height="300">
                                <h1>Sistema de notificacion Escolar</h1>
                                <br>
                                {!!Form::open(['url' => '/mensajes', 'method' => 'post'])!!}
                                {!!Form::label('n', 'Numeros de telefonos')!!}
                                {!! Form::text('numeros',null,['class'=>'form-control','placeholder' => 'Digite los numeros  separados por ; en caso de ser mas de un numero'])!!}
                                <br>
                                {!!Form::label('n', 'Mensaje:')!!}
                                <br>
                                {!! Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'Escriba su mensaje '])!!}
                                <br>
                               {!!Form::submit('Enviar Mensajes ',['class'=>'btn btn-success'])!!}
                                <br>
                               <div class="alert alert-warning" style=" padding-top:2px;"> <strong style="color:red;"> Importante!!!: </strong> En los actuales momentos los mensajes no cuentan con caracteres que contengan acentuaciones <strong style="color:red;"> Estamos trabajando para brindarles un mejor servicio, Gracias </strong></div>
                               <br>
                               {!! Form::close() !!}
                        </div>
                        <div class="col-10 col-md-4">


                        </div>

                </div>

         </div>

</body>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</html>


