<?php

//---------------------------------------------------
//
// POBLACIONES
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  
//--------------------------------------------------
//conexion a bbdd--------------------------------------------------

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../path.php';
require_once ROOT_DIR.'/lib/conexion.php';
include ROOT_DIR.'/clases/poblacion.class.php';

$html = '';

//OBTENEMOS RESULTADOS
//-----------------------------------------------------------------------------------------

    
        $idProvincia = $_REQUEST['id_prov'];
        $resultadoSP = Poblaciones::consultaporId($idProvincia);
        $bucleSP = $resultadoSP[0];
        $cont_registroSP=0;
        $contador = count($bucleSP);
        foreach($bucleSP as $itemSP):
                if($contador!=''){ 

                    //listado en desplegable
                    $html.='<option value="'.$itemSP['id_pobl'].'">'.$itemSP['nombre_poblacion'].'</option>';


                } 
        endforeach;
   echo $html; 

//fin
//-----------------------------------------------------------------------------------------
$smarty->assign("html",$html,true);

        
        
    
        
        
        
        
        
