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
$bucleCategoriasAdmin = '';
$exitoOperacionDelCat='';
$i = 0;
 //MUESTRO CATEGORIAS EN DIVEROSS ESTADOS
//-------------------------------------------------------------------------
$thisSeccion='comercios';
$thisPagina= 'lista_categorias';
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

                $bucleCategoriasAdmin.='<tr>
                                        <th scope="row">'.$item['id_cate'].'</th>
                                        
                                        <td>'.substr($item['nombre_categoria'],0,100).'</td>
                                       
                                        <td class="text-right limnp">
                                        <div class="row m-0"> 
                                       <div class="col-4"><a href="'.BASE_URL.'/administracion/adc/'.$thisSeccion.'/'.$thisPagina.'/'.$item['id_cate'].'"><i class="fas fa-pen-square fa-2x"></i></a></div>';                              
                $bucleCategoriasAdmin.='<div class="col-4"><form action="" method="POST"><input type="hidden" name="id_cate" value="'.$item['id_cate'].'" /><button type="submit" name="eliminarcategoria"><i class="fas fa-trash-alt fa-2x"></i></button></form></div>
                    
                                            </div>
                                        </td>
                                      </tr>';

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

   
 
 
        // ELIMINAR REGISTRO
        //
        //----------------------------------------------------------------------
        $eliminarcat = filter_input(INPUT_POST, 'eliminarcategoria');
        if(isset($eliminarcat)){  
            $id_cate = filter_input(INPUT_POST, 'id_cate');
            
            $exitoOperacionDelCat.= "  
            <script>  
            var baseurl = '".BASE_URL."'; 
            var okDel = '".$id_cate."'; 
            swal.fire({
            title: 'Seguro que quiere borrar?',
              position: 'center',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, borrar!'
            }).then((result) =>{
            if (result.value) {    
            swal.fire( 'Borrado!',
            'El registro ha sido borrado.',
            'success'
              ).then((value) =>{window.location =  baseurl+'/administracion/lista_categorias.php?dol='+okDel  ;
              })
             }
             });
            </script> ";
        }
        //si confirmo borrado
        $okeyDel = filter_input(INPUT_GET, 'dol');
        if(isset($okeyDel)){
            $id_cate = $okeyDel;
            $get_comerDel = Categorias::eliminarRegistroCat($id_cate);
          
            header('Location: '.BASE_URL.'/administracion/lista_categorias.php');
        }
        
        
        

//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleCategoriasSelect",$bucleCategoriasSelect,true); 
$smarty->assign("bucleCategoriasListado",$bucleCategoriasListado,true); 
$smarty->assign("bucleCategoriasNull",$bucleCategoriasNull,true); 
$smarty->assign("bucleCategoriasEscog",$bucleCategoriasEscog,true); 
$smarty->assign("tituloCategoria",$tituloCategoria,true); 
 $smarty->assign("exitoOperacionDelCat",$exitoOperacionDelCat,true);
$smarty->assign("bucleCategoriasAdmin",$bucleCategoriasAdmin,true); 
