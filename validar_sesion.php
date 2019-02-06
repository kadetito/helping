<?php session_start();
//-----------------------------------------------------------------
//
// Valida la sesion despues del login
//
// INDEX > validar_sesion.php > validar_sesion.tpl
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
    //documentos
    require (ROOT_DIR.'/clases/validarsesion.class.php');
//WORKERS----------------------------------------------------------  
    //documentos
    require (ROOT_DIR.'/workers/validarsesion.worker.php');


//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/templates/validarsesion.tpl');


