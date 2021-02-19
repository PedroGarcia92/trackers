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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Select2 -->
     <link rel="stylesheet" href="../vendors/select2/dist/css/select2.min.css">
     <!-- <link rel="stylesheet" href="../vendors/select2/dist/-bootstrap4-theme/select2-bootstrap4.min.css"> -->
     <!-- datetimepicker -->
     <!-- bootstrap-datetimepicker -->
     <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
     <!-- datetimepicker -->

    <!-- Custom Theme Style -->
      <link href="../build/css/custom.css" rel="stylesheet">
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
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
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                <img src="../build/images/logo.png"></img>
              </a>
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
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" id="FormPlanner">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Estimacion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="Estimacion" required="required" class="form-control"
                               placeholder="" name="Estimacion">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Folio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="Folio" name="Folio" required="required" class="form-control " placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cliente</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control select2" style="width: 100%;" name="Cliente" id="Cliente">
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
                            </div>
                            <!-- Select2 -->
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Proveedor</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control select2" style="width: 100%;" name="Proveedor" id="Proveedor">
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
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tipo de unidad</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control select2" style="width: 100%;" name="TipoDeUnidad" id="TipoDeUnidad" >
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
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tarifa+IVA<b> $</b></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="TarifaIva" class="form-control col" type="number" name="TarifaIva" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Maniobras<b> $</b></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="Maniobras" class="form-control col" type="number" name="Maniobras" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Estadía<b> $</b></label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="Estadia" class="form-control col" type="number" name="Estadia" placeholder="">
                            </div>
                          </div>
                      </div>
                      <div id="step-2">
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nombre de operador</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="NombreOperador" class="form-control col" type="text" name="NombreOperador" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Celular de operador</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="CelularOperador" class="form-control col" type="text" name="CelularOperador"
                           data-inputmask="'mask' : '(999) 999-9999'">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No economico de tractor</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="Tractor" class="form-control col" type="text" name="Tractor" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Placas de tractor</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="PlacasTractor" class="form-control col" type="text" name="PlacasTractor" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No de remolque 1</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="NumRemolque1" class="form-control col" type="text" name="NumRemolque1" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Placas de remolque 1</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="PlacasRemolque1" class="form-control col" type="text" name="PlacasRemolque1" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No de remolque 2</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="NumRemolque2" class="form-control col" type="text" name="NumRemolque2" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Placas de remolque 2</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="PlacasRemolque2" class="form-control col" type="text" name="PlacasRemolque2" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div id="step-3">
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Domicilio de carga</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="DomicilioDeCarga" class="form-control col" type="text" name="DomicilioDeCarga" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cita de carga</label>
                          <div class="col-md-6 col-sm-6 ">
                            <!-- <input id="CitaDeCarga" class="form-control col" type="text" name="CitaDeCarga" placeholder=""> -->
                            <div class='input-group date' id='myDatepicker1' >
                                 <input type='text' class="form-control col" id="CitaDeCarga" name="CitaDeCarga"/>
                                 <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div id="step-4">
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Domicilio de descarga</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="DomicilioDescarga" class="form-control col" type="text" name="CelularOperador" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cita de descarga</label>
                          <div class="col-md-6 col-sm-6 ">
                            <!-- <input id="CitaDescarga" class="form-control col" type="text" name="CitaDescarga" placeholder=""> -->
                            <div class='input-group date' id='myDatepicker2' >
                                 <input type='text' class="form-control col" id="CitaDescarga" name="CitaDescarga"/>
                                 <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                             </div>
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
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>




    <script type="text/javascript">
       // document.getElementById("iraMenu").addEventListener("click", iraMenu);
        //var formVal=document.getElementById("registrar").addEventListener("click",validarCampos(event));
        //setTimeout(function(){Obcon.pasarObjetoAlerta(toastr)}, 1000);
        $(function() {
              Obcon.pasarObjetoAlerta(toastr);
              Obcon.setTimeZone();
              $('.select2').select2()
              $('#myDatepicker1').datetimepicker();
              $('#myDatepicker2').datetimepicker();


          });
        /*  $(function() {
              alert("hello")
          var formLog=document.getElementById('FormPlanner');
          formLog.addEventListener('submit',function(e){
           e.preventDefault();
            validarCampos1(formLog)
          })  alert("hello")

        });*/
    </script>
  </body>
</html>
