
class odvctrl extends odvctrldb {
  constructor() {
    super();
  }
  pasarObjetoAlerta(alert){
    this.setObjalerta=alert;
  }
  quitarMarcaRequiredFactura(){
    if (document.querySelector('#ul_siFacturado')) {
        var el= document.querySelector('#ul_siFacturado');
        el.style.display="none";
    }
  }
  setValorCampofactura(valor){
    if (document.querySelector('#siFacturado')) {
        var el= document.querySelector('#siFacturado');
        el.value=`${valor}`;
    }
  }
  shadownSelectFactura(elemento,estilo){
    var el= document.querySelector(`#${elemento}`);
     el.style=`${estilo}`;
  }
  interactFactura(param){
    this.quitarMarcaRequiredFactura();
    switch (param) {
      case "Si":
      this.setValorCampofactura(param);
      this.shadownSelectFactura("rdSiFa",
    "box-shadow: 0 0 0 0.2rem rgba(223, 125, 100,0.5)");
    this.shadownSelectFactura("rdNoFa",
  "");
      break;
      case "No":
        this.setValorCampofactura(param);
        this.shadownSelectFactura("rdSiFa","");
      this.shadownSelectFactura("rdNoFa",
    "box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5");
        break;
      default:
    }
  }
  quitarMarcaRequiredStatus(){
    if (document.querySelector('#ul_activoCerrado')) {
        var el= document.querySelector('#ul_activoCerrado');
        el.style.display="none";
    }
  }
  setActivoCerrado(valor){
    if (document.querySelector('#activoCerrado')) {
        var el= document.querySelector('#activoCerrado');
        el.value=`${valor}`;
    }
  }
  shadowActivoCerrado(elemento,estilo){
    var el= document.querySelector(`#${elemento}`);
     el.style=`${estilo}`;

  }
  interactActivoCerrado(param){
    this.quitarMarcaRequiredStatus();
    switch (param) {
      case "Activo":
      this.shadowActivoCerrado("idActivo",
      "box-shadow: 0 0 0 0.2rem rgba(223, 125, 100,0.5)")
        var va=document.getElementById('idActivo');
      this.shadowActivoCerrado("idCerrado","")
        this.setActivoCerrado('Activo');
      break;
      case "Cerrado":
        this.shadowActivoCerrado("idActivo","")
        var va=document.getElementById('idActivo');
        this.shadowActivoCerrado("idCerrado",
        "box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5)")
        this.setActivoCerrado('Cerrado');
        break;
      default:
    }
  }
  validarCampos(){
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
 var tms=document.getElementById('ReporteTms').value;
 var activoCerrado=document.getElementById('activoCerrado').value;
 var factura=document.getElementById('siFacturado').value;
 var usoHrCarga=document.getElementById('usoHorarioCarga').value;
 var usoHrDesCarga=document.getElementById('usoHorarioDesCarga').value;
   var resp=this.clearErrorCreatePopup();
     if (!resp.includes(true)) {
         var objH={"Estimacion":estimacion,
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
           "Tms":tms,
           "activoCerrado":activoCerrado,
           "Factura":factura,
           "usoHorarioCarga":usoHrCarga,
           "usoHorarioDesCarga":usoHrDesCarga
                    }
            Object.keys(objH).map(k => objH[k] = objH[k].trim().toLowerCase());
            console.log(JSON.stringify(objH));
          //this.enviarPost(objH);
        }else{
           this.abrirPopUp('error',"Faltan campos por completar");
      }
 }
abrirPopUp(error,msg){
  this.alertPopup(error,msg);
}
  popupErrorInput(id,msg){
   $("#"+id).css({'border-color':'rgba(116, 0, 0, 0.6)',"border-weight":"3px"})
 }
 hidePopupErrorInput(id){
          $("#"+id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
  }
  sobreinput(eve){
    if (document.querySelector(`#ul_${eve.target.id}`)) {
        var ul=document.querySelector(`#ul_${eve.target.id}`);
        ul.style.display="none";
        $("#"+eve.target.id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
    }
  }
clearErrorCreatePopup(){
    var status=[];
  var id=this.listaImputs();
  for (var par in id) {
    if (document.getElementById(id[par])) {
      var valor=document.querySelector(`#${id[par]}`).value;
       valor.trim();
      if (valor=="") {//cuando esta vacio
        var element=document.getElementById(id[par]);
        //element.value=valor.trim();
        //var atributo = element.getAttribute("title");
        this.popupErrorInput(id[par],"");
        status.push(true);
        if (document.querySelector(`#ul_${id[par]}`)) {
            var ul=document.querySelector(`#ul_${id[par]}`);
            ul.style="font-size:16px";
            ul.style="font-weight:bold";
            ul.style.display='block';
            ul.style.color='#B94A48';
        }
      }else{
        //var element=document.getElementById(id[par]);
        //element.value=valor.trim();
         this.hidePopupErrorInput(id[par]);
         if (document.querySelector(`#ul_${id[par]}`)) {
             var ul=document.querySelector(`#ul_${id[par]}`);
             ul.style.display='none';
         }
         status.push(false);
      }
    }else{
      //no existe en dom
    }
  }
return status;
}

}
