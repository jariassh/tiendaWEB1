$('#registerImage').change(function(){
  var textImg = new Boolean(false);
  var urlImg = $(this).val();
  if (urlImg != '') {
    textImg = true;
  }
  switch (textImg) {
    case true:
      $('#registrarImagen').attr('src', urlImg);
      break;

    default:
      $('#registrarImagen').attr('src', 'https://i.postimg.cc/2S9bKh1D/no-image.jpg');
      break;
  }
});

$('#updateImg').change(function(){
  var textImg = new Boolean(false);
  var urlImg = $(this).val();
  if (urlImg != '') {
    textImg = true;
  }
  switch (textImg) {
    case true:
      $('#imagenActualizar').attr('src', urlImg);
      break;

    default:
      $('#imagenActualizar').attr('src', 'https://i.postimg.cc/2S9bKh1D/no-image.jpg');
      break;
  }
});
