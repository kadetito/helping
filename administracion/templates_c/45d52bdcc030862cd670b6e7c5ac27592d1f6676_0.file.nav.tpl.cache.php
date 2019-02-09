<?php
/* Smarty version 3.1.33, created on 2019-02-07 01:28:52
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/administracion/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b7bc45c5585_74500145',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '45d52bdcc030862cd670b6e7c5ac27592d1f6676' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/administracion/templates/nav.tpl',
      1 => 1549494299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b7bc45c5585_74500145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15769463905c5b7bc454ad03_29451171';
?>
 <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/logo-helping-city.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Helping City</h2><span>Gestión</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>H</strong><strong class="text-primary">C</strong></a></div>
        </div>
        
        
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
       
            <li><a href="#ComerciosDrop" <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "comercios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="true" class=""<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php } else { ?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="false" <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
 data-toggle="collapse"> <i class="icon-interface-windows"></i>Comercios </a>
              <ul id="ComerciosDrop" class="collapse list-unstyled <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "comercios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
show<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
">
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "lista_comercios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="lista_comercios.php">Comercios</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "lista_categorias") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="lista_categorias.php">Categorias</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "tipos_comercio") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="tipos_comercio.php">Tipos de Comercio</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "sectores_comercio") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="sectores_comercio.php">Sectores</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "servicios_comercio") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="servicios_comercio.php">Servicios</a></li>
              </ul>
            </li>
          <li><a href="#AnunciosDrop" <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "anuncios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="true" class=""<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php } else { ?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="false" <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
 data-toggle="collapse"> <i class="icon-interface-windows"></i>Anunciantes </a>
              <ul id="AnunciosDrop" class="collapse list-unstyled  <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "anuncios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
show<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
">
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "lista_anuncios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="lista_anuncios.php">Anuncios</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "tipos_anuncios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="tipos_anuncios.php">Tipos de anuncios</a></li>
              </ul>
            </li>
            <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "lista_ofertas") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="lista_ofertas.php"> <i class="icon-interface-windows"></i>Ofertas</a></li>
            
            <li><a href="#EventosDrop"  <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "eventos") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="true" class=""<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php } else { ?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="false" <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
  data-toggle="collapse"> <i class="icon-interface-windows"></i>Eventos </a>
              <ul id="EventosDrop" class="collapse list-unstyled  <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "eventos") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
show<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
">
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "lista_eventos") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="lista_eventos.php">Lista de eventos</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "categorias_eventos") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="categorias_eventos.php">Categorias de eventos</a></li>
              </ul>
            </li>
            <li><a href="#NoticiasDrop"  <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "noticias") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="true" class=""<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php } else { ?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
aria-expanded="false" <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
  data-toggle="collapse"> <i class="icon-interface-windows"></i>Actualidad </a>
              <ul id="NoticiasDrop" class="collapse list-unstyled  <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'seccionactual\']->value == "noticias") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
show<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
">
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "lista_noticias") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="lista_noticias.php">Noticias</a></li>
                <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "categorias_noticias") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="categorias_noticias.php">Categorias de noticias</a></li>
              </ul>
            </li>
            <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "comentarios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="comentarios.php"> <i class="icon-interface-windows"></i>Comentarios</a></li>
            <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "solicitudes") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="solicitudes.php"> <i class="icon-interface-windows"></i>Solicitudes</a></li>

            
          
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Settings</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "login") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
><a href="login.php"> <i class="icon-interface-windows"></i>Login page </a></li>
            <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "usuarios") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
> <a href="usuarios.php"> <i class="icon-flask"> </i>Usuarios</a></li>
            <li <?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "configuracion") {?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/<?php }?>/*/%%SmartyNocache:15769463905c5b7bc454ad03_29451171%%*/';?>
> <a href="configuracion.php"> <i class="icon-screen"> </i>Configuracion</a></li>
          </ul>
        </div>
      </div>
    </nav><?php }
}
