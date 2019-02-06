<?php

//---------------------------------------------------
//
// PROVINCIAS
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  
//--------------------------------------------------


$paginador='';
$bucleProvinciasSelect='';
$bucleProvinciasListado='';
$bucleProvinciasNull='';
$bucleProvinciasSelectporId= '';
$getNombreProvincia = '';

$resultado = Provincias::consulta();



//OBTENEMOS LOS DIFERENTES TIPOS DE RESULTADOS PARA PROVINCIA, SELECT COMBO, LISTADO ETC
//-----------------------------------------------------------------------------------------
$resultadoSP = Provincias::consultaSinPaginador();
$bucleSP = $resultadoSP[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registroSP=0;
$contador = count($bucleSP);
foreach($bucleSP as $itemSP):
        if($contador!=''){ 
            //*dotamos a cada variable de un tipo de muestra de los registros           
            //*---------------------------------------------------------------
            
            //listado en desplegable
            $bucleProvinciasSelect.='<option value="'.$itemSP['alias_provincia'].'">'.$itemSP['nombre_provincia'].'</option>';
            $bucleProvinciasSelectporId.='<option value="'.$itemSP['id_prov'].'">'.$itemSP['nombre_provincia'].'</option>';
     
//listado en pantalla
            $bucleProvinciasListado.='listado de provincias en bloque';

        } else {
            $bucleProvinciasNull.=$mensTodaviaNoHayProvincias;
        }
endforeach;
//fin
//-----------------------------------------------------------------------------------------


        
        
    
        
        
        
        
        
        
        
        
        
        
        


//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleProvinciasSelect",$bucleProvinciasSelect,true); 
$smarty->assign("bucleProvinciasListado",$bucleProvinciasListado,true); 
$smarty->assign("bucleProvinciasNull",$bucleProvinciasNull,true);
$smarty->assign("bucleProvinciasSelectporId",$bucleProvinciasSelectporId,true);

$smarty->assign("getNombreProvincia",$getNombreProvincia,true);
