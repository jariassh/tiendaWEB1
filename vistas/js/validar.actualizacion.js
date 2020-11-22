const formActualizar = document.getElementById('formActualizar');

function validaImg(){
  var txtImg = document.getElementById('updateImg');
  if(txtImg.value != ""){
    document.getElementById('errorImg').classList.remove('errorMessage');
    txtImg.classList.remove('control-error');
    return true;
  }else {
    txtImg.classList.add('control-error');
    document.getElementById('errorImg').classList.add('errorMessage');
    txtImg.focus();
    return false;
  }
}

function validaProcesador(){
  var txtProcesador = document.getElementById('actualizarProcesador');
  if(txtProcesador.value != ""){
    document.getElementById('errorProcesador').classList.remove('errorMessage');
    txtProcesador.classList.remove('control-error');
    return true;
  }else {
    txtProcesador.classList.add('control-error');
    document.getElementById('errorProcesador').classList.add('errorMessage');
    txtProcesador.focus();
    return false;
  }
}

function validaCosto(){
  var txtCosto = document.getElementById('actualizarCosto');
  if(txtCosto.value != ""){
    document.getElementById('errorCosto').classList.remove('errorMessage');
    txtCosto.classList.remove('control-error');
    return true;
  }else {
    txtCosto.classList.add('control-error');
    document.getElementById('errorCosto').classList.add('errorMessage');
    txtCosto.focus();
    return false;
  }
}

function validaDescription(){
  var txtDescripcion = document.getElementById('actualizarDescripcion');
  if(txtDescripcion.value.length > 0){
    document.getElementById('errorDescripcion').classList.remove('errorMessage');
    txtDescripcion.classList.remove('control-error');
    return true;
  }else {
    txtDescripcion.classList.add('control-error');
    document.getElementById('errorDescripcion').classList.add('errorMessage');
    txtDescripcion.focus();
    return false;
  }
}

function validar(){
  if(!validaImg() | !validaProcesador()  | !validaCosto() | !validaDescription()){
    return false;
  }else{
    return true;
  }
}

  formActualizar.addEventListener('submit', (e)=>{
    if(!validar()){
      e.preventDefault();
    }
  });
