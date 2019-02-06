<?php session_start();
//-----------------------------------------------------------------
//
// EDITAR REGISTRO, uso del worker para las diferentes clases
//
// INDEX > editar_registro.php > editar_registro.tpl
//
// FECHA LOG :  6 FEBRERO 2019
//
//-----------------------------------------------------------------
error_reporting(E_ALL);
ini_set('display_errors', '1');
$seccionactual = filter_input(INPUT_GET, 'seccion');
$paginaActual = filter_input(INPUT_GET, 'pagina');

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
    //poblaciones
    require (ROOT_DIR.'/clases/poblacion.class.php');
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
    //sectores
    require (ROOT_DIR.'/clases/sector.class.php'); 
    //tipos comercio
    require (ROOT_DIR.'/clases/tipocomercio.class.php'); 
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
    //poblaciones
    require (ROOT_DIR.'/workers/poblacion.worker.php');
    //sectores
    require (ROOT_DIR.'/workers/sector.worker.php');
    //tipos comercio
    require (ROOT_DIR.'/workers/tipocomercio.worker.php');
    //destacados
//    require (ROOT_DIR.'/workers/ofertas.worker.php');
    //anuncios
//    require (ROOT_DIR.'/workers/anuncios.worker.php');
//    //eventos
//    require (ROOT_DIR.'/workers/eventos.worker.php');   
    //comercios
    require (ROOT_DIR.'/workers/comercios.worker.php'); 
//    //noticias
//    require (ROOT_DIR.'/workers/noticias.worker.php'); 
        //documentos
//    require (ROOT_DIR.'/workers/documentos.worker.php'); 
    //patron (siempre el ultimo)
    require (ROOT_DIR.'/workers/patron.worker.php');
    //paginador
    require (ROOT_DIR.'/includes/paginador.php');

$smarty->assign("paginador",$paginador,true); 
$smarty->assign("paginaActual",$paginaActual,true);
$smarty->assign("seccionactual",$seccionactual,true);

$smarty->assign("ROOT_DIR",ROOT_DIR,true);

//=========================================================
// template a usar
//==========================================================
$smarty->display(ROOT_DIR.'/administracion/templates/editar_registro.tpl');


