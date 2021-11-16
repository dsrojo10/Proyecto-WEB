<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Agregar Usuarios</title>
    <link rel="stylesheet" href="../css/index.css">
    <!-- Para utilizar los icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <style>
        .modal {
            display: contents;
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
                                    <li><a class="dropdown-item" href="../../encargado/php/index.php">Encargado</a></li>
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

    <!-- TITULO -->
    <div class="container-fluid">
        <h1 class="text-center mb-1 mt-2 text-danger">Agregar Usuario</h1>
    </div>

    <!-- MODAL -->
    <div class="container-lg">
        <div class="modal m1" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- BOTON -->
                        <button type="button" class="btn btn-danger">
                            <i class="bi bi-plus-lg"></i>   
                        </button>
                        <!-- TABLA -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Contraseña</th>
                                    <th scope="col">Fecha de creación</th>
                                    <th scope="col">Activo</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">ID empleado</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
		<form action="" class="formulario" id="formulario">
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="juan123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombres</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Juan">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre solo puede contener letras incluidos acentos.</p>
			</div>
            
			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido">
				<label for="apellido" class="formulario__label">Apellidos</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Pérez">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El apellido solo puede contener letras incluidos acentos.</p>
			</div>
            
			<!-- Grupo: Cedula -->
			<div class="formulario__grupo" id="grupo__cedula">
				<label for="cedula" class="formulario__label">Cedula</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="cedula" id="cedula" placeholder="12345690">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El documento de identidad solo puede llevar numeros.</p>
			</div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: Celular -->
			<div class="formulario__grupo" id="grupo__celular">
				<label for="celular" class="formulario__label">Celular</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="celular" id="celular" placeholder="3113197128">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="8454525">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El Celular solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>
            
			<!-- Grupo: Dirección -->
			<div class="formulario__grupo" id="grupo__direccion">
				<label for="direccion" class="formulario__label">Dirección</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Cra. 35b # 87-96">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La dirección solo debe incluir letras, numeros, guión y numeral.</p>
			</div>
            
			<!-- Grupo: Rol -->
			<div class="formulario__grupo" id="grupo__rol">
				<label for="rol" class="formulario__label">Rol</label>
				<div class="formulario__grupo-input">
					<select class="form-select formulario__input" id="floatingSelect rol" name="rol">
                        <option selected>Seleccione un rol:</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La dirección solo debe incluir letras, numeros, guión y numeral.</p>
			</div>

            <!-- Mensaje error -->
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene el formulario correctamente. </p>
			</div>

            <!-- Boton enviar -->
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn btn-danger">Registrarse</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>

    <script src="../js/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>