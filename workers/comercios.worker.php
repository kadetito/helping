<?php
$bucleComercios='';
$paginador='';
$getId_come                ='';
$getId_cate                ='';
$getId_prov                ='';
$getAlias_provincia        ='';
$getId_pobl                ='';
$getId_sect                ='';
$getId_sevi                ='';
$getNombre_comercio        ='';
$getDescripcion_comercio   ='';
$getFecha_alta             ='';
$getBreve_comercio         ='';
$getId_tico                ='';
$getEmail_comercio         ='';
$getDireccion_comercio     ='';
$getCodigo_postal          ='';
$getTelefono_comercio      ='';
$getFax_comercio           ='';
$getUrl_comercio           ='';
$getFacebook_comercio      ='';
$getTwitter_comercio       ='';
$getInstagram_comercio     ='';
$getYoutube_comercio       ='';
$getYelp_comercio          ='';
$getFotolog_comercio       ='';
$getCcomercio_destacado    ='';
$getGuia                   ='';
$bucleTodasFotos             ='';
$imagenPrincipal = '';
$bucleComerciosAdmin = '';
$getMetadatos='';
$getMetas='';
$exitoOperacion = '';

//** consulta todos los comercios SIN paginador
//----------------------------------------------------------------------  

if(isset($nombreProvincia)){
$resultado = Comercios::consultaSinPaginador($nombreProvincia);
$bucle_Comercios = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_Comercios);
foreach($bucle_Comercios as $item):
    
            //separamos fecha creacion para manipularla aparte   
            $fecha_creacion = strtotime($item['fecha_alta']);
            $mesCreacion = date("m", $fecha_creacion); // Month (12)
            $diaCreacion = date("d", $fecha_creacion); // day (14)
            $anoCreacion = date("Y", $fecha_creacion); // day (14)
            setlocale(LC_TIME, 'es_ES');
            $numero = $mesCreacion;
            $fecha_creacion = DateTime::createFromFormat('!m', $numero);
            $mesCrea = strftime("%B", $fecha_creacion->getTimestamp()); // marzo

        if($contador!=''){ 
//** consulta la foto principal
//----------------------------------------------------------------------
                $identitys=$item['id_come'];  
                $detalle_proyecto = Fotos::consultaFotosComercio($identitys);
                if($detalle_proyecto){
                      $bucleFoto= $detalle_proyecto->getImagen();  
                      
                } else {
                       $bucleFoto= 'nophoto.png';         
                }
                
                
                $bucleComercios.='
                                <div class="owl-item dept_item"><a href="'.BASE_URL.'/'.$lengua.'/'.$nombreProvincia.'/c/'.$item['id_come'].'/'.filtrourl($item['nombre_comercio']).'">
                                        <div class="dept_image"><img src="'.BASE_URL.'/fotos_baja/'.$bucleFoto.'" alt="'.$item['nombre_comercio'].'"></div>
                                           <div class="dept_content">
                                               <div class="dept_title">'.substr($item['nombre_comercio'],0,100).'</div>
                                               <div class="dept_link">Ver más</div>
                                        </div></a>
                                </div>';
        } else {
                $bucleComercios.=$mensTodaviaNoseHaCreadoComercio;
        }
endforeach;
}








