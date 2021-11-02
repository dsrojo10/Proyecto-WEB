<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Encargado</title>
    <link rel="stylesheet" href="../css/index.css">
    <!-- Para utilizar los icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <style>
        .modal {
            display: contents !important;
        }
        .modal-dialog {
            max-width: none !important;
            margin: 2rem auto !important;
        }
        p {
            margin-top: -1rem !important;
        }
    </style>
</head>

<body>
    <!-- BARRA DE MENU  -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SG-SST Virtual</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Documentación
                        </a>
                        <!-- revisar este bajar -->
                        <ul class="dropdown-menu bajar" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Información</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Modificar</a>
                                <ul class="dropdown-menu">
                                    <!-- SUB MENU -->
                                    <li><a class="dropdown-item" href="#">Encargado</a></li>
                                    <li><a class="dropdown-item" href="#">Politicas</a></li>
                                    <li><a class="dropdown-item" href="#">Riesgos psicologicos</a></li>
                                    <li><a class="dropdown-item" href="#">Plan de emergencia</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" id="cerrar">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Configuración</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <!-- MODAL -->
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Encargado del SG-SST</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group flex-nowrap mx-auto ">
                                        <input type="text" required="" class="form-control mb-3" placeholder="Nombres" aria-label="name" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group flex-nowrap mx-auto">
                                        <input type="text" required="" class="form-control mb-3" placeholder="Primer Apellido" aria-label="lastname1" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group flex-nowrap mx-auto">
                                        <input type="text" required="" class="form-control mb-3" placeholder="Segundo Apellido" aria-label="lastname2" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group flex-nowrap mx-auto ">
                                        <input type="text" required="" class="form-control mb-3" placeholder="Cédula" aria-label="document" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group flex-nowrap mx-auto">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Nivel de estudios:</option>
                                            <option value="1">Bachiller</option>
                                            <option value="2">Técnico/Tecnólogo</option>
                                            <option value="3">Profesional</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <p>Hoja de vida</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <p>Diploma</p>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <p>Curso 50h</p>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <p>Seccional de salud</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-5">
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                                <p>Política (Documento)</p>
                                            </div>
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                                <p>Riesgos psicosociales (Documento)</p>
                                            </div>
                                            <div class="col">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                                <p>Plan de emergencia (Documento)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>


                </div>


                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>