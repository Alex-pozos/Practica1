@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters')

@section('contenido')
    <div class="contenedor">
        <img class="imgresponsive" src="{{ asset('img/img_kof1.jpg') }}" />
        <div class="texto-encima texto">
            <div class="row ml-4" style="background:black; opacity: .9;">
                <div class="col mt-3">
                    <h4 class="display-4 centrar" style="color:deepskyblue">Esta es la pagina Principal</h4>
                    <h3 class="display-5 centrar" style="color:chartreuse;">Bienvenido a la pagina donde encontraras
                        contenido de kof y todos tus personajes favoritos <br>
                        <hr>
                        <iframe width="720" height="500" src="https://www.youtube.com/embed/ohH0pjSkJrM"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen autoplay></iframe><br> Gracias por tu visita 👍.
                    </h3>
                </div>
            </div>
        </div>
        <!-- <div class="centrado">Centrado</div> -->
    </div>

@endsection
