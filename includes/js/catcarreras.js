$(document).ready(function(){
    $("#cat_carrera").change(function () {         
      $("#cat_carrera option:selected").each(function () {
        id_grado= $(this).val();
        $.post("includes/carrerasObtener.php", { id_grado: id_grado }, function(data){
          $("#catalogo").html(data);
        });            
      });
    })
  });
  $(document).ready(function(){
    $("#catalogo").change(function () {         
      $("#catalogo option:selected").each(function () {
        id_carrera= $(this).val();
        $.post("includes/espacios_disp.php", { id_carrera: id_carrera }, function(data){
          $("#catalogo_org").html(data);
        });            
      });
    }) 
  });