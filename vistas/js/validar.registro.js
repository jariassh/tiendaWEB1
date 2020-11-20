const formRegistrar = document.getElementById('formRegistrar');

function validaType(){
  var selectType = document.getElementById('ddlType');
  if(selectType.value != 0){
    document.getElementById('errorTipo').classList.remove('errorMessage');
    selectType.classList.remove('control-error');
    return true;
  }else{
    selectType.classList.add('control-error');
    document.getElementById('errorTipo').classList.add('errorMessage');
    selectType.focus();
    return false;
  }
};

function validaImg(){
  var txtImg = document.getElementById('registerImage');
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
  var txtProcesador = document.getElementById('txtProcesador');
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

function validaRam(){
  var selectRam = document.getElementById('ddlRam');
  if(selectRam.value != 0){
    document.getElementById('errorRam').classList.remove('errorMessage');
    selectRam.classList.remove('control-error');
    return true;
  }else{
    selectRam.classList.add('control-error');
    document.getElementById('errorRam').classList.add('errorMessage');
    selectRam.focus();
    return false;
  }
}

function validaDiscoDuro(){
  var selectDisco = document.getElementById('ddlDiscoDuro');
  if(selectDisco.value != 0){
    document.getElementById('errorDisco').classList.remove('errorMessage');
    selectDisco.classList.remove('control-error');
    return true;
  }else{
    selectDisco.classList.add('control-error');
    document.getElementById('errorDisco').classList.add('errorMessage');
    selectDisco.focus();
    return false;
  }
}

function validaGarantia(){
  var selectWarranty = document.getElementById('ddlGarantia');
  if(selectWarranty.value != 0){
    document.getElementById('errorGarantia').classList.remove('errorMessage');
    selectWarranty.classList.remove('control-error');
    return true;
  }else{
    selectWarranty.classList.add('control-error');
    document.getElementById('errorGarantia').classList.add('errorMessage');
    selectWarranty.focus();
    return false;
  }
}

function validaCosto(){
  var txtCosto = document.getElementById('txtCosto');
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
  var txtDescripcion = document.getElementById('txtDescripcion');
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
  if(!validaType() | !validaImg() | !validaProcesador() | !validaRam() | !validaDiscoDuro() | !validaGarantia() | !validaCosto() | !validaDescription()){
    return false;
  }else{
    return true;
  }
}

formRegistrar.addEventListener('submit', (e)=>{
  if(!validar()){
    e.preventDefault();
  }
});
