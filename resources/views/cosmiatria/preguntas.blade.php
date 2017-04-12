@extends('layout')
@section('servicios')

<?php $i = 0; ?>
@foreach ($preguntas as $pregunta)

  @if($i%2==0)
    <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">{{ $pregunta->pregunta}} <span class="text-muted"></span></h2>
          <p class="bg-danger">{{$pregunta->respuesta}}</p>
        </div>
        <div class="col-md-5">
          <img src="" alt="" class="img-responsive" >
        </div>
      </div>


@else
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">{{ $pregunta->respuesta}} <span class="text-muted"></span></h2>
          <p class="lead">{{ $pregunta->respuesta}}</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img src="" alt="" class="img-responsive" >
        </div>
      </div>

@endif
<?php $i++; ?>
<hr class="featurette-divider">
@endforeach



@endsection
