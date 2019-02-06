<?php session_start();
//-----------------------------------------------------------------
//
// ADMINISTRADOR
//
// INDEX > index.php > index.tpl
//
// FECHA LOG :  5 FEBRERO 2019
//
//-----------------------------------------------------------------
error_reporting(E_ALL);
ini_set('display_errors', '1');

$seccionactual = 'comercios'; //determino en que seccion me hallo para mostrar los anuncios 
$paginaActual = 'servicios_comercio'; //determino en que pagina me hallo para mostrar los anuncios
//conexion a bbdd--------------------------------------------------
require_once '../path.php';
require_once ROOT_DIR.'/lib/conexion.php';
//libreria smarty y variables de inicio----------------------------
require ROOT_DIR.'/libs/Smarty.class.php';
require ROOT_DIR.'/lib/smartivariablesinicio.php';
//determina si se ha iniciado la sesion----------------------------
require ROOT_DIR.'/lib/sesion.php';
//CLASES-----------------------------------------------------------
    //settings
    require (ROOT_DIR.'/clases/settings.class.php');
    //login
    require (ROOT_DIR.'/clases/login.class.php');
    //categorias
    require (ROOT_DIR.'/clases/categorias.class.php');
    //usuarios
    require (ROOT_DIR.'/clases/usuario.class.php');
    //provincias
    require (ROOT_DIR.'/clases/provincias.class.php');
    //destacados
    require (ROOT_DIR.'/clases/ofertas.class.php');
    //anuncios
    require (ROOT_DIR.'/clases/anuncios.class.php');
    //eventos
    require (ROOT_DIR.'/clases/eventos.class.php');
    //fotos
    require (ROOT_DIR.'/clases/fotos_consulta_simple.class.php');
    //comercios
    require (ROOT_DIR.'/clases/comercios.class.php');    
    //noticias
    require (ROOT_DIR.'/clases/noticias.class.php'); 
    //documentos
    require (ROOT_DIR.'/clases/documentos.class.php');    
//WORKERS----------------------------------------------------------  
    //settings
    require (ROOT_DIR.'/workers/settings.worker.php');
    //login
    require (ROOT_DIR.'/workers/login.worker.php');
    //usuarios
    require (ROOT_DIR.'/workers/usuarios.worker.php');
    //categorias
    require (ROOT_DIR.'/workers/categorias.worker.php');
    //provincias
    require (ROOT_DIR.'/workers/provincias.worker.php');
    //destacados
//    require (ROOT_DIR.'/workers/ofertas.worker.php');
    //anuncios
//    require (ROOT_DIR.'/workers/anuncios.worker.php');
//    //eventos
//    require (ROOT_DIR.'/workers/eventos.worker.php');   
//    //comercios
//    require (ROOT_DIR.'/workers/comercios.worker.php'); 
//    //noticias
//    require (ROOT_DIR.'/workers/noticias.worker.php'); 
        //documentos
//    require (ROOT_DIR.'/workers/documentos.worker.php'); 
    //patron (siempre el ultimo)
    require (ROOT_DIR.'/workers/patron.worker.php');
 

$smarty->assign("paginador",$paginador,true); 
$smarty->assign("paginaActual",$paginaActual,true);
$smarty->assign("seccionactual",$seccionactual,true);
//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/administracion/templates/servicios_comercio.tpl');


