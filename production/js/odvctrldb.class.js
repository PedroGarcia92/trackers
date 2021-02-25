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
                setTimeout(function(){
                // window.location.reload();
               }, 3000);
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
    document.getElementById('ReporteTms').value="";
    document.getElementById('activoCerrado').value="";
    document.getElementById('siFacturado').value="";
    document.getElementById('siFacturado').value="";
    document.getElementById('usoHorarioDesCarga').value="";
    document.getElementById('usoHorarioCarga').value="";
  }
  listaImputs(){
    this.lista= ["Estimacion","Folio",
    "Cliente","Proveedor","TipoDeUnidad","TarifaIva","Maniobras",
        "Estadia","NombreOperador","CelularOperador","Tractor",
        "PlacasTractor","NumRemolque1","PlacasRemolque1","NumRemolque2",
        "PlacasRemolque2","DomicilioDeCarga","CitaDeCarga","DomicilioDescarga",
        "CitaDescarga","ReporteTms","activoCerrado","siFacturado","usoHorarioCarga","usoHorarioDesCarga"];
        return this.lista;

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
