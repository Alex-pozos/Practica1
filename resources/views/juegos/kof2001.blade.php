@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters-kof2001')

@section('contenido')
   <div class="col centrar">
      <img src="{{ asset('img/kof2001/kof2001.png') }}" alt="" height="200">
      <h1 class="display-4" style="color: #cd7020 ">Como jugar</h1>
      <img class="imgresponsive" src="{{ asset('img/kof2001/como-jugar-kof-2001.jpg') }}" alt="">
   </div>
@endsection