<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Bootstrap original tem -->

<!--     <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 -->


    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Select2 -->
     <link rel="stylesheet" href="../vendors/select2/dist/css/select2.min.css">
     <!-- <link rel="stylesheet" href="../vendors/select2/dist/-bootstrap4-theme/select2-bootstrap4.min.css"> -->
     <!-- datetimepicker -->
     <!-- bootstrap-datetimepicker -->
     <!-- <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet"> -->
     <!-- datetimepicker -->
     <!--libreria datepicker-->
     <!-- <link href="../datetimepicker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
     <link href="../datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

     <!--libreria datepicker-->
    <!-- Custom Theme Style -->
      <!-- <link href="../build/css/custom.css" rel="stylesheet"> -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- toastr.css agregado -->
    <link href="../build/toastrBuild/toastr.css" rel="stylesheet" type="text/css"/>
    <!-- uii js -->
    <script src="js/odvctrldb.class.js?<?php echo time();?>"></script>
    <script src="js/odvctrl.class.js?<?php echo time();?>"></script>
    <script type="text/javascript">
    const Obcon= new odvctrl;
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
<!--           left_col menu_fixed
 -->
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                <img class="logoCustom"></img>
<!--                 src="../build/images/logo.png"
 -->              </a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>

                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form Wizards <small>Sessions</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                         aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <!--
                        //COMENTADO
                        <a class="close-link"><i class="fa fa-close"></i></a>
                       -->
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <!-- <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p> -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Datos Generales</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Datos de unidad</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Paso 3<br />
                                              <small>Carga</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Paso 4<br />
                                              <small>Descarga</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              Paso 5<br />
                                              <small>Status</small>
                                          </span>
                          </a>
                        </li>

                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" id="FormPlanner">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Estimacion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input onkeyup="Obcon.sobreinput(event);" type="text" id="Estimacion" required="required" class="form-control"
                               placeholder="" name="Estimacion">
                               <p style="display:none;"id="ul_Estimacion">
                                   Se requiere estimacion
                               </p>

                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Folio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input onkeyup="Obcon.sobreinput(event);" type="text" id="Folio" name="Folio" required="required"
                              class="form-control " placeholder="">
                              <p style="display:none;"id="ul_Folio">
                                  Se requiere folio</p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cliente</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select onchange="Obcon.sobreinput(event)" class="form-control select2" style="width: 100%;" name="Cliente" id="Cliente">
                                <?php
                                for ($c=1; $c <= 5 ; $c++) {
                                  if ($c==1) {
                                    $sel="selected";
                                    $data='';
                                  }else{
                                    $sel="";
                                    $data="Cliente ".$c;
                                  }
                                    echo "<option ".$sel." value='".$data."'>".$data."</option>";
                                }
                                 ?>
                              </select>
                              <p style="display:none;"id="ul_Cliente">
                                  Se requiere cliente</p>
                            </div>
                            <!-- Select2 -->
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Proveedor</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select onchange="Obcon.sobreinput(event)" class="form-control select2" style="width: 100%;" name="Proveedor" id="Proveedor">
                                <?php
                                for ($p=1; $p <= 5 ; $p++) {
                                  if ($p==1) {
                                    $selp="selected";
                                    $datap='';
                                  }else{
                                    $selp="";
                                    $datap="Provedor ".$p;
                                  }
                                    echo "<option ".$selp." value='".$datap."'>".$datap."</option>";
                                }
                                 ?>
                              </select>
                              <p style="display:none;"id="ul_Proveedor">
                                  Se requiere proveedor</p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tipo de unidad</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select onchange="Obcon.sobreinput(event)" class="form-control select2" style="width: 100%;" name="TipoDeUnidad"
                               id="TipoDeUnidad" >
                                <option selected value=""></option>
                                <option value="pick-up">pick-up</option>
                                <option value="camioneta 0.5ton">camioneta 0.5ton</option>
                                <option value="Thorton">Thorton</option>
                                <option value="Contendero 20 pies">Contendero 20 pies</option>
                                <option value="Contenedor 40 pies">Contenedor 40 pies</option>
                                <option value="Caja Seca 20 pies">Caja Seca 20 pies</option>
                                <option value="Caja Seca 40 pies">Caja Seca 40 pies</option>
                                <option value="Caja Seca 52 pies">Caja Seca 52 pies</option>
                                <option value="Caja Regrigerada 10 pies">Caja Regrigerada 10 pies</option>
                                <option value="Caja Regrigerada 20 pies">Caja Regrigerada 20 pies</option>
                                <option value="Caja Regrigerada 40 pies">Caja Regrigerada 40 pies</option>
                                <option value="Caja Regrigerada 52 pies">Caja Regrigerada 52 pies</option>
                              </select>
                              <p style="display:none;"id="ul_TipoDeUnidad">
                                  Se requiere tipo de unidad</p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tarifa+IVA<b> $</b></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input step="any" onkeyup="Obcon.sobreinput(event);" id="TarifaIva" class="form-control col" type="number" name="TarifaIva"
                               placeholder="">
                               <p style="display:none;"id="ul_TarifaIva">
                                   Se requiere tarifa</p>

                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Maniobras<b> $</b></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input step="any" onkeyup="Obcon.sobreinput(event);" id="Maniobras" class="form-control col" type="number"
                              name="Maniobras" placeholder="">
                              <p style="display:none;"id="ul_Maniobras">
                                  Se requiere maniobras</p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Estadía<b> $</b></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input step="any" onkeyup="Obcon.sobreinput(event);" id="Estadia" class="form-control col" type="number"
                               name="Estadia" placeholder="">
                               <p style="display:none;"id="ul_Estadia">
                                   Se requiere estadía</p>
                            </div>
                          </div>
                      </div>
                      <div id="step-2">
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nombre de operador</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="NombreOperador" class="form-control col" type="text"
                            name="NombreOperador" placeholder="">
                            <p style="display:none;"id="ul_NombreOperador">
                                Se requiere nombre de operador</p>

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Celular de operador</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="CelularOperador" class="form-control col"
                             type="text" name="CelularOperador"
                           data-inputmask="'mask' : '(999) 999-9999'">
                           <p style="display:none;"id="ul_CelularOperador">
                               Se requiere celular de operador</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">
                            No economico de tractor</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="Tractor" class="form-control col" type="text" name="Tractor"
                            placeholder="">
                            <p style="display:none;"id="ul_Tractor">
                                Se requiere numero economico de tractor</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Placas de tractor</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="PlacasTractor" class="form-control col"
                            type="text" name="PlacasTractor" placeholder="">
                            <p style="display:none;"id="ul_PlacasTractor">
                                Se requiere placas del tractor</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No de remolque 1</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="NumRemolque1" class="form-control col" type="text" name="NumRemolque1"
                             placeholder="">
                             <p style="display:none;"id="ul_NumRemolque1">
                                 Se requiere remolque 1</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Placas de remolque 1</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="PlacasRemolque1" class="form-control col" type="text"
                            name="PlacasRemolque1" placeholder="">
                            <p style="display:none;"id="ul_PlacasRemolque1">
                                Se requiere placas del remolque 1</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No de remolque 2</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="NumRemolque2" class="form-control col" type="text" name="NumRemolque2"
                            placeholder="">
                            <p style="display:none;"id="ul_NumRemolque2">
                                Se requiere remolque 2</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Placas de remolque 2</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="PlacasRemolque2" class="form-control col" type="text"
                             name="PlacasRemolque2" placeholder="">
                             <p style="display:none;"id="ul_PlacasRemolque2">
                                 Se requiere placas del remolque 2</p>

                          </div>
                        </div>
                      </div>
                      <div id="step-3">
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Domicilio de carga</label>
                          <div class="col-md-6 col-sm-6">
                            <input onkeyup="Obcon.sobreinput(event);" id="DomicilioDeCarga" class="form-control col" type="text"
                            name="DomicilioDeCarga" placeholder="">
                            <p style="display:none;"id="ul_DomicilioDeCarga">
                                Se requiere domicilio de carga</p>

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cita de carga</label>
                          <div class="col-md-6 col-sm-6">                           
                             <div class="input-group date form_datetimeCitaDecarga"  data-date="" data-date-format="mm/dd/yyyy  h:ii P" data-link-field="dtp_input1" style="width: 50%;">
                             <input onchange="Obcon.sobreinput(event)" class="form-control" size="8" type="text" id="CitaDeCarga" name="CitaDeCarga" readonly>
                             <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                             <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                            
                           </div>
                           <p style="display:none;"id="ul_CitaDeCarga">
                                Se requiere cita de carga</p>
                          </div>

                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">uso horario Carga</label>
                          <div class="col-md-6 col-sm-6 ">
                          <select onchange="Obcon.sobreinput(event)" class="form-control select2"
                          style="width:50%;" name="usoHorarioCarga" id="usoHorarioCarga">
                            <option selected value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>                        
                            <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
                          	<option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
                          	<option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
                          	<option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
                          	<option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                          	<option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
                          	<option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
                          	<option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                          	<option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                          	<option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
                          	<option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                          	<option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                          	<option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
                          	<option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                          	<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                          	<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
                          	<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                          	<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
                          	<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
                          	<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
                          	<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
                          	<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
                          	<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                          	<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
                          	<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
                          	<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
                          	<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
                          	<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
                          	<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                          	<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                          	<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                          	<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                          	<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                          	<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                          	<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
                          	<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
                          	<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                          	<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
                          	<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
                          	<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
                          	<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                          	<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
                          	<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
                          	<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
                          	<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                          	<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                          	<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
                          	<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
                          	<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
                          	<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                          	<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
                          	<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
                          	<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
                          	<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
                          	<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                          	<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                          	<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                          	<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
                          	<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                          	<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
                          	<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                          	<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                          	<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
                          	<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                          	<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                          	<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                          	<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
                          	<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
                          	<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                          	<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
                          	<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
                          	<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
                          	<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
                          	<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
                          	<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                          	<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
                          	<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
                          	<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
                          	<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                          	<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
                          	<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                          	<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
                          </select>

                          <p style="display:none;"id="ul_usoHorarioCarga">
                              Se requiere uso horario de carga</p>
                        </div>
                      </div>





                      </div>
                      <div id="step-4" style="height:290px;">
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Domicilio de descarga</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input onkeyup="Obcon.sobreinput(event);" id="DomicilioDescarga" class="form-control col" type="text"
                            name="CelularOperador" placeholder="">
                            <p style="display:none;"id="ul_DomicilioDescarga">
                                Se requiere domicilio de descarga</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cita de descarga</label>
                          <div class="col-md-6 col-sm-6 ">
                          <div class="input-group date form_datetimeCitaDescarga" data-date="" data-date-format="mm/dd/yyyy  h:ii P" data-link-field="dtp_input1" style="width: 50%;">
                          <input onchange="Obcon.sobreinput(event);" class="form-control" size="20"
                           type="text" id="CitaDescarga" name="CitaDescarga" readonly>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                          <span class="input-group-addon"><span class="fa fa-calendar">
                          </span></span>
                          </div>
                           <p  style="display:none;"id="ul_CitaDescarga">
                                Se requiere cita de descarga</p>
                          </div>

                        </div>                      
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">uso horario dercarga</label>
                          <div class="col-md-6 col-sm-6 ">
                          <select onchange="Obcon.sobreinput(event)" class="form-control select2"
                          style="width:50%;" name="usoHorarioDesCarga" id="usoHorarioDesCarga">
                            <option selected value="">&nbsp;&nbsp;&nbsp;&nbsp;</option>                  
                            <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
                            <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
                            <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
                            <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
                            <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                            <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
                            <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
                            <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                            <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                            <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
                            <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                            <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                            <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
                            <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                            <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                            <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
                            <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                            <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
                            <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
                            <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
                            <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
                            <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
                            <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                            <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
                            <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
                            <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
                            <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
                            <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
                            <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                            <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                            <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                            <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                            <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                            <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                            <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
                            <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
                            <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                            <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
                            <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
                            <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
                            <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                            <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
                            <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
                            <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
                            <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                            <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                            <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
                            <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
                            <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
                            <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                            <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
                            <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
                            <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
                            <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
                            <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                            <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                            <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                            <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
                            <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                            <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
                            <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                            <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                            <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
                            <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                            <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                            <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                            <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
                            <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
                            <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                            <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
                            <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
                            <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
                            <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
                            <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
                            <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                            <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
                            <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
                            <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
                            <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                            <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
                            <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                            <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
                          </select>

                          <p style="display:none;"id="ul_usoHorarioDesCarga">
                              Se requiere uso horario de descarga</p>
                        </div>
                        </div>



                      </div>
                      <div id="step-5" style="height:230px;">
                           <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">
                                  Status
                                  </label>
                                <div class="col-md-6 col-sm-6">
                                <div class="item form-group">
<!--                                 <div class="col-md-6 col-sm-6 ">
 -->                                <div class="btn-group" data-toggle="buttons">
                                    <button class="btn btn-primary" data-toggle-class="btn-prinary" data-toggle-passive-class="btn-default" type="radio"  name="acbtn" id="idActivo" onclick="Obcon.interactActivoCerrado('Activo')">&nbsp;Activo&nbsp;</button>
                                <button class="btn btn-secondary" data-toggle-class="btn-secondary" data-toggle-passive-class="btn-default" type="radio" name="acbtn" id="idCerrado" class="join-btn" onclick="Obcon.interactActivoCerrado('Cerrado')">Cerrado</button>
                                </div>
<!--                                 </div>

 -->                                <input type="hidden" name="activoCerrado" id="activoCerrado">
                                </div> 
                                  <p  style="display:none;"id="ul_activoCerrado">
                                  No has elegido activo o cerrado</p>
                                  
                                   </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">
                                  Facturado
                                  </label>
                                <div class="col-md-6 col-sm-6">
                                <div class="item form-group">
<!--                                 <div class="col-md-6 col-sm-6 ">
 -->                                  
                                <div class="btn-group" data-toggle="buttons">
                                    <button class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" type="radio"  name="sif" id="rdSiFa" onclick="Obcon.interactFactura('Si');">Si</button>
                                <button class="btn btn-secondary" data-toggle-class="btn-secondary" data-toggle-passive-class="btn-default" type="radio" name="sif" id="rdNoFa" class="join-btn" onclick="Obcon.interactFactura('No');">No</button>
                                </div>
