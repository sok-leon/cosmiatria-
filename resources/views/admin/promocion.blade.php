@extends('admin.layoutAdmin')
@section('contenido')
<h2>Promociones</h2>
<div >
<table class="table table-hover">
   <thead>
       <tr class="danger">
           <td>Imagen</td>
           <td>Nombre</td>
           <td>Acción</td>
       </tr>
   </thead>
   <tbody>

 @foreach($promocion as $promocion)
   <tr>
     <td>  {{$promocion->id}} </td>
     <td>  {{$promocion->imagen}} </td>
     <td>
       <a href="{!! URL::to('/editprom/'.$promocion->id) !!}">Editar</a>
     </td>
   </tr>
   </tbody>
 @endforeach
 </table>

@endsection