//----------------------------------------------------------------------  
//
//
//  ADMINISTRACION
//
//** consulta todos los comercios para la tabla del admin
//
//   USO de varios metodos de la clase comercios
//
//
//---------------------------------------------------------------------- 
$thisSeccion='comercios';
$thisPagina= 'lista_comercios';
$resultado = Comercios::consultaConPaginadorniID();
$bucle_ComerciosAdmin = $resultado [0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registroAdmin=0;
$contador = count($bucle_ComerciosAdmin);
foreach($bucle_ComerciosAdmin as $itemAdmin):
    

        if($contador!=''){ 
                //** consulta la foto principal
                //----------------------------------------------------------------------
                $identitys=$itemAdmin['id_come'];  
                $detalle_Admin = Fotos::consultaFotosComercio($identitys);
                if($detalle_Admin){
                      $bucleFotoAdmin= $detalle_Admin->getImagen();  
                      
                } else {
                       $bucleFotoAdmin= 'nophoto.png';         
                }
                $visible = $itemAdmin['activo'];
                $bucleComerciosAdmin.='<tr>
                                        <th scope="row">'.$itemAdmin['id_come'].'</th>
                                        <td><img style="height:80px;" src="'.BASE_URL.'/fotos_baja/'.$bucleFotoAdmin.'" alt="'.$itemAdmin['nombre_comercio'].'" /></td>
                                        <td>'.substr($itemAdmin['nombre_comercio'],0,100).'</td>
                                        <td>'.$itemAdmin['fecha_alta'].'</td>
                                        <td class="text-right limnp">
                                        <div class="row m-0"> 
                                       <div class="col-4"><a href="'.BASE_URL.'/administracion/adh/'.$thisSeccion.'/'.$thisPagina.'/'.$itemAdmin['id_come'].'"><i class="fas fa-pen-square fa-2x"></i></a></div>';
                                     if($visible=='S'){
                                         $bucleComerciosAdmin.='<div class="col-4"><form action="" method="POST"><input type="hidden" name="activo" value="N" /><input type="hidden" name="id_come" value="'.$itemAdmin['id_come'].'" /><button type="submit" name="activando"><i class="far fa-eye fa-2x"></i></button></form></div>';
                                     } else {
                                         $bucleComerciosAdmin.='<div class="col-4"><form action="" method="POST"><input type="hidden" name="activo" value="S" /><input type="hidden" name="id_come" value="'.$itemAdmin['id_come'].'" /><button type="submit" name="activando"><i class="far fa-eye-slash fa-2x"></i></button></form></div>';
                                     }                               
                $bucleComerciosAdmin.='<div class="col-4"><form action="" method="POST"><input type="hidden" name="id_come" value="'.$itemAdmin['id_come'].'" /><button type="submit" name="eliminar"><i class="fas fa-trash-alt fa-2x"></i></button></form></div>
                    
                                            </div>
                                        </td>
                                      </tr>';
        } else {
                $bucleComerciosAdmin.=$mensTodaviaNoseHaCreadoComercio;
        }
endforeach;

        //UPDATE VISIBLE 
        //
        //----------------------------------------------------------------------
        $activando = filter_input(INPUT_POST, 'activando');
        if(isset($activando)){
            $activacion = filter_input(INPUT_POST, 'activo');
            $id_come = filter_input(INPUT_POST, 'id_come');
            $get_comerUp = Comercios::updateRegistro($id_come,$activacion);
            $exitoOperacion= "  
            <script>  
            var baseurl = '".BASE_URL."'; 
            swal.fire({
              position: 'center',
              type: 'success',
              title: 'Registro modificado',
              showConfirmButton: false,
              timer: 1500
            }).then((value) =>{
                    window.location =  baseurl+'/administracion/lista_comercios.php'  ;
                });
            </script> ";
        }

        // ELIMINAR REGISTRO
        //
        //----------------------------------------------------------------------
        $elimino = filter_input(INPUT_POST, 'eliminar');
        if(isset($elimino)){
            $id_come = filter_input(INPUT_POST, 'id_come');
            $exitoOperacion.= "  
            <script>  
            var baseurl = '".BASE_URL."'; 
            var okDel = '".$id_come."'; 
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
              ).then((value) =>{window.location =  baseurl+'/administracion/lista_comercios.php?del='+okDel  ;
              })
             }
             });
            </script> ";
        }
        //si confirmo borrado
        $okeyDel = filter_input(INPUT_GET, 'del');
        if(isset($okeyDel)){
            $id_come = $okeyDel;
            $get_comerDel = Comercios::eliminarRegistro($id_come);
            header('Location: '.BASE_URL.'/administracion/lista_comercios.php');
        }
        
        
        
        
        


// MUESTRO EL DETALLE desde la peticion get de la url
//------------------------------------------------------------------------------------
        //desencripto la id come
