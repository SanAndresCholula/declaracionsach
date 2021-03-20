// habilitar campos

// otros dpcumentos
$('#a_paterno').change(function () {
  $('#a_materno').removeAttr('disabled');
});

$('#a_materno').change(function () {
  $('#nombres').removeAttr('disabled');
});

$('#nombres').change(function () {
  $('#seccion').removeAttr('disabled');
});

$('#num_ext').change(function () {
  $('#registrar').removeAttr('disabled');
});

$('#c_elector').change(function () {
  $('#photoine').removeAttr('disabled');
});

$('#photoine').change(function () {
  $('#ine').removeAttr('disabled');
});

$('#ine').change(function () {
  $('#seccion').removeAttr('disabled');
});

$('#c_curp').change(function () {
  $('#photocurp').removeAttr('disabled');
});

$('#photocurp').change(function () {
  $('#curp').removeAttr('disabled');
});

$('#curp').change(function () {
  $('#telefono').removeAttr('disabled');
});

$('#curp').change(function () {
  $('#sexo').removeAttr('disabled');
});

$('#seccion').change(function () {
  $('#telefono').removeAttr('disabled');
});

$('#seccion').change(function () {
  $('#sexo').removeAttr('disabled');
});

$('#otro').change(function () {
  $('#photootro').removeAttr('disabled');
});

$('#photootro').change(function () {
  $('#otrodoc').removeAttr('disabled');
});

$('#otrodoc').change(function () {
  $('#telefono').removeAttr('disabled');
});

$('#otrodoc').change(function () {
  $('#sexo').removeAttr('disabled');
});

$('#sexo').change(function () {
  $('#nacimiento').removeAttr('disabled');
});

$('#nacimiento').change(function () {
  $('#localidad').removeAttr('disabled');
});

$('#localidad').change(function () {
  $('#colonia').removeAttr('disabled');
});

$('#colonia').change(function () {
  $('#cp').removeAttr('disabled');
});

$('#cp').change(function () {
  $('#calle').removeAttr('disabled');
});

$('#calle').change(function () {
  $('#num_int').removeAttr('disabled');
  $('#num_ext').removeAttr('disabled');
});

$('#num_ext').change(function () {
  $('#photo').removeAttr('disabled');
  $('#comentario').removeAttr('disabled');
});

// input seccion con valor por defecto 1
// $(function(){
//   $("#seccion").val('1')
// });
