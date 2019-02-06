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


$paginador='';
$buclePoblacionSelect='';



//OBTENEMOS RESULTADOS
//-----------------------------------------------------------------------------------------
if(isset($_POST['id_prov'])){
    
        $idProvincia = $_POST['id_prov'];
        $resultadoSP = Poblacion::consultaporId($idProvincia);
        $bucleSP = $resultadoSP[0];
        $cont_registroSP=0;
        $contador = count($bucleSP);
        foreach($bucleSP as $itemSP):
                if($contador!=''){ 

                    //listado en desplegable
                    $buclePoblacionSelect.='<option value="'.$itemSP['alias_provincia'].'">'.$itemSP['nombre_provincia'].'</option>';


                } else {
                }
        endforeach;
        
}
//fin
//-----------------------------------------------------------------------------------------


        
        
    
        
        
        
        
        
        
        
        
        
        
        


//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("buclePoblacionSelect",$buclePoblacionSelect,true); 
