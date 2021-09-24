@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters-kof99')

@section('contenido')
   <div class="col centrar">
      <img src="{{ asset('img/kof99/kof99.jpg') }}" alt="" height="200">
      <h1 class="display-4" style="color: #cd7020 ">Como jugar</h1>
      <img class="imgresponsive" src="{{ asset('img/kof99/como-jugar-kof-99.jpg') }}" alt="">
   </div>
@endsection