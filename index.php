<?php session_start();
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
require ("lib/sesion.php");
//CLASES-----------------------------------------------------------
    //settings
    require (ROOT_DIR.'/clases/settings.class.php');
    //datosUsuarioLogeado
    require (ROOT_DIR.'/clases/usuario.class.php');
    //login
    require (ROOT_DIR.'/clases/login.class.php');
    //provincias
    require (ROOT_DIR.'/clases/provincias.class.php');

//WORKERS----------------------------------------------------------  
    //settings
    require (ROOT_DIR.'/workers/settings.worker.php');
    //datosUsuario logeado
    require (ROOT_DIR.'/workers/usuarios.worker.php');
    //login
    require (ROOT_DIR.'/workers/login.worker.php');
    //provincias
    require (ROOT_DIR.'/workers/provincias.worker.php');

    
    //si la sesion de usuario esta inicia, me salto el index y voy al home
    //obteniendo antes la provincia que el usuario eligio
    //cuando se dio de alta, que obtengo del worker usuarios
    if(($sesion == 1) && !isset($aliasprovincia)){
         header('Location: '.BASE_URL.'/'.$lengua.'/'.$aliasProvincia.'');

    } else {
        //header('Location: '.BASE_URL.'/'.$lengua.'');
    }


$smarty->assign("paginador",$paginador,true); 
 

//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/templates/index.tpl');
