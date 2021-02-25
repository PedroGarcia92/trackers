class appint extends modelapp {

  constructor() {
    super();
  }
  parametrosEztr(usuario,password){
    this.usuarioEz=usuario;
    this.passwordEz=password;
  }
  setAlerta(alerta){
    this.setObjalerta(alerta)
  }
  validarCampos(formp){
    var dataF = new FormData(formp);
    var resp=this.clearErrorCreatePopup();
    if (!resp.includes(true)) {
        var jsonP={
      proveedor:dataF.get('Proveedor'),
      plataforma:dataF.get('Plataforma'),
      usuario:dataF.get('usuario'),
      password:dataF.get('password'),
      idCliente_utrax:dataF.get('idCliente'),
      clienteId_eztrack:dataF.get('clienteId_eztrack'),
      secretId_eztrack:dataF.get('secretId_eztrack'),
      liga:dataF.get('liga'),
      tipoCuenta:dataF.get('contOp')
    };
    Object.keys(jsonP).map(k => jsonP[k] = jsonP[k].trim().toLowerCase());
    console.log(JSON.stringify(jsonP));
        //this.enviarPost(jsonP);
      //  this.alertPopup("success",JSON.stringify(jsonP))
    }else{
    //  this.alertPopup('error',"Faltan campos para completar");
    }
  }
  popupErrorInput(id,msg){
  // this.alertPopup('error',msg);
   $("#"+id).css({'border-color':'rgba(116, 0, 0, 0.6)',"border-weight":"3px"})
 }
 hidePopupErrorInput(id){
          $("#"+id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
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
  utrax(param){
    var colUtrax= document.getElementById('colClienteUtrax');
    colUtrax.style.display=`${param}`;
      setTimeout(function(){
        if (document.querySelector(`#formGroupIdCliente`).hidden==false) {
            document.querySelector(`#idCliente`).focus();
        }else{
          document.querySelector(`#usuario`).focus();
        }
      },700);
  }
  limpiarCamposUtrax(usuario,password,idCliente){
    if (document.querySelector(`#${usuario}`)) {
        document.querySelector(`#${usuario}`).value="";
    }
    if (document.querySelector(`#${password}`)) {
        document.querySelector(`#${password}`).value="";
    }
    if (document.querySelector(`#${idCliente}`)) {
        document.querySelector(`#${idCliente}`).value="";
    }
  }
  eztrack(param){
    var ezTr= document.getElementById('colClienteeztrack');
    ezTr.style.display=`${param}`;
    if (param=='block') {
      setTimeout(function(){
        document.querySelector(`#clienteId_eztrack`).focus();
      },700);
    }else{
    }
  }
  limpiarCamposEztrack(clientId,secretId){
    if (document.querySelector(`#${clientId}`)) {
        document.querySelector(`#${clientId}`).value="";
    }
    if (document.querySelector(`#${secretId}`)) {
        document.querySelector(`#${secretId}`).value="";
    }
  }
 valorOpcioncuentas(valor) {
   var opCuentas= document.querySelector('#contOp');
   opCuentas.value=valor;
}
sobreinput(eve){
  if (document.querySelector(`#ul_${eve.target.id}`)) {
      var ul=document.querySelector(`#ul_${eve.target.id}`);
      ul.style.display="none";
      $("#"+eve.target.id).css({'border-color':'rgba(92, 106, 124, 0.3)'})
  }

}
formGroupIdClienteVisibilidad(visibilidad){
  if (document.querySelector('#formGroupIdCliente')) {
      var ob= document.querySelector('#formGroupIdCliente');
      ob.hidden=visibilidad;
  }
}
setShadowEspejoLiga(element,style){
  if (document.querySelector(`#${element}`)) {
    var elem=document.querySelector(`#${element}`);
    elem.style=`${style}`;
  }
}
setValorCont(valor){
    var ob= document.querySelector('#contOp');
    ob.value=valor;
    switch (valor) {
      case 'Espejo':
        this.setShadowEspejoLiga("rdbcuentaEspejo",
        "box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5");//color gris
        this.setShadowEspejoLiga("rdbliga","");
          var liValidacionOtros=["usuario","password","contOp"];
           this.usarCampoLiga('none');
           this.limpiarCampoLiga("liga");
           this.modificarListaValidacionOtros(liValidacionOtros);
           this.quitarmarcaRequireRadios();
           this.formGroupIdClienteVisibilidad(true);
           this.utrax('block');//se abre usuario y password
        break;
        case 'Liga':
         this.setShadowEspejoLiga("rdbcuentaEspejo","");//color gris
         this.setShadowEspejoLiga("rdbliga","box-shadow: 0 0 0 0.2rem rgba(223, 125, 100,0.5)");
          var liValidacionOtros=["contOp","liga"];
          this.usarCampoLiga('block');
          this.limpiarCamposUtrax("usuario","password","idCliente");
          this.modificarListaValidacionOtros(liValidacionOtros);
          this.quitarmarcaRequireRadios();
          this.utrax('none');//se abre usuario
          break;
      default:
      break;
    }
}
quitarmarcaRequireRadios(){
  if (document.querySelector('#ul_contOp')) {
      var ul=document.querySelector('#ul_contOp');
      ul.style.display='none';
    }
}

limpiarCampoLiga(liga){
  if (document.getElementById(liga)) {
      document.getElementById(liga).value="";
  }
}

limpiarCamposEspejo(usuario,password,idCliente){
  if (document.querySelector(`#${usuario}`)) {
      document.querySelector(`#${usuario}`).value="";
  }
  if (document.querySelector(`#${password}`)) {
      document.querySelector(`#${password}`).value="";
  }
  if (document.querySelector(`#${idCliente}`)) {
      document.querySelector(`#${idCliente}`).value="";
  }
}
campoIdClienteMostrarOcultar(prop){
  var ob= document.querySelector('#formGroupIdCliente');
  ob.style.display=`${prop}`;
}
usarCampoLiga(param){
  var colUtrax= document.getElementById('colLiga');
  colUtrax.style.display=`${param}`;
  document.querySelector(`#liga`).focus();

}
quitarmarcaRequireEnselect(){
  if (document.querySelector('#ul_Plataforma')) {
      var ul=document.querySelector('#ul_Plataforma');
      ul.style.display='none';
      var pla=document.querySelector('#Plataforma');
      pla.style='border-color:#ccc';
    }
}
funcionesUtrax(){
    //utrax
    this.formGroupIdClienteVisibilidad(false);
    this.utrax('block');
    this.limpiarCamposUtrax("usuario","password","idCliente");
    this.quitarmarcaRequireEnselect();//quitar marca required
   this.valorOpcioncuentas("Espejo");
    // eztrack;
    this.eztrack('none');
    this.limpiarCamposEztrack("clienteId_eztrack","secretId_eztrack");
    //campo liga
    this.usarCampoLiga('none');
    this.limpiarCampoLiga("liga");
    //no utrax y no eztrack
    //oculta los radio button de cuenta espejo y liga
    this.noEztrackUtrax('none');
}
funcionesEztrack(){
  //utrax
  this.utrax('none');
  this.limpiarCamposUtrax("usuario","password","idCliente");
  //campo liga
  this.usarCampoLiga('none');
  this.limpiarCampoLiga("liga");
  //no utrax y no eztrack
  this.noEztrackUtrax('none');//cierra radio buttons
  this.valorOpcioncuentas("");
  this.quitarmarcaRequireEnselect();//quitar marca required.
}
defaultSwitchPlataforma(){
    this.formGroupIdClienteVisibilidad(false);
    this.utrax('none');
    this.limpiarCamposUtrax("usuario","password","idCliente");
    this.usarCampoLiga('none');
    this.limpiarCampoLiga("liga");
    this.noEztrackUtrax('block');//muestra los radio buttons
    this.eztrack('none');
    this.limpiarCamposEztrack("clienteId_eztrack","secretId_eztrack");
    this.quitarmarcaRequireEnselect();//quitar marca required
}
plataformaVacio(){
  this.noEztrackUtrax('none');//esconde los raio butosn
  this.formGroupIdClienteVisibilidad(false);//mestra campo id cliente
  this.utrax('none');//utrax esconde
  this.limpiarCamposUtrax("usuario","password","idCliente");
  this.usarCampoLiga('none');//campo liga hide
  this.eztrack('none');//eztrack hide
  this.limpiarCamposEztrack("clienteId_eztrack","secretId_eztrack");//eztrack
  this.valorOpcioncuentas("");
}
setDefaultShadowEspejoLiga(p){
  if (document.querySelector(`#${p.espejo}`)) {
    var elem=document.querySelector(`#${p.espejo}`);
    elem.style="";
  }
  if (document.querySelector(`#${p.liga}`)) {
    var elem=document.querySelector(`#${p.liga}`);
    elem.style="";
  }
}
  filtroPlataforma(eve){
    var val=document.querySelector(`#${eve.target.id}`);
    switch (val.value.toLowerCase(val.value.trim())) {
      case 'utrax':
          ////utrax
          this.funcionesUtrax();
          var liValidacion=["idCliente","usuario","password","contOp"];
          this.modificarListaValidacionUtrax(liValidacion);
          this.setDefaultShadowEspejoLiga({espejo:"rdbcuentaEspejo",
          liga:"rdbliga"});
        break;
        case 'eztrack':
        //eztrack
        this.funcionesEztrack();
        var liValidacionEz=["clienteId_eztrack","secretId_eztrack"];
        this.eztrack('block');
        this.modificarListaValidacionEztrack(liValidacionEz);
        this.setDefaultShadowEspejoLiga({espejo:"rdbcuentaEspejo",
        liga:"rdbliga"});
          break;
        case "":
          var liValidacionOtros=[];
          this.modificarListaValidacionOtros(liValidacionOtros);
          this.plataformaVacio();
          this.setDefaultShadowEspejoLiga({espejo:"rdbcuentaEspejo",
          liga:"rdbliga"});
        break;
      default:
      var liValidacionOtros=["contOp"];
      this.valorOpcioncuentas("");
      this.modificarListaValidacionOtros(liValidacionOtros);
      this.defaultSwitchPlataforma();
      this.setDefaultShadowEspejoLiga({espejo:"rdbcuentaEspejo",
      liga:"rdbliga"});
      break;
    }

  }
//mustra oculta raio buton
  noEztrackUtrax(param){
    var cont= document.getElementById('colRadioBtns');
    cont.style.display=`${param}`;
  }
}
