@extends('layout')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
@section('carrusel')

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


@endsection

@section('contacto')
<div class="row featurette">
    <div class="col-md-7">
      <form method="POST" action="CrearCita">
     {!! csrf_field()!!}



      <div class="container">
        <div class="row">
            <div class='col-sm-10'>
                <div class="form-group">
                    <div class='input-group'>
                        <input type="text" class="contact-input" name="nombre" id="nombre" />
                    </div>
                </div>
            </div>
        </div>
    </div

      <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group '>
                        <input type="email" class="contact-input" name="mail" id="mail" />
                    </div>
                </div>
            </div>
        </div>
    </div


            <div class="container">
              <div class="row">
                  <div class='col-sm-6'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker1'>
                            <select class="form-control" name="servicio">
                                 @foreach ($servicios as $servicio)
                                 <option>{{ $servicio->nombre}}</option>
                                 @endforeach
                             </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>




             <div class="container">
               <div class="row">
                   <div class='col-sm-6'>
                       <div class="form-group">
                           <div class='input-group date'>
                             <select class="form-control" name="hora">
                                  @foreach ($hora as $h)
                                  <option>{{ $h->hora}}</option>
                                  @endforeach
                              </select>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

        <div class="container">
          <div class="row">
              <div class='col-sm-2'>
                  <div class="form-group">
                      <div class='input-group date' id='datetimepicker1'>
                          <input type="text" class="form-control datepicker" name="date">
                          <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <button type="submit" class="btn btn-default">Registrar</button>
    </from>
    </div>
</div>


@endsection
