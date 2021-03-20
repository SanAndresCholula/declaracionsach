function validar() {
    var a_paterno, a_materno, nombres, ine, curp, telefono, sexo, nacimiento, localidad, seccion, colonia, cp, calle, num_ext, num_int, tp, np, comentario, photo, expresiones;

    a_paterno = document.getElementById("a_paterno").value;
    a_materno = document.getElementById("a_materno").value;
    nombres = document.getElementById("nombres").value;
    ine = document.getElementById("ine").value;
    curp = document.getElementById("curp").value;
    telefono = document.getElementById("telefono").value;
    sexo = document.getElementById("sexo").value;
    nacimiento = document.getElementById("nacimiento").value;
    localidad = document.getElementById("localidad").value;
    // seccion = document.getElementById("seccion").value;
    colonia = document.getElementById("colonia").value;
    cp = document.getElementById("cp").value;
    calle = document.getElementById("calle").value;
    num_ext = document.getElementById("num_ext").value;
    num_int = document.getElementById("num_int").value;
    tp = document.getElementById("tp").value;
    np = document.getElementById("np").value;
    comentario = document.getElementById("comentario").value;
    photo = document.getElementById("photo").value;


    if (a_paterno === "") {
        alert("Campo Apellido Paterno no deben estar vacio");
        return false;
    } else if (a_paterno.length > 30) {
        alert("Apellido Paterno sobrepasó los 30 caracteres permitidos");
        return false;
    } else if (a_materno === "") {
        alert("Campo Apellido Materno no debe estar vacio");
        return false;
    } else if (a_materno.length > 30) {
        alert("Apellido Materno sobrepasó los 30 caracteres permitidos");
        return false;
    } else if (nombres === "") {
        alert("Campo Nombres no debe estar vacio");
        return false;
    } else if (nombres.length > 50) {
        alert("El Nombre sobrepasó los 50 caracteres permitidos");
        return false;
    // }else if (telefono === "") {
    //     alert("Campo Telefono no debe estar vacio");
    //     return false;
    // } else if (!telefono.length === 12) {
    //     alert("El formato teléfono solo permite 10 carcateres");
    //     return false;
    } else if (sexo === "") {
        alert("Campo Genero no debe estar vacio");
        return false;
    } else if (nacimiento === "") {
        alert("Campo Nacimiento no debe estar vacio");
        return false;
    } else if (localidad === "") {
        alert("Campo Localidad no debe estar vacio");
        return false;
    } else if (colonia === "") {
        alert("Campo Colonia no debe estar vacio");
        return false;
    } else if (cp === "") {
        alert("Campo Codígo postal no debe estar vacio");
        return false;
    } else if (calle === "") {
        alert("Campo calle no debe estar vacio");
        return false;
    } else if (num_ext.length > 10) {
        alert("El Número exterior solo permite 10 caracteres");
        return false;
    } else if (num_int.length > 10) {
        alert("El Número interior solo permite 10 caracteres");
        return false;
    } else if (tp === "") {
        alert("Campo Tipo de programa no debe estar vacio");
        return false;
    } else if (np === "") {
        alert("Campo Nombre de programa no debe estar vacio");
        return false;
    }else if (comentario.length > 100) {
        alert("El comentario permite solo 100 caracteres");
        return false;
    }
}

function validarSeccion() {
    var seccion;

    seccion = document.getElementById("seccion").value;

    if (seccion === "") {
        alert("Campo Seccion no debe estar vacio");
        return false;
    } else if (seccion.length > 4) {
        alert("Las secciones distritales solo estan en formato de 4 caracteres");
        return false;
    }else if (isNaN(seccion)) {
        alert("La sección solo acepta dígitos");
        return false;
    }

}
function validarCP() {
    var cp;

    cp = document.getElementById("cp").value;

    if (cp === "") {
        alert("Campo Código postal no debe estar vacio");
        return false;
    } else if (cp.length > 5) {
        alert("El Código Postal solo estan en formato de 5 caracteres");
        return false;
    }else if (isNaN(cp)) {
        alert("El Código Postal solo acepta dígitos");
        return false;
    }

}
function validarLoc() {
    var localidad;

    localidad = document.getElementById("localidad").value;

    if (localidad === "") {
        alert("Campo Localidad no debe estar vacio");
        return false;
    } else if (localidad.length > 60) {
        alert("Localidad solo permite 60 caracteres");
        return false;
    }

}
function validarCol() {
    var colonia;

    colonia = document.getElementById("colonia").value;

    if (colonia === "") {
        alert("Campo colonia no debe estar vacio");
        return false;
    } else if (colonia.length > 70) {
        alert("colonia solo permite 70 caracteres");
        return false;
    }

}
function validarNP() {
    var nom_p;

    nom_p = document.getElementById("nom_p").value;

    if (nom_p === "") {
        alert("Campo Nombre de programa no debe estar vacio");
        return false;
    } else if (nom_p.length > 50) {
        alert("Nombre de programa solo permite 50 caracteres");
        return false;
    }

}
function validarTP() {
    var nom_tp;

    nom_tp = document.getElementById("nom_tp").value;

    if (nom_tp === "") {
        alert("Campo Tipo de programa no debe estar vacio");
        return false;
    } else if (nom_tp.length > 10) {
        alert("Tipo de programa solo permite 10 caracteres");
        return false;
    }

}