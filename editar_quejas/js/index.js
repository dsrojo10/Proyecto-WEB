const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	queja: /^[a-zA-ZÀ-ÿ\s\,.]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	descripcion: /^[a-zA-ZÀ-ÿ\s\,.]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	archivo: /^[a-zA-ZÀ-ÿ\s\,.]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	observacion: /^[a-zA-ZÀ-ÿ\s\,.]{1,40}$/, // Letras y espacios, pueden llevar acentos.




	cedula: /^\d{7,14}$/, // 7 a 14 numeros.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	celular: /^\d{10,20}$/, // 10 a 20 numeros.
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    direccion: /^[a-zA-ZÀ-ÿ\s0-9\-\#]{1,40}$/, // Letras y espacios, pueden llevar guion y numeral
}

const campos = {
	nombre: false,
	apellido: false,
	queja: false,
	descripcion: false,
	archivo: false,
	observacion: false,
    
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;
		case "queja":
			validarCampo(expresiones.queja, e.target, 'queja');
		break;
		case "descripcion":
			validarCampo(expresiones.descripcion, e.target, 'descripcion');
		break;
		case "archivo":
			validarCampo(expresiones.archivo, e.target, 'archivo');
		break;
		case "observacion":
			validarCampo(expresiones.observacion, e.target, 'observacion');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	if(campos.usuario && campos.nombre && campos.apellido && campos.cedula && campos.password && campos.celular && campos.telefono && campos.direccion){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});