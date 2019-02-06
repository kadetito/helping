<?php session_start();
//-----------------------------------------------------------------
//
// CONTADOR DE CLICKS
// recibe datos AJAX desde home.php al clickar en cada banner
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

//Assign the page referene posted from page to a variable
$id = $_POST['id'];

$newlike = '';
$pipaddress = getenv('HTTP_X_FORWARDED_FOR');
$_SESSION['ip']= $pipaddress;
$myip = $_SESSION['ip'];
$fechad = date("Y-m-d");
$conexion = new conexion();//objeto conexion
$stmt = $conexion->prepare("SELECT * from hc_cont_contador_clicks WHERE id_anun = $id ");
$stmt->execute();
$users = $stmt->fetchAll();

foreach ($users as $key)
{
      $oldlike = $key['click'];
      $newlike =  1 + $oldlike ;
      $laIp = $key['ip'];
}
//compruebo la ip 
if($laIp==$pipaddress){echo '<script>console.log("ip ya esta")</script>';} else {
    //echo $newlike;
    $consulta = $conexion->prepare('INSERT hc_cont_contador_clicks (click,id_anun,ip,fecha) VALUES('.$newlike.','.$id.',"'.$myip.'","'.$fechad.'") ' );
    $consulta->execute();              
}
$conexion = null; 



