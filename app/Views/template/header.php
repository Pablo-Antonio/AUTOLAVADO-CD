<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <title>Auto Lavado Reforma</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/Assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/Assets/js/plugins/sweetalert/sweetalert2.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Bievenido</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="/Logout"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= base_url() ?>/Assets/img/usr.png" alt="User Image" width="50px">
            <div>
                <p class="app-sidebar__user-name"><?=session('nombre')?></p>
                <input type="hidden" id="hddNomLog" value="<?=session('nombre')?>">
                <p class="app-sidebar__user-designation"><?=session('type')?></p>
                <input type="hidden" id="hddIdLog" value="<?=session('idUsr')?>">
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="/Dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Ventas</span><i class="treeview-indicator fa fa-angle-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/Ventas"><i class="icon fa fa-circle-o"></i> Ventas</a></li>
                    <li><a class="treeview-item" href="/Ticket"><i class="icon fa fa-circle-o"></i> Buscar Ticket</a></li>
                </ul>
            </li>

            <li><a class="app-menu__item" href="/Usuarios"><i class="app-menu__icon fa fa fa-users"></i><span class="app-menu__label">Usuarios</span></a></li>
            <li><a class="app-menu__item" href="/Servicios"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Servicios</span></a></li>

            <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i> </a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/CorteCaja"><i class="icon fa fa-circle-o"></i> Corte Caja</a></li>
                    <li><a class="treeview-item" href="/ReporteMensual"><i class="icon fa fa-circle-o"></i> Reporte Mensual</a></li>
                </ul>
            </li>

        </ul>
    </aside>