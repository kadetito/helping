<?php session_start();
//-----------------------------------------------------------------
//
// LOGOUT 
//
// INDEX > logout.php > logout.tpl
//
// FECHA LOG :   24 ENERO 2019
//
//-----------------------------------------------------------------
error_reporting(E_ALL);
ini_set('display_errors', '1');

$paginaActual = 'logout'; //determino en que pagina me hallo para mostrar los anuncios 

//conexion a bbdd--------------------------------------------------
require_once 'path.php';
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
//WORKERS----------------------------------------------------------  
    //settings
    require (ROOT_DIR.'/workers/settings.worker.php');
    //login
    require (ROOT_DIR.'/workers/login.worker.php');
    //patron (siempre el ultimo)
    require (ROOT_DIR.'/workers/patron.worker.php');
 


$smarty->assign("paginaActual",$paginaActual,true);
if(isset($_SESSION["uid"])){
    session_destroy();
    header( "Refresh:4; url=".BASE_URL."/es", true, 303);
}
//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/templates/logout.tpl');
