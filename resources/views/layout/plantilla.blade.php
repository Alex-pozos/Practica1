<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/icono_kof.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- Scripts bootstrap -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar nav-tabs lead">

        <a href="/"><img src="{{ asset('img/icono_kof.png') }}" width="40" height="40"></a>
        <a class="nav-link" href="#" style="color:deepskyblue;"></a>
        <b class="nav-pills" href="#" style="color:deepskyblue;"><i class="fab fa-steam-symbol"></i>
            Videojuegos <strong>"The kings of fighters"</strong></b>


        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: red"><i
                        class="fas fa-gamepad"></i> Juegos</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/kof97" style="color: red"><img
                            src="{{ asset('img/iconos/kof97.png') }}" alt="" width="70" height="30">
                        kof 97</a>
                    <a class="dropdown-item" href="/kof98" style="color: red"><img
                            src="{{ asset('img/iconos/kof98.png') }}" alt="" width="70" height="30">
                        kof 98</a>
                    <a class="dropdown-item" href="/kof99" style="color: red"><img
                            src="{{ asset('img/iconos/kof99.png') }}" alt="" width="70" height="30">
                        kof 99</a>
                    <a class="dropdown-item" href="/kof2000" style="color: red"><img
                            src="{{ asset('img/iconos/kof2000.png') }}" alt="" width="70" height="30">
                        kof 2000</a>
                    <a class="dropdown-item" href="/kof2001" style="color: red"><img
                            src="{{ asset('img/iconos/kof2001.png') }}" alt="" width="70" height="30">
                        kof 2001</a>
                    <a class="dropdown-item" href="/kof2002" style="color: red"><img
                            src="{{ asset('img/iconos/kof2002.png') }}" alt="" width="70" height="30">
                        kof 2002</a>
                    <a class="dropdown-item" href="/kof2003" style="color: red"><img
                            src="{{ asset('img/iconos/kof2003.png') }}" alt="" width="70" height="30">
                        kof 2003</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/personajes" style="color: red">Todos los
                        personajes</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jefes" style="color:aqua;"><i class="fab fa-battle-net"></i>
                    Jefes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/" style="color:#15df05;"><i class="fas fa-home"></i>
                    Home</a>
            </li>
        </ul>
    </nav>
    
    @yield('contenido')

    <div class="row mt-4">
        <div class="card text-center imgresponsive bordeFooter">
            <div class="card-header fondo2">
                <h5 class="card-title lead">Contáctanos <i class="fab fa-teamspeak"></i> </h5>
            </div>
            <div class="card-body fondo lead t-contactanos">
                <a class="m-4" href="#" data-toggle="modal" data-target="#modal_email" style="color:#bc172e">
                    <i class="far fa-envelope"></i> Email
                </a>
                <a class="m-4" href="#" data-toggle="modal" data-target="#modal_telefono"
                    style="color:#68a266">
                    <i class="fas fa-phone-square-alt"></i> Teléfonos
                </a>
                <a class="m-4" href="#" data-toggle="modal" data-target="#modal_direccion"
                    style="color:#d9a829">
                    <i class="fas fa-map-marked-alt"></i> Dirección
                </a>
                <a class="m-4" href="" data-toggle="modal" data-target="#modal_youtube" style="color:red">
                    <i class="fab fa-youtube"></i> YouTube
                </a>
                <a class="m-4" href="" data-toggle="modal" data-target="#modal_facebook"
                    style="color:#3e66af">
                    <i class="fab fa-facebook-square"></i> Facebook
                </a>
            </div>
            <div class="card-footer text-muted fondo2 lead">
                <img src="{{ asset('img/kof_icono.png') }}" width="80px" height="100px" alt=""> 2021© Todos los
                derechos reservados
            </div>
        </div>
    </div>



    <!-- Modal de Email -->
    <div class="modal fade" id="modal_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
                    <form id="frmArchivos" enctype="multipart/form-data" method="post">
                        <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
                        <p>
                            "Copia el siguiente correo o escanea el QR"
                            <hr>
                        <p class="text-center" style="color:#bc172e">maspornosotrosac@gmail.com</p>
                        <div align="center">
                            <img src="{{ asset('img/QRCorreo.png') }}" alt="" width="150px" height="150px">
                        </div>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de la modal de email -->


    <!-- Modal de telefono  -->
    <div class="modal fade" id="modal_telefono" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Teléfonos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
                    <form id="frmArchivos" enctype="multipart/form-data" method="post">
                        <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
                        <p>
                            "Copia los siguientes números o escanea el QR"
                            <hr>
                        <p class="text-center" style="color:#68a266">(52) 58443083 o 58443022 ext: 114</p>
                        <div align="center">
                            <img src="{{ asset('img/QRTelefono.png') }}" alt="" width="150px" height="150px">
                        </div>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la modal de telefono  -->


    <!-- Modal de dirección -->
    <div class="modal fade" id="modal_direccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dirección</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
                    <form id="frmArchivos" enctype="multipart/form-data" method="post">
                        <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
                        <p>
                            "Copia la dirección o escanea el QR"
                            <hr>
                        <p class="text-center" style="color:#d9a829">Atzayacatl 93, Tula, Milpa Alta, 12200 San Pedro
                            Atocpan, CDMX</p>
                        <div align="center">
                            <img src="{{ asset('img/QRDireccion.png') }}" alt="" width="150px" height="150px">
                        </div>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la modal de direccion  -->


    <!-- Modal de YouTube -->
    <div class="modal fade" id="modal_youtube" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
                    <form id="frmArchivos" enctype="multipart/form-data" method="post">
                        <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
                        <p>
                            "Copia el siguiente link del canal o escanea el QR"
                            <hr>
                        <p class="text-center" style="color:red">xxxxxxxxxxxxxxxxxxxxx</p>
                        <div align="center">
                            <img src="{{ asset('img/QRCorreo.png') }}" alt="" width="150px" height="150px">
                        </div>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de la modal de Youtube -->


    <!-- Modal de Facebook -->
    <div class="modal fade" id="modal_facebook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Facebook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
                    <form id="frmArchivos" enctype="multipart/form-data" method="post">
                        <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
                        <p>
                            "Copia el link de nuestra red social o escanea el QR"
                            <hr>
                            <a href="https://m.facebook.com/masponosotros/" class="text-center"
                                style="color: #3e66af">https://m.facebook.com/masponosotros/</a>
                        <div align="center">
                            <img src="{{ asset('img/QRFacebook.png') }}" alt="" width="150px" height="150px">
                        </div>
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de la modal de Facebook -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
