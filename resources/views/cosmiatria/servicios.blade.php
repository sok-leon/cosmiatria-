@extends('layout')
@section('servicios')

@set('i', 0);
@foreach ($servicios as $servicios)
      <hr class="featurette-divider">
      <div class="row featurette">
    @if(i%2==0)
      <div class="col-md-7">
      else
      <div class="col-md-7 col-md-push-5">
    @endif
          <h2 class="featurette-heading">{{ $servicios->nombre}} <span class="text-muted"></span></h2>
          <p class="lead">{{ $servicios->descripcion}}</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      $i++;
@endforeach
      <hr class="featurette-divider">


@endsection
