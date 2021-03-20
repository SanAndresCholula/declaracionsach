const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
   nombre:  /^[a-zA-Z\_\s\-]{3,50}$/,
   paterno:  /^[a-zA-Z\_\-]{3,50}$/,
   materno:  /^[a-zA-Z\_\-]{3,50}$/,
   curp: /^([A-Z][AEIOUX][A-Z]{2})(\d[0-9]{1})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([HM]{1})(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)([B-DF-HJ-NP-TV-Z]{3})([0-9A-Z]{1})([0-9]{1})$/,
   rfc:  /^([A-Z][AEIOUX][A-Z]{2})(\d[0-9]{1})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])$/,
   homoclave: /^[A-Z\d]{3}$/,
   // /^\w{2}/,
   correo: /^[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,4}/,
   correo2:  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
   password: /^.{6,12}$/, // 4 a 12 digitos.
   nom_usuario: /^[a-zA-Z0-9@Ñ\_\-]{6,20}$/,
}
const campos = {
	nombre:  false,
   paterno:  false,
   materno:  false,
   curp: false,
   rfc: false,
   homoclave: false,
   correo: false,
   correo2:  false,
   password: false,
   nom_usuario: false
}

const validarFormulario = (e)=>{
   switch(e.target.name){
      case "nombre":
         validarCampo(expresiones.nombre, e.target, 'nombre');
      break;
      case "paterno":
         validarCampo(expresiones.paterno, e.target, 'paterno');
      break;

      case "materno":
         validarCampo(expresiones.materno, e.target, 'materno');v
      break;
      case "curp":
         validarCampo(expresiones.curp, e.target, 'curp');
      break;
      case "rfc":
         validarCampo(expresiones.rfc, e.target, 'rfc');
      break;
      case "homoclave":
         validarCampo(expresiones.homoclave, e.target, 'homoclave');
      break;
      case "correo":
         validarCampo(expresiones.correo, e.target, 'correo');
      break;
      case "correo2":
         validarCampo(expresiones.correo2, e.target, 'correo2');
      break;
      case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
      case "password2":
			validarPassword2();
		break;
      case "nom_usuario":
         validarCampo(expresiones.nom_usuario, e.target, 'nom_usuario');
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

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
   input.addEventListener('keyup', validarFormulario);
   input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	// e.preventDefault();

   const terminos = document.getElementById('terminos');
	if(campos.nombre && campos.paterno && campos.materno && campos.curp && campos.rfc && campos.homoclave && campos.correo2 && campos.password && campos.nom_usuario && terminos.checked ){
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