
   @if(isset($arrays))
   @foreach ($arrays as $item)
       {{$item}}
   @endforeach
@endif

<form action="/usuarios" method="post">
    @csrf
      <input type="submit" value="Enviar">

    </p>
  </form>
