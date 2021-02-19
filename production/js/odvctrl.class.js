const inputsLi = ["Estimacion","Folio",
"Cliente","Proveedor","TipoDeUnidad","TarifaIva","Maniobras",
    "Estadia","NombreOperador","CelularOperador","Tractor",
    "PlacasTractor","NumRemolque1","PlacasRemolque1","NumRemolque2",
    "PlacasRemolque2","DomicilioDeCarga","CitaDeCarga","DomicilioDescarga",
    "CitaDescarga"];
    const inDt = {
  Estimacion:false,
  Folio:false,
  Cliente:false,
  Proveedor:false,
  TipoDeUnidad:false,
  TarifaIva:false,
  Maniobras:false,
  Estadia:false,
  NombreOperador:false,
  CelularOperador:false,
  Tractor:false,
  PlacasTractor:false,
  NumRemolque1:false,
  PlacasRemolque1:false,
  NumRemolque2:false,
  PlacasRemolque2:false,
  DomicilioDeCarga:false,
  CitaDeCarga:false,
  DomicilioDescarga:false,
  CitaDescarga:false
}
const app={"setTimeZone":null}
class odvctrl extends odvctrldb {
  constructor() {
    super();
  }
  setTimeZone(){
    app["setTimeZone"]=Intl.DateTimeFormat().resolvedOptions().timeZone
  }
  pasarObjetoAlerta(alert){
    this.setObjalerta=alert;
  }
  validarCampos(){
   var formLog=document.getElementById('FormPlanner');
 //  var dataF = new FormData(formLog);
 var estimacion=document.getElementById('Estimacion').value;
 var folio=document.getElementById('Folio').value;
 var cliente=document.getElementById('Cliente').value;
 var proveedor=document.getElementById('Proveedor').value;
 var tipoDeUnidad=document.getElementById('TipoDeUnidad').value;
 var tarifaIva=document.getElementById('TarifaIva').value;
 var maniobras=document.getElementById('Maniobras').value;
 var estadia=document.getElementById('Estadia').value;
 var nombreOperador=document.getElementById('NombreOperador').value;
 var celularOperador=document.getElementById('CelularOperador').value;
 var tractor=document.getElementById('Tractor').value;
 var placasTractor=document.getElementById('PlacasTractor').value;
 var numRemolque1=document.getElementById('NumRemolque1').value;
 var placasRemolque1=document.getElementById('PlacasRemolque1').value;
 var numRemolque2=document.getElementById('NumRemolque2').value;
 var placasRemolque2=document.getElementById('PlacasRemolque2').value;
 var domicilioDeCarga=document.getElementById('DomicilioDeCarga').value;
 var citaDeCarga=document.getElementById('CitaDeCarga').value;
 var domicilioDescarga=document.getElementById('DomicilioDescarga').value;
 var citaDescarga=document.getElementById('CitaDescarga').value;
   this.clearErrorCreatePopup();
   if (inDt.Estimacion&&inDt.Folio&&inDt.Cliente&&inDt.Proveedor&&inDt.TipoDeUnidad&&inDt.TarifaIva&&
     inDt.Maniobras&&inDt.Estadia&&inDt.NombreOperador&&inDt.CelularOperador&&inDt.Tractor&&
     inDt.PlacasTractor&&inDt.NumRemolque1&&inDt.PlacasRemolque1&&inDt.NumRemolque2&&inDt.PlacasRemolque2&&
     inDt.DomicilioDeCarga&&inDt.CitaDeCarga&&inDt.DomicilioDescarga&&inDt.CitaDescarga) {
     this.stateInputsFalse(inDt)
         var objH={'option':'Programar',
           "Estimacion":estimacion,
           "Folio":folio,
           "Cliente":cliente,
           "Proveedor":proveedor,
           "TipoDeUnidad":tipoDeUnidad,
           "TarifaIva":tarifaIva,
           "Maniobras":maniobras,
           "Estadia":estadia,
           "NombreOperador":nombreOperador,
           "CelularOperador":celularOperador,
           "Tractor":tractor,
           "PlacasTractor":placasTractor,
           "NumRemolque1":numRemolque1,
           "PlacasRemolque1":placasRemolque1,
           "NumRemolque2":numRemolque2,
           "PlacasRemolque2":placasRemolque2,
           "DomicilioDeCarga":domicilioDeCarga,
           "CitaDeCarga":citaDeCarga,
           "DomicilioDescarga":domicilioDescarga,
           "CitaDescarga":citaDescarga,
           "TimeZone":app["setTimeZone"]
                    }
          this.enviarPost(objH);

        }else{
     //
   }
 }
abrirPopUp(error,msg){
  this.alertPopup(error,msg);
}
  popupErrorInput(id,msg){
   this.abrirPopUp('error',msg);
   $("#"+id).css({'border-color':'rgba(116, 0, 0, 0.6)',"border-weight":"3px"})
 }
 hidePopupErrorInput(id){
          $("#"+id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
  }
  clearErrorCreatePopup(){
    inputsLi.forEach((item,index,arr)=>{
      //|| $('#'+arr[index]).is(':selected')


      //if($.trim($("#"+arr[index]).val())=='') {
        if($("#"+arr[index]).val().length === 0) {

          switch(arr[index]){
            case 'Estimacion':
                  this.popupErrorInput(arr[index],"Se requiere estimacion.")
            break;
            case 'Folio':
                this.popupErrorInput(arr[index],"Se requiere un folio.")
            break;
            case 'Cliente':
                  this.popupErrorInput(arr[index],"Se requiere cliente.")
            break;
            case 'Proveedor':
                  this.popupErrorInput(arr[index],"Se requiere Proveedor.")
            break;
            case 'TipoDeUnidad':
                  this.popupErrorInput(arr[index],"Se requiere tipo de unidad.")
            break;
            case 'TarifaIva':
                  this.popupErrorInput(arr[index],"Se requiere una tarifa.")
            break;
            case 'Maniobras':
                  this.popupErrorInput(arr[index],"Se requiere maniobras.")
            break;
            case 'Estadia':
                  this.popupErrorInput(arr[index],"Se requiere estadia.")
            break;
            case 'NombreOperador':
                  this.popupErrorInput(arr[index],"Se requiere nombre de operador.")
            break;
            case 'CelularOperador':
                  this.popupErrorInput(arr[index],"Se requiere celular de operador.")
            break;
            case 'Tractor':
                  this.popupErrorInput(arr[index],"Se requiere el numero economico de unidad.")
            break;
            case 'PlacasTractor':
                  this.popupErrorInput(arr[index],"Se requiere placas de unidad.")
            break;
            case 'NumRemolque1':
                  this.popupErrorInput(arr[index],"Se requiere numero economico de remolque 1.")
            break;
            case 'PlacasRemolque1':
                  this.popupErrorInput(arr[index],"Se requiere placas del remolque 1.")
            break;
            case 'NumRemolque2':
                  this.popupErrorInput(arr[index],"Se requiere numero economico de remolque 2.")
            break;
            case 'PlacasRemolque2':
                  this.popupErrorInput(arr[index],"Se requiere placas del remolque 2.")
            break;
            case 'DomicilioDeCarga':
                  this.popupErrorInput(arr[index],"Se requiere domicilio de carga.")
            break;
            case 'CitaDeCarga':
                  this.popupErrorInput(arr[index],"Se requiere cita de carga.")
            break;
            case 'DomicilioDescarga':
                  this.popupErrorInput(arr[index],"Se requiere domicilio de descarga.")
            break;
            case 'CitaDescarga':
                  this.popupErrorInput(arr[index],"Se requiere cita de descarga.")
            break;
            default:
            break;
          }
      }else{//borrar label error
          //if($.inArray(arr[index], indexInputs) !== -1){
          if($("#"+arr[index]).val().length > 0) {
          switch(arr[index]){
            case 'Estimacion':
            this.validarespacios(arr[index],"Se requiere estimacion.")
            break;
            case 'Folio':
            this.validarespacios(arr[index],"Se requiere estimacion.")
            break;
            case 'Cliente':
                  this.validarespacios(arr[index],"Se requiere cliente.")
            break;
            case 'Proveedor':
                  this.validarespacios(arr[index],"Se requiere Proveedor.")
            break;
            case 'TipoDeUnidad':
                  this.validarespacios(arr[index],"Se requiere tipo de unidad.")
            break;
            case 'TarifaIva':
                  this.validarespacios(arr[index],"Se requiere una tarifa.")
            break;
            case 'Maniobras':
                  this.validarespacios(arr[index],"Se requiere maniobras.")
            break;
            case 'Estadia':
                  this.validarespacios(arr[index],"Se requiere estadia.")
            break;
            case 'NombreOperador':
                  this.validarespacios(arr[index],"Se requiere nombre de operador.")
            break;
            case 'CelularOperador':
                  this.validarespacios(arr[index],"Se requiere celular de operador.")
            break;
            case 'Tractor':
                  this.validarespacios(arr[index],"Se requiere el numero economico de unidad.")
            break;
            case 'PlacasTractor':
                  this.validarespacios(arr[index],"Se requiere placas de unidad.")
            break;
            case 'NumRemolque1':
                  this.validarespacios(arr[index],"Se requiere numero economico de remolque 1.")
            break;
            case 'PlacasRemolque1':
                  this.validarespacios(arr[index],"Se requiere placas del remolque 1.")
            break;
            case 'NumRemolque2':
                  this.validarespacios(arr[index],"Se requiere numero economico de remolque 2.")
            break;
            case 'PlacasRemolque2':
                  this.validarespacios(arr[index],"Se requiere placas del remolque 2.")
            break;
            case 'DomicilioDeCarga':
                  this.validarespacios(arr[index],"Se requiere domicilio de carga.")
            break;
            case 'CitaDeCarga':
                  this.validarespacios(arr[index],"Se requiere cita de carga.")
            break;
            case 'DomicilioDescarga':
                  this.validarespacios(arr[index],"Se requiere domicilio de descarga.")
            break;
            case 'CitaDescarga':
                  this.validarespacios(arr[index],"Se requiere cita de descarga.")
            break;
            default:
            break;
          }
          }else{
          }
      }
    });
  }
validarespacios(id,msg){
  var es=$.trim($("#"+id).val());
  if (es=='') {
      $("#"+id).val('')
      this.popupErrorInput(id,msg)
  }else{
      $("#"+id).val(es)
      this.hidePopupErrorInput(id)
      inDt[id]=true;
  }

}



}
