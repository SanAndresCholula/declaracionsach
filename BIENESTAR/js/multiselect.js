// Combo select 3 niveles

$(document).ready(function(){
    $("#seccion").change(function () {
  
      $('#cp').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
      
      $("#seccion option:selected").each(function () {
        id_nsec = $(this).val();
        $.post("colonias.php", { id_nsec: id_nsec }, function(data){
          $("#colonia").html(data);
        });            
      });
    })
  });
  $(document).ready(function(){
    $("#colonia").change(function () {
      
      $("#colonia option:selected").each(function () {
        id_col = $(this).val();
        $.post("cp.php", { id_col: id_col }, function(data){
          $("#cp").html(data);
        });            
      });
    })
  });