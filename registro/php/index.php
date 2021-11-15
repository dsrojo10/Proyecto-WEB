<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <!-- Para utilizar los icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<style>
			#person {
		font-size: 60px;
		margin-left: 46%;
	}

	.input-group {
		margin-top: 1rem;
		width: 25%;
	}

	option {
		font-size: 1rem;
		color: gray;
	}

	* {
		box-sizing: border-box;
	}

	body {
		font-family: 'Roboto', sans-serif;
		background: #E5E5E5;
	}

	main {
		max-width: 800px;
		width: 90%;
		margin: auto;
		padding: 40px;
	}

	.formulario {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 20px;
	}

	.formulario__label {
		display: block;
		font-weight: 700;
		padding: 10px;
		cursor: pointer;
	}

	.formulario__grupo-input {
		position: relative;
	}

	.formulario__input {
		width: 100%;
		background: #fff;
		border: 3px solid transparent;
		border-radius: 3px;
		height: 45px;
		line-height: 45px;
		padding: 0 40px 0 10px;
		transition: .3s ease all;
	}

	.formulario__input:focus {
		border: 3px solid #0075FF;
		outline: none;
		box-shadow: 3px 0px 30px rgba(163,163,163, 0.4);
	}

	.formulario__input-error {
		font-size: 12px;
		margin-bottom: 0;
		display: none;
	}

	.formulario__input-error-activo {
		display: block;
	}

	.formulario__validacion-estado {
		position: absolute;
		right: 10px;
		bottom: 15px;
		z-index: 100;
		font-size: 16px;
		opacity: 0;
	}

	.formulario__mensaje,
	.formulario__grupo-btn-enviar {
		grid-column: span 2;
	}

	.formulario__mensaje {
		height: 45px;
		line-height: 45px;
		background: #F66060;
		padding: 0 15px;
		border-radius: 3px;
		display: none;
	}

	.formulario__mensaje-activo {
		display: block;
	}

	.formulario__mensaje p {
		margin: 0;
	}

	.formulario__grupo-btn-enviar {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.formulario__btn {
		/* margin-top: 25px; */
		height: 45px;
		line-height: 45px;
		width: 30%;
		color: #fff;
		font-weight: bold;
		border: none;
		border-radius: 3px;
		cursor: pointer;
		transition: .1s ease all;
	}

	.formulario__btn:hover {
		box-shadow: 3px 0px 30px rgba(163,163,163, 1);
	}

	.formulario__mensaje-exito {
		font-size: 15px;
		margin-top: 10px;
		color: #119200;
		display: none;
	}

	.formulario__mensaje-exito-activo {
		display: block;
	}

	/* ----- -----  Estilos para Validacion ----- ----- */
	.formulario__grupo-correcto .formulario__validacion-estado {
		color: #1ed12d;
		opacity: 1;
	}

	.formulario__grupo-incorrecto .formulario__label {
		color: #bb2929;
	}

	.formulario__grupo-incorrecto .formulario__validacion-estado {
		color: #bb2929;
		opacity: 1;
	}

	.formulario__grupo-incorrecto .formulario__input {
		border: 3px solid #bb2929;
	}


	/* ----- -----  Mediaqueries ----- ----- */
	@media screen and (max-width: 800px) {
		.formulario {
			grid-template-columns: 1fr;
		}

		.formulario__mensaje,
		.formulario__grupo-btn-enviar {
			grid-column: 1;
		}

		.formulario__btn {
			width: 100%;
		}
	}
	</style>

</head>

<body>
    <main>
        <!-- TITULO -->
        <div class="container-fluid">
            <h1 class="text-center mb-1 mt-2 text-danger">Crear Usuario</h1>
            <i id="person" class="bi bi-person-plus-fill text-danger"></i>
        </div>

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
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>