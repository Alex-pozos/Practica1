@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters-kof2000')

@section('contenido')
   <div class="col centrar">
      <img src="{{ asset('img/kof2000/kof2000.jpg') }}" alt="" height="200">
      <h1 class="display-4" style="color: #cd7020 ">Como jugar</h1>
      <img class="imgresponsive" src="{{ asset('img/kof2000/como-jugar-kof-2000.jpg') }}" alt="">
   </div>
@endsection