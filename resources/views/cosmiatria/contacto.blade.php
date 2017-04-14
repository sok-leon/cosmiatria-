@if(isset($cita))

      <div class="container">
        <div class="row">
            <div class='col-sm-10'>
                <div class="form-group">
                    <div class='input-group'>
                        {{$cita->nombre}}
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group '>
                        <input type="email" class="contact-input" name="mail" id="mail" value={{$cita->mail}} />
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="container">
              <div class="row">
                  <div class='col-sm-6'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker1'>
                            <select class="form-control" name="servicio" value={{$cita->servicio}}>
                                 @foreach ($servicios as $servicio)
                                 @if($cita->servicio == $servicio->nombre)
                                     <option selected>{{ $servicio->nombre }}</option>
                                 @else
                                     <option>{{ $servicio->nombre }}</option>
                                 @endif

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
                                    @if($cita->hora == $h->hora)
                                        <option selected>{{ $h->hora}}</option>
                                    @else
                                        <option>{{ $h->hora}}</option>
                                    @endif
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
                             <input type="text" class="form-control datepicker" name="date" value={{$cita->fecha}}>
                             <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

@else
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
    </div>

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
    </div>

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

@endif

<script>
    $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true,
        inline: true
    });
</script>
