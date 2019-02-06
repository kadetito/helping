<?php

//---------------------------------------------------
//
// CATEGORIAS
// Worker que consulta datos y devuelve variables para castear 
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------


$paginador='';
$bucleCategoriasSelect='';
$bucleCategoriasListado='';
$bucleCategoriasNull='';
$bucleCategoriasEscog = '';  
$tituloCategoria = '';
$identiCat = '';
$i = 0;
 //MUESTRO CATEGORIAS EN DIVEROSS ESTADOS
//-------------------------------------------------------------------------
$resultado = Categorias::consulta();
$bucle_categorias = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_categorias);
foreach($bucle_categorias as $item):
        if($contador!=''){ 
            //*dotamos a cada variable de un tipo de muestra de los registros           
            //*---------------------------------------------------------------
            
            //listado en desplegable
            $bucleCategoriasSelect.='<option value="'.$item['id_cate'].'">'.$item['nombre_categoria'].'</option>';
            //listado en pantalla
            $bucleCategoriasListado.='listado de categorias en bloque';

        } else {
                $bucleCategoriasNull.=$mensTodaviaNoHayCategorias;
        }
endforeach;





 //RECIBO PROVINCIA Y CATEGORIA PARA MOSTRAR LAS CATEGORIAS DE DICHA PROVINCIA
//-------------------------------------------------------------------------
    //recibo el bombre de la categoria pero necesito el id
if(isset($nombreCategoria)){
        $idCat=$nombreCategoria;  
        $detalle_idCat = Categorias::consultaParsCat($idCat);
        if($detalle_idCat){$identiCat = $detalle_idCat->getId(); } 


        $resultadoCa = Comercios::consultaComerPorProvinyCat($nombreProvincia,$identiCat);
        $bucle_categoriasCa = $resultadoCa[0];
        $cont_registroCa=0;
        $contadorCa = count($bucle_categoriasCa);
        
        foreach($bucle_categoriasCa as $itemCa):
                if($contadorCa!=''){ 

                $identitys=$itemCa['id_come'];  
                $detalle_proyecto = Fotos::consultaFotosComercio($identitys);
                if($detalle_proyecto){
                      $bucleFoto= $detalle_proyecto->getImagen();  
                } else {
                       $bucleFoto= 'nophoto.png';         
                }
                
                    if ($i % 3 == 0){ $bucleCategoriasEscog.='<div class="row">'; }
                    //listado 
                    $bucleCategoriasEscog.='<div class="col-md-4 mb-3"><a href="'.BASE_URL.'/'.$lengua.'/'.$nombreProvincia.'/c/'.$itemCa['id_come'].'/'.filtrourl($itemCa['nombre_comercio']).'"><div class="card p-3 crfh"><div class="overcrop"><img src="'.BASE_URL.'/img/'.$bucleFoto.'" alt="'.$itemCa['nombre_comercio'].'" /></div><h3 class="nomcomerc">'.$itemCa['nombre_comercio'].'</h3><p class="nomcomercp">'.substr($itemCa['breve_comercio'],0,190).'</p></div></a></div>';

                    if ($i % 3 == 2){ $bucleCategoriasEscog.='</div>'; }
                    $i++;
                } else {
                        $bucleCategoriasNull.=$mensTodaviaNoHayCategorias;
                }
        endforeach;
} 




 


// MUESTRO EL DETALLE DE LA CATEGORIA desde la peticion get de la url
//------------------------------------------------------------------------------------
        //desencripto la id ofer
if($identiCat==NULL){
      
 } else {
      $idCat=$nombreCategoria;  
      $get_cate = Categorias::consultaParsCat($idCat); 
      $tituloCategoria = $get_cate->getNombre();
 }

        
        

//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleCategoriasSelect",$bucleCategoriasSelect,true); 
$smarty->assign("bucleCategoriasListado",$bucleCategoriasListado,true); 
$smarty->assign("bucleCategoriasNull",$bucleCategoriasNull,true); 
$smarty->assign("bucleCategoriasEscog",$bucleCategoriasEscog,true); 
$smarty->assign("tituloCategoria",$tituloCategoria,true); 
