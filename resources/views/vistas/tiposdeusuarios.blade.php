@extends('layouts.principal')
@section('content')
@section('title', 'Ingresar Usuario')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6" style="padding-left:5px;">

                {!!Form::open(['url' => '/sendSMS', 'method' => 'post'])!!}
                 {!!Form::label('n', 'Nombre del tipo de usuario')!!}
                 {!! Form::text('numeros',null,['class'=>'form-control'])!!}
                 <br>
                {!!Form::submit('Guardar',['class'=>'btn btn-success'])!!}

                 {!! Form::close() !!}
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



                </div>

            </div>

        </div>




                </div>

            </div>

        </div>
@stop
