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

//WORKERS----------------------------------------------------------  
//busquedasugerida
$data = '';
    $conexion = new conexion();//objeto conexion
    $conexion->exec("SET NAMES 'utf8'");

    if(isset($_POST['vdfvd'])){$busqueda =  $_POST['busqueda'];} else {$busqueda ='';}
    $resultado_titulo = "SELECT palabra FROM hc_suge_sugerencias_busqueda WHERE palabra LIKE '%".$busqueda."%' ORDER BY palabra ASC LIMIT 7";
    $resultado_contenido = $conexion->prepare($resultado_titulo);
    $resultado_contenido->execute();
    while($registros = $resultado_contenido->fetch(PDO::FETCH_ASSOC)){
        $data[] = $registros['palabra'];
    }
//echo json_encode($data);
echo '{"items":['.json_encode(array('name' => $data.',')).']}';
//echo '{"name":"Ashok"}]}';


?>