if(isset($_GET['id_come'])){
    
$tipoCons = 'comercios'; //determino el tipo para obtener las fotos de la clase Fotos indicando si es evento, noticia, comerco, etc    
$idrequest = $_GET['id_come'];
        
//** consulta la foto principal
//----------------------------------------------------------------------
                $identitys=$idrequest;  
                $fotoPrincipal = Fotos::consultaFotosComercio($identitys);
                if($fotoPrincipal){
                      $obtieneFoto= $fotoPrincipal->getImagen();  
                } else {
                      $obtieneFoto= 'nophoto.png';         
                }
                
//** consulta todas las fotos de este comercio
//----------------------------------------------------------------------                
            $resultadoBucleFoto = Fotos::consultaTodasFotos($idrequest,$tipoCons);
            $bucle_Fotos = $resultadoBucleFoto[0];//me llega un array de los registros mas las paginas etc del metodo consulta
            $cont_registroFotos=0;
            $contadorFotos = count($bucle_Fotos);
            foreach($bucle_Fotos as $itemFotoBucle):
                if($bucle_Fotos){
                  $bucleTodasFotos.= '<div class="thumbs"><a href="'.BASE_URL.'/fotos/'.$itemFotoBucle['archivo_foto'].'" class="group4" title="'.$itemFotoBucle['titulo_foto'].'"><img src="'.BASE_URL.'/fotos_baja/'.$itemFotoBucle['archivo_foto'].'" alt="'.$itemFotoBucle['titulo_foto'].'" /></a></div>';  

                } else {
                  $bucleTodasFotos.= '<div class="thumbs"><img src="'.BASE_URL.'/fotos_baja/nophoto.png" alt="Helping City" /></div>';    
                }   
            endforeach; 
            
 //** consulta el detalle de este comercio
//----------------------------------------------------------------------      
            $get_comer = Comercios::consultaDetalle($idrequest); 
                $getId_come                 =$get_comer->getIdcome();
                $getId_cate                 =$get_comer->getIdcate();
                $getId_prov                 =$get_comer->getIdprov();
                $getAlias_provincia         =$get_comer->getAliasprovincia();
                $getId_pobl                 =$get_comer->getIdpobl();
                $getId_sect                 =$get_comer->getIdsect();
                $getId_sevi                 =$get_comer->getIdsevi();
                $getNombre_comercio         =$get_comer->getNombrecomercio();
                $getDescripcion_comercio    =$get_comer->getDescripcioncomercio();
                $getFecha_alta              =$get_comer->getFechaalta();
                $getBreve_comercio          =$get_comer->getBrevecomercio();
                $getId_tico                 =$get_comer->getIdtico();
                $getEmail_comercio          =$get_comer->getEmailcomercio();
                $getDireccion_comercio      =$get_comer->getDireccioncomercio();
                $getCodigo_postal           =$get_comer->getCodigopostal();
                $getTelefono_comercio       =$get_comer->getTelefonocomercio();
                $getFax_comercio            =$get_comer->getFaxcomercio();
                $getUrl_comercio            =$get_comer->getUrlcomercio();
                $getFacebook_comercio       =$get_comer->getFacebookcomercio();
                $getTwitter_comercio        =$get_comer->getTwittercomercio();
                $getInstagram_comercio      =$get_comer->getInstagramcomercio();
                $getYoutube_comercio        =$get_comer->getYoutubecomercio();
                $getYelp_comercio           =$get_comer->getYelpcomercio();
                $getFotolog_comercio        =$get_comer->getFotologcomercio();
                $getCcomercio_destacado     =$get_comer->getCcomerciodestacado();
                $getMetadatos               =$get_comer->getMetadatos();
                $getMetas                   =$get_comer->getMetas();
                $getGuia                    =$get_comer->getGuia();
                $imagenPrincipal            = $obtieneFoto;
    

 }
 

              

//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleComercios",$bucleComercios,true); 

$smarty->assign("meta_datos_comercio",$getMetadatos,true);
$smarty->assign("comerMetaTags",$getMetas,true);

$smarty->assign("getId_come",$getId_come,true);
$smarty->assign("getId_cate",$getId_cate,true);
$smarty->assign("getId_prov",$getId_prov,true);
$smarty->assign("getAlias_provincia",$getAlias_provincia,true);
$smarty->assign("getId_pobl",$getId_pobl,true);
$smarty->assign("getId_sect",$getId_sect,true);
$smarty->assign("getId_sevi",$getId_sevi,true);
$smarty->assign("comerTitulo",$getNombre_comercio,true);
$smarty->assign("getDescripcion_comercio",$getDescripcion_comercio,true);
$smarty->assign("getFecha_alta",$getFecha_alta,true);
$smarty->assign("getBreve_comercio",$getBreve_comercio,true);
$smarty->assign("getId_tico",$getId_tico,true);
$smarty->assign("getEmail_comercio",$getEmail_comercio,true);
$smarty->assign("getDireccion_comercio",$getDireccion_comercio,true);
$smarty->assign("getCodigo_postal",$getCodigo_postal,true);
$smarty->assign("getTelefono_comercio",$getTelefono_comercio,true);
$smarty->assign("getFax_comercio",$getFax_comercio,true);
$smarty->assign("getUrl_comercio",$getUrl_comercio,true);
$smarty->assign("getFacebook_comercio",$getFacebook_comercio,true);
$smarty->assign("getTwitter_comercio",$getTwitter_comercio,true);
$smarty->assign("getInstagram_comercio",$getInstagram_comercio,true);
$smarty->assign("getYoutube_comercio",$getYoutube_comercio,true);
$smarty->assign("getYelp_comercio",$getYelp_comercio,true);
$smarty->assign("getFotolog_comercio",$getFotolog_comercio,true);
$smarty->assign("getCcomercio_destacado",$getCcomercio_destacado,true);
$smarty->assign("getGuia",$getGuia,true);
$smarty->assign("bucleTodasFotos",$bucleTodasFotos,true);
$smarty->assign("imagenPrincipal",$imagenPrincipal,true);
$smarty->assign("bucleComerciosAdmin",$bucleComerciosAdmin,true);
$smarty->assign("exitoOperacion",$exitoOperacion,true);

