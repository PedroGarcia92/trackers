class modelapp {
  constructor() {

    this.setCamposValidarInit();
  }
  setObjalerta(alert){
  this.alerta=alert;
}
setCamposValidarInit(){
  this.Plataforma="Plataforma";
  this.usuario="usuario";
  this.password="password";
  //this.proveedor="Proveedor";
  this.lista= [this.proveedor,this.Plataforma,this.usuario,this.password];
}
listaInputs(){
  return this.lista;
  }
  modificarListaValidacionEztrack(listValidacion){
    listValidacion.push(this.proveedor,this.Plataforma);
    this.lista=listValidacion;
  }
  modificarListaValidacionUtrax(listValidacion){
    listValidacion.push(this.proveedor,this.Plataforma);
    this.lista=listValidacion;
  }
  modificarListaValidacionOtros(listValidacion){
    listValidacion.push(this.proveedor,this.Plataforma);
    this.lista=listValidacion;
  }
  enviarPost(objH){
    var url="class/comctrl.php";
     fetch(url, {
       method: 'POST', // or 'PUT'
       body: JSON.stringify(objH), // data can be `string` or {object}!
       headers:{
         'Content-Type': 'application/json'
       }
     }).then(res =>res.json())
       .then(data => {
             switch(data["success"]){
                 case true:
                this.alertPopup("success",data["message"]);
              //  this.limpiarFormulario()
                 break;
                 case false:
                 this.alertPopup("error",data["message"]);
                 break;
                 default:
                 break;
             }
       })
     .catch( error =>
     this.alertPopup("error",error)
   )
  }
  alertPopup(typeA,msg){
 Command: this.alerta[typeA](msg,"")
 this.alerta.options = {
 "closeButton": true,
 "debug": false,
 "newestOnTop": false,
 "progressBar": true,
 "positionClass": "toast-top-right",
 "preventDuplicates": true,
 "onclick": null,
 "showDuration": "100",
 "hideDuration": "1000",
 "timeOut": "5000",
 "extendedTimeOut": "1000",
 "showEasing": "swing",
 "hideEasing": "linear",
 "showMethod": "fadeIn",
 "hideMethod": "fadeOut"
 }
}
}
