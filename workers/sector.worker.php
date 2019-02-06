<?php

//---------------------------------------------------
//
// SECTORES
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  
//--------------------------------------------------


$paginador='';
$bucleSectorSelect='';



//OBTENEMOS RESULTADOS
//-----------------------------------------------------------------------------------------

    

        $resultadoSP = Sectores::consultaSinPaginador();
        $bucleSP = $resultadoSP[0];
        $cont_registroSP=0;
        $contador = count($bucleSP);
        foreach($bucleSP as $itemSP):
                if($contador!=''){ 

                    //listado en desplegable
                    $bucleSectorSelect.='<option value="'.$itemSP['id_sect'].'">'.$itemSP['nombre_sector'].'</option>';


                } else {
                }
        endforeach;
        

//fin
//-----------------------------------------------------------------------------------------




//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleSectorSelect",$bucleSectorSelect,true); 