<!--                                 </div>
 -->                                 <input type="hidden" name="siFacturado" id="siFacturado">
                                </div> 
                                  <p  style="display:none;"id="ul_siFacturado">
                                    No has elegido factura</p>                                  
                                   </div>
                            </div>
               
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Reporte a TMS</label>
                        <div class="col-md-6 col-sm-6 ">
                        <select onchange="Obcon.sobreinput(event)" class="form-control select2" style="width:50%;" name="ReporteTms" id="ReporteTms">
                          <?php
                          for ($tms=1; $tms <= 5 ; $tms++) {
                            if ($tms==1) {
                              $seltms="selected";
                              $datatms='';
                            }else{
                              $seltms="";
                              $datatms="reporte a tms ".$tms;
                            }
                              echo "<option ".$seltms." value='".$datatms."'>".$datatms."</option>";
                          }
                           ?>
                        </select>

                        <p style="display:none;"id="ul_ReporteTms">
                            Se requiere reporte TMS</p>
                      </div>
                    </div>
                      </div>
                    </div>
                  <!--  <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-12">
                        <button class="btn btn-success pull-right" type="button"onclick="validarCampos()" id="registrar"
                         name="registrar" >Registrar</button>
                        </div>
                      </div>
                    </div>-->

                    </form>
                    <!-- End SmartWizard Content onclick="validarCampos()"-->
                    <!-- End SmartWizard Content -->
                  </div>
                  <!-- puede ir algo-->


                   <!-- puede ir algo-->
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js?<?php echo time();?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- jquery.inputmask agregado-->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- toastr agregado-->
    <script src="../build/toastrJs/toastr.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>



    <!-- <script type="text/javascript" src="../datetimepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script> -->
    <script type="text/javascript" src="../datetimepicker/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>


    <!-- bootstrap-daterangepicker -->
    <!-- <script src="../vendors/moment/min/moment.min.js"></script> -->
    <!-- <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
    <!-- bootstrap-datetimepicker -->
    <!-- <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->




    <script type="text/javascript">

       // document.getElementById("iraMenu").addEventListener("click", iraMenu);
        //var formVal=document.getElementById("registrar").addEventListener("click",validarCampos(event));
        //setTimeout(function(){Obcon.pasarObjetoAlerta(toastr)}, 1000);


        $(function() {
              Obcon.pasarObjetoAlerta(toastr);
              //Obcon.colorBtnActivoCerradoInit();
              //Obcon.colorBtnFacturaInit();
              //setTimeout(function(){Obcon.colorBtnActivoCerrado()}, 2000);
              $('.select2').select2()
              $('.form_datetimeCitaDescarga').datetimepicker({
                  //language:  'fr',
                  weekStart: 1,
                  todayBtn:  1,
          		autoclose: 1,
          		todayHighlight: 1,
          		startView: 2,
          		forceParse: 0,
                  showMeridian: 1
              });


              $('.form_datetimeCitaDecarga').datetimepicker({
                  //language:  'fr',
                  weekStart: 1,
                  todayBtn:  1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              forceParse: 0,
                  showMeridian: 1
              });






          });

    </script>
  </body>
</html>
