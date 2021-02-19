class odvctrldb {
  constructor() {

  }
  set setObjalerta(alert){
    this.alerta=alert;
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
               //  var url="https://e2etracking.app/";
                //setTimeout(function(){
                 // abrirVenta(url)
                //}, 2000);
              //  this.limpiarFormulario()
              window.location.reload();
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
  limpiarFormulario(){
    document.getElementById('Estimacion').value="";
    document.getElementById('Folio').value="";
    document.getElementById('Cliente').value="";
    document.getElementById('Proveedor').value="";
    document.getElementById('TipoDeUnidad').value="";
    document.getElementById('TarifaIva').value="";
    document.getElementById('Maniobras').value="";
    document.getElementById('Estadia').value="";
    document.getElementById('NombreOperador').value="";
    document.getElementById('CelularOperador').value="";
    document.getElementById('Tractor').value="";
    document.getElementById('PlacasTractor').value="";
    document.getElementById('NumRemolque1').value="";
    document.getElementById('PlacasRemolque1').value="";
    document.getElementById('NumRemolque2').value="";
    document.getElementById('PlacasRemolque2').value="";
    document.getElementById('DomicilioDeCarga').value="";
    document.getElementById('CitaDeCarga').value="";
    document.getElementById('DomicilioDescarga').value="";
    document.getElementById('CitaDescarga').value="";
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
  stateInputsFalse(inDt){
    inDt.Estimacion=false;
    inDt.Folio=false;
    inDt.Cliente=false;
    inDt.Proveedor=false;
    inDt.TipoDeUnidad=false;
    inDt.TarifaIva=false;
    inDt.Maniobras=false;
    inDt.Estadia=false;
    inDt.NombreOperador=false;
    inDt.CelularOperador=false;
    inDt.Tractor=false;
    inDt.PlacasTractor=false;
    inDt.NumRemolque1=false;
    inDt.PlacasRemolque1=false;
    inDt.NumRemolque2=false;
    inDt.PlacasRemolque2=false;
    inDt.DomicilioDeCarga=false;
    inDt.CitaDeCarga=false;
    inDt.DomicilioDescarga=false;
    inDt.CitaDescarga=false
}





}
