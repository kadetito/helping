<?php session_start();
//-----------------------------------------------------------------
//
// POBLACIONES 
//
// 
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
    //usuarios
    require (ROOT_DIR.'/clases/usuario.class.php');
    //categorias
    require (ROOT_DIR.'/clases/categorias.class.php');
    //poblacion
    require (ROOT_DIR.'/clases/poblacion.class.php');
    
//WORKERS----------------------------------------------------------  
    //settings
    require (ROOT_DIR.'/workers/settings.worker.php');
    //login
    require (ROOT_DIR.'/workers/login.worker.php');
    //usuarios
    require (ROOT_DIR.'/workers/usuarios.worker.php');
    //categorias
    require (ROOT_DIR.'/workers/categorias.worker.php');
    //poblaciones
    require (ROOT_DIR.'/workers/poblacion.worker.php');//recibe los parametros provincia y categoria en cada envio
    //patron (siempre el ultimo)
    require (ROOT_DIR.'/workers/patron.worker.php');
    


//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/templates/poblaciones.tpl');

