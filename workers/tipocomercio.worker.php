<?php

//---------------------------------------------------
//
// TIPOS DE COMERCIO
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  
//--------------------------------------------------


$paginador='';
$bucleTicoSelect='';



//OBTENEMOS RESULTADOS
//-----------------------------------------------------------------------------------------

    

        $resultadoSP = Tico::consultaSinPaginador();
        $bucleSP = $resultadoSP[0];
        $cont_registroSP=0;
        $contador = count($bucleSP);
        foreach($bucleSP as $itemSP):
                if($contador!=''){ 

                    //listado en desplegable
                    $bucleTicoSelect.='<option value="'.$itemSP['id_tico'].'">'.$itemSP['nombre_tipo'].'</option>';


                } else {
                }
        endforeach;
        

//fin
//-----------------------------------------------------------------------------------------




//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleTicoSelect",$bucleTicoSelect,true); 
