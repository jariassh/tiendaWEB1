$('#modalProducto').on()

$('#registerImage').change(function(){
  var url = $(this).val();
  $('#registrarImagen').attr('src', url);
});

$('#updateImg').change(function(){
  var url = $(this).val();
  $('#imagenActualizar').attr('src', url);
});

function validar(){
  var expresion, combo, selected, imagen, procesador, ram, discoDuro, garantia, costo, descripcion;
  combo = document.getElementsByName("ddlType");
  selected = combo.options[combo.selectedIndex].text;
  alert(selected);
}

