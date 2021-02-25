class appint extends modelapp {
  constructor() {
    super();
  }

  setAlerta(objeto){
    this.setObjalerta(objeto);
  }

statusCampoCodIdentificador(element,status){
  var elem=document.querySelector(`#${element}`);
  elem.hidden=status;
}
recargarInputsDefault(){
  this.setCamposValidarInit();
}
vaciarValorCodIndent(elemt){
document.querySelector(`#${elemt}`).value="";
}
filtroPlataforma(eve){
var ele=document.querySelector(`#${eve.target.id}`).value;

   var val=ele.trim().toLowerCase();
  switch (val) {
    case 'fourkites':
      this.statusCampoCodIdentificador("formGroupCodIdent",false);
      var listaValidacion=["codIdentificador"];
      this.setListaValidacion(listaValidacion);
      this.quitarmarcaRequireEnselect();
      break;
      case "":
        this.statusCampoCodIdentificador("formGroupCodIdent",true);
        this.recargarInputsDefault();
        this.vaciarValorCodIndent("codIdentificador");
        break;
    default:
      this.statusCampoCodIdentificador("formGroupCodIdent",true);
      this.recargarInputsDefault();
      this.vaciarValorCodIndent("codIdentificador");
    break;

  }

}
sobreinput(eve){
  if (document.querySelector(`#ul_${eve.target.id}`)) {
      var ul=document.querySelector(`#ul_${eve.target.id}`);
      ul.style.display="none";
      $("#"+eve.target.id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
  }

}
quitarmarcaRequireEnselect(){
  if (document.querySelector('#ul_Plataforma')) {
      var ul=document.querySelector('#ul_Plataforma');
      ul.style.display='none';
      var pla=document.querySelector('#Plataforma');
      pla.style='border-color:#ccc';
    }
}

validarCampos(formp){
   var dataF = new FormData(formp);
   var resp=this.clearErrorCreatePopup();
   if (!resp.includes(true)) {
     var jsonP={
       plataforma:dataF.get("Plataforma"),
       usuario:dataF.get("usuario"),
       password:dataF.get("password"),
       codIndentificador: dataF.get("codIdentificador")
     }
     console.log(JSON.stringify(jsonP));
    Object.keys(jsonP).map(k => jsonP[k] = jsonP[k].trim().toLowerCase());
    console.log(JSON.stringify(jsonP));
    //this.enviarPost(jsonP);
     //  this.alertPopup("success",JSON.stringify(jsonP))
   }else{
   //  this.alertPopup('error',"Faltan campos para completar");
   }
 }
 hidePopupErrorInput(id){
   $("#"+id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
  }
  popupErrorInput(id,msg){
  $("#"+id).css({'border-color':'rgba(116, 0, 0, 0.6)',"border-weight":"3px"})
}
clearErrorCreatePopup(){
var status=[];
var id=this.listaInputs();
for (var par in id) {
  if (document.getElementById(id[par])) {
    var valor=$.trim(document.querySelector(`#${id[par]}`).value);
    if (valor=="") {//cuando esta vacio
      var element=document.getElementById(id[par]);
      var atributo = element.getAttribute("title");
      this.popupErrorInput(id[par],`${atributo}`);
      status.push(true);
      if (document.querySelector(`#ul_${id[par]}`)) {
          var ul=document.querySelector(`#ul_${id[par]}`);
          ul.style="font-size:16px";
          ul.style="font-weight:bold";
          ul.style.display='block';
          ul.style.color='#B94A48';
      }
    }else{
       this.hidePopupErrorInput(id[par]);
       status.push(false);
    }
  }else{
    //no existe en dom
  }
}
return status;
}

}
