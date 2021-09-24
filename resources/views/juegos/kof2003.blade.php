@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters-kof2003')

@section('contenido')
   <div class="col centrar">
      <img src="{{ asset('img/kof2003/kof2003.jpg') }}" alt="" height="200">
      <h1 class="display-4" style="color: #cd7020 ">Como jugar</h1>
      <img class="imgresponsive" src="{{ asset('img/kof2003/personajes-kof-2003.jpg') }}" alt="">
   </div>
@endsection