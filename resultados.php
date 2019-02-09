<?php 
//-----------------------------------------------------------------
//
// EVENTOS 
//
// INDEX > index.php > index.tpl
//
// FECHA LOG :   24 ENERO 2019
//
//-----------------------------------------------------------------
error_reporting(E_ALL);
ini_set('display_errors', '1');
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
    //provincias
    require (ROOT_DIR.'/clases/provincias.class.php');
//WORKERS----------------------------------------------------------  
    //settings
    require (ROOT_DIR.'/workers/settings.worker.php');
    //login
    require (ROOT_DIR.'/workers/login.worker.php');
    //categorias
    require (ROOT_DIR.'/workers/categorias.worker.php');
    //provincias
    require (ROOT_DIR.'/workers/provincias.worker.php');


    
    
$smarty->assign("paginador",$paginador,true); 

//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/templates/resultado.tpl');

?>


