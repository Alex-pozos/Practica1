@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters-kof2002')

@section('contenido')
   <div class="col centrar">
      <img src="{{ asset('img/kof2002/kof2002.png') }}" alt="" height="200">
      <h1 class="display-4" style="color: #cd7020 ">Como jugar</h1>
      <img class="imgresponsive" src="{{ asset('img/kof2002/como-jugar-kof-2002.jpg') }}" alt="">
   </div>
@endsection