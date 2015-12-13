<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>Metlife </title> -->

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/maps/jquery-jvectormap-2.0.1.css') }}" rel="stylesheet"> -->

    <!-- Custom styling plus plugins -->
    <!-- <link href="{{ asset('css/icheck/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('css/floatexamples.css') }}" rel="stylesheet"> -->

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <!-- <a href="index.html" class="site_title"> <span>Metlife</span></a> -->
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{ asset('assets/images/img.jpg') }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Administrador</span>
                            <h2>Edgar Cardoso</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a class="modulo"><i class="fa fa-pencil-square-o"></i> Captura <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{!! route('produccion') !!}">Captura producción</a>
                                        </li>
                                        <li><a href="{!! route('servicios') !!}">Captura de servicios</a>
                                        </li>
                                        <li><a href="index.html">Emision de pólizas</a>
                                        </li>
                                        <li><a href="index.html">Emision de servicios</a>
                                        </li>
                                        <li><a href="index.html">Rechazo de solicitudes</a>
                                        </li>
                                        <li><a href="index.html">Rechazo de servicios</a>
                                        </li>
                                        <li><a href="index.html">Captura recibos de aceptación</a>
                                        </li>
                                        <li><a href="index.html">Captura de acuses de servicio</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="modulo"><i class="fa fa-bars"></i>Reportes de venta <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.html">Informe de ventas por agente</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Informe de servicios por agente</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Informe de devoluciones de solicitudes por agente/auxiliar</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Informes de devoluciones de servicios por agente/auxiliar</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Informe de polizas pendientes de entrega</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="modulo"><i class="fa fa-usd"></i> Indicadores de venta <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="general_elements.html">general</a>
                                        </li>
                                        <li><a href="chartjs.html">Por agente</a>
                                        </li>
                                        <li><a href="chartjs2.html">Por auxiliar</a>
                                        </li>
                                        <li><a href="chartjs2.html">Ventas por centro de trabajo global</a>
                                        </li>
                                        <li><a href="chartjs2.html">Ventas por centro de trabajo por agente y auxiliar</a>
                                        </li>
                                        <li><a href="chartjs2.html">Ventas por retenedor global</a>
                                        </li>
                                        <li><a href="chartjs2.html">Ventas por retenedor por agente y auxiliar</a>
                                        </li>
                                        <li><a href="chartjs2.html">Ventas por municipio global</a>
                                        </li>
                                        <li><a href="chartjs2.html">Ventas por municipio por agente y auxiliar</a>
                                        </li>
                                        <li><a href="chartjs2.html">Devoluciones</a>
                                        </li>
                                        <li><a href="chartjs2.html">Servicios global</a>
                                        </li>
                                        <li><a href="chartjs2.html">Servicios por agente</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="modulo"><i class="fa fa-table"></i> Administración <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables_dynamic.html">Administracion de centros de trabajo</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Administracion de retenedores</a>
                                        </li>
                                        <li><a href="tables.html">Administracion de usuarios</a>
                                        </li>
                                        <li><a href="tables.html">Administracion de agentes</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Administracion de auxiliares</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="modulo"><i class="fa fa-bar-chart-o"></i> Consultador <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables_dynamic.html">Consulta historial de movimientos en ventas y servicios</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Consultas dinámicas usando RFC, num. De póliza y nombre de asegurado</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Detalle de usuarios, agentes, auxiliares, involucrados en el tramite</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="modulo"><i class="fa fa-bar-chart-o"></i> Siniestros <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables_dynamic.html">Registro de siniestros por tipo de trámite</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Registro de beneficiarios</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Registro de cheques</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Informe de solicitud de trámite</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Informes de entrega de cheques</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="e_commerce.html">E-commerce</a>
                                        </li>
                                        <li><a href="projects.html">Projects</a>
                                        </li>
                                        <li><a href="project_detail.html">Project Detail</a>
                                        </li>
                                        <li><a href="contacts.html">Contacts</a>
                                        </li>
                                        <li><a href="profile.html">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="page_404.html">404 Error</a>
                                        </li>
                                        <li><a href="page_500.html">500 Error</a>
                                        </li>
                                        <li><a href="plain_page.html">Plain Page</a>
                                        </li>
                                        <li><a href="login.html">Login Page</a>
                                        </li>
                                        <li><a href="pricing_tables.html">Pricing Tables</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                                </li>
                            </ul>
                        </div> -->

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
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/img.jpg') }}" alt="">Edgar Cardoso
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="inbox.html">See All Alerts</strong>
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
                <div class="row">
                    @yield('content')
                </div>
            </div>

            <!-- /end page content -->

                <!-- footer content -->

                <footer>
                    <div class="">
                        <p class="pull-right">Metlife administration system by <a>JEANBO</a>.
                            <!-- <span class="lead"> <i class="fa fa-book"></i> Metlife!</span> -->
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>



    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('scripts')

    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>
