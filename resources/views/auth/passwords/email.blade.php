@extends('layouts.app')
@section('content')
<script>
        $(document).ready(function(){
        $('#edit').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var title = button.data('mytitle')
                var modal = $(this)
                modal.find('.modal-body #email').val(title);
                console.log(modal);

          });

        });


    </script>
<table class="table" style="padding-top:50px;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
        </tr>
        </thead>
        <tbody>
         @foreach ($users as $user)

            <tr>
                <th scope="row">{{$user->id}} </th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
             <td> <button class="btn btn-info" data-mytitle="{{$user->email}}"  data-toggle="modal" data-target="#edit">Resetear</button> </td>
             </tr>
          @endforeach

        </tbody>
      </table>
      @endsection
      <!-- Modal -->
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <h4 class="modal-title" id="myModalLabel">Resetear password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('password.email') }}" method="post">
                    {{csrf_field()}}
                <div class="modal-body">
                        @include('form.reset')

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>




