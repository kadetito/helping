<?php
$bucleComercios='';
$paginador='';
$paginadorFotos='';
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
$bucleTodasFotosAdmin  ='';
$imagenPrincipal = '';
$bucleComerciosAdmin = '';
$getMetadatos='';
$getMetas='';
$exitoOperacion = '';
$getNombreProvincia = '';
$getNombrePoblacion = '';
$getNombreSector ='';
$getTicoNombre = '';
$getCategoriaNombre = '';
$tipoCons = '';
$getPagina = '';
$idrequest = '';



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


        // 
        // EDICION MUESTRO EL DETALLE desde la peticion get de la url
        // 
        // 
        //------------------------------------------------------------------------------------
        $identificador = filter_input(INPUT_GET, 'idendoregis');
        
        if(isset($identificador)){

           $tipoCons = filter_input(INPUT_GET, 'seccion');
           $getPagina = filter_input(INPUT_GET, 'pagina');
           $idrequest = $identificador;
           

            //** consulta todas las fotos de este comercio
            //----------------------------------------------------------------------                
            $resultadoBucleFoto = Fotos::consultaTodasFotosAdmin($idrequest,$tipoCons);
            $bucle_Fotos = $resultadoBucleFoto[0];
            $cont_registro=0;
            $contador = count($bucle_Fotos);
            foreach($bucle_Fotos as $itemFotoBucle):
                if(isset($bucle_Fotos)){
                      $bucleTodasFotosAdmin.= '<div class="col-md-4"><div class="thumbs"><a href="'.BASE_URL.'/fotos/'.$itemFotoBucle['archivo_foto'].'" class="group4" title="'.$itemFotoBucle['titulo_foto'].'"><img src="'.BASE_URL.'/fotos_baja/'.$itemFotoBucle['archivo_foto'].'" alt="'.$itemFotoBucle['titulo_foto'].'" /></a></div><p class="delbott"><form action="" method="POST"><input type="hidden" value="'.$itemFotoBucle['id_foto'].'" name="id_foto" /><input type="hidden" value="'.$tipoCons.'" name="tipoCons" /><input type="hidden" value="'.$idrequest.'" name="identifyh" /><button type="submit" class="btn miniboton" name="eliminarfoto"><i class="fas fa-trash-alt"></i> borrar</button></form></p></div>';  
                } else {
                      $bucleTodasFotosAdmin.= 'No hay fotos todavía';    
                }   
            endforeach; 
            
            //** consulta el detalle de este comercio
            //----------------------------------------------------------------------             
            switch ($tipoCons){
                
               case "comercios":
                    $get_comer = Comercios::consultaDetalle($idrequest); 
                     $getId_come                 =$get_comer->getIdcome();
                     $getId_cate                 =$get_comer->getIdcate();
                    $get_NomCateg = Categorias::consultadeIdaAlias($getId_cate);
                     $getCategoriaNombre         =$get_NomCateg->getNombre();
                     $getId_prov                 =$get_comer->getIdprov();
                     $identi = $getId_prov;
                    $get_NomPr = Provincias::consultadeIdaAlias($getId_prov); 
                     $getNombreProvincia         =$get_NomPr->getNombreProv();
                     $getAlias_provincia         =$get_comer->getAliasprovincia();
                     $getId_pobl                 =$get_comer->getIdpobl();
                    $get_NomPobl = Poblaciones::consultadeIdaAlias($getId_pobl);
                     $getNombrePoblacion         =$get_NomPobl->getNombrePobl();
                     $getId_sect                 =$get_comer->getIdsect();
                    $get_NomSect = Sectores::consultadeIdaAlias($getId_sect); 
                     $getNombreSector            =$get_NomSect->getNombreSect();               
                     $getNombre_comercio         =$get_comer->getNombrecomercio();
                     $getDescripcion_comercio    =$get_comer->getDescripcioncomercio();
                     $getFecha_alta              =$get_comer->getFechaalta();
                     $getBreve_comercio          =$get_comer->getBrevecomercio();
                     $getId_tico                 =$get_comer->getIdtico();
                    $get_NomTico = Tico::consultadeIdaAlias($getId_tico); 
                     $getTicoNombre              =$get_NomTico->getNombreTico();
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
                     $getCcomercio_destacado     =$get_comer->getCcomerciodestacado();
                     $getMetas                   =$get_comer->getMetas();
                     $getGuia                    =$get_comer->getGuia();
                     break;
            }
            
        }
 
        // SI ENVIO EL FORMULARIO
        // procedo al update
        //----------------------------------------------------------------------    
            $editar = filter_input(INPUT_POST, 'editar');

            if(isset($editar)){
                $sector = filter_input(INPUT_POST, 'sector');
                $pagina = filter_input(INPUT_POST, 'pagina');
                $paginaasxas = filter_input(INPUT_POST, 'id_prov');
                           

                //DETERMINO LOS DATOS SEGUN SECCION Y filtro las variables 
                switch ($sector){
                    case "comercios":
                            $setId_come              = filter_input(INPUT_POST, 'id_come');             
                            $setId_cate              = filter_input(INPUT_POST, 'id_cate');             
                            $setId_prov              = filter_input(INPUT_POST, 'id_provincia');             
                            $setId_pobl              = filter_input(INPUT_POST, 'id_pobl');             
                            $setId_tico              = filter_input(INPUT_POST, 'id_tico');             
                            $setId_sect              = filter_input(INPUT_POST, 'id_sect');             
                            $setComerTitulo          = filter_input(INPUT_POST, 'nombre_comercio');     
                            $setBreve_comercio       = filter_input(INPUT_POST, 'breve_comercio');      
                            $setDescripcion_comercio = filter_input(INPUT_POST, 'descripcion_comercio');
                            $setEmail_comercio       = filter_input(INPUT_POST, 'email_comercio');      
                            $setDireccion_comercio   = filter_input(INPUT_POST, 'direccion_comercio');  
                            $setCodigo_postal        = filter_input(INPUT_POST, 'codigo_postal');       
                            $setTelefono_comercio    = filter_input(INPUT_POST, 'telefono_comercio');   
                            $setFax_comercio         = filter_input(INPUT_POST, 'fax_comercio');        
                            $setUrl_comercio         = filter_input(INPUT_POST, 'url_comercio');        
                            $setFacebook_comercio    = filter_input(INPUT_POST, 'facebook_comercio');   
                            $setTwitter_comercio     = filter_input(INPUT_POST, 'twitter_comercio');    
                            $setInstagram_comercio   = filter_input(INPUT_POST, 'instagram_comercio');  
                            $setYoutube_comercio     = filter_input(INPUT_POST, 'youtube_comercio');    
                            $setCcomercio_destacado  = filter_input(INPUT_POST, 'ccomercio_destacado'); 
          
                            $setMetas                = filter_input(INPUT_POST, 'metas');
                            //metodo
                            $get_MetodoUpdate = Comercios::updateTotalRegistro($setId_come,$setId_cate,$setId_prov,$setId_pobl,$setId_tico,$setId_sect,$setComerTitulo,$setBreve_comercio,$setDescripcion_comercio,$setEmail_comercio,$setDireccion_comercio,$setCodigo_postal,$setTelefono_comercio,$setFax_comercio,$setUrl_comercio,$setFacebook_comercio,$setTwitter_comercio,$setInstagram_comercio,$setYoutube_comercio,$setCcomercio_destacado,$setMetas); 
                            //pagina de retorno
                            $retornoUrl = BASE_URL."/administracion/adh/".$sector."/".$pagina."/".$setId_come;
                            break;
                      }
                    
                    //devuelvo mensaje exito y me quedo en el registro
                    $exitoOperacion= "  
                        <script>  
                        var baseurlretorno = '".$retornoUrl."'; 
                        swal.fire({
                          position: 'center',
                          type: 'success',
                          title: 'Registro modificado',
                          showConfirmButton: false,
                          timer: 1500
                        }).then((value) =>{
                                window.location =  baseurlretorno+'';
                            });
                        </script>";
                }
        // SI SUBO FOTOS MASIVO
        // procedo al update de fotos
        //----------------------------------------------------------------------    
            $submitFotos = filter_input(INPUT_POST, 'submitFotos');

            if(isset($submitFotos)){
                $sector = filter_input(INPUT_POST, 'sector');
                $pagina = filter_input(INPUT_POST, 'pagina');
                $id_comefotos = filter_input(INPUT_POST, 'id_comefotos');
                $fechaFotos = filter_input(INPUT_POST, 'fecha_foto');           
                $fechayHora = date('d-m-Y-H-i-s');
                $countfiles = count($_FILES['files']['name']);
                //DETERMINO LOS DATOS SEGUN SECCION Y filtro las variables 
                     switch ($sector){
                            case "comercios":
                            //metodo
                            $get_MetodoUpdate = Fotos::insertFotosMasivo($id_comefotos,$fechaFotos,$countfiles,$fechayHora,$sector); 
                            //pagina de retorno
                            $retornoUrl = BASE_URL."/administracion/adh/".$sector."/".$pagina."/".$id_comefotos;
                            break;
                      }
                    //devuelvo mensaje exito y me quedo en el registro
                    $exitoOperacion= "  
                        <script>  
                        var baseurlretorno = '".$retornoUrl."'; 
                        swal.fire({
                          position: 'center',
                          type: 'success',
                          title: 'Fotos Subidas',
                          showConfirmButton: false,
                          timer: 1500
                        }).then((value) =>{
                                window.location =  baseurlretorno+'';
                            });
                        </script>";
                      
                 }
      
                 // ELIMINAR FOTO
                 //
                 //----------------------------------------------------------------------
                 $eliminoFoto = filter_input(INPUT_POST, 'eliminarfoto');      
                 $tipoCons = filter_input(INPUT_GET, 'seccion');
                 $getPagina = filter_input(INPUT_GET, 'pagina');
                 $identifyh = filter_input(INPUT_POST, 'identifyh');
                 if(isset($eliminoFoto)){
                     $id_foto = filter_input(INPUT_POST, 'id_foto');
                     $tipoCons = filter_input(INPUT_POST, 'tipoCons');
                     $retornoUrl2 = BASE_URL."/administracion/adh/".$tipoCons."/".$getPagina."/".$identifyh;
                     $exitoOperacion.= "  
                     <script>  
                     var baseurl = '".$retornoUrl2."'; 
                     var okdel = '".$id_foto."'; 
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
                       ).then((value) =>{window.location =  baseurl+'/'+okdel  ;
                       })
                      }
                      });
                     </script> ";
                 }
                        //si confirmo borrado
                        //$okeyDel = $_GET['okdel'];
                        $okeyDel = filter_input(INPUT_GET, 'okdel');
                        $idendoregis = filter_input(INPUT_GET, 'idendoregis');
                        
                        if(isset($okeyDel)){
                        $retornoUrl3 = BASE_URL."/administracion/adh/".$tipoCons."/".$getPagina."/".$idendoregis;
                        $id_fotoS = $okeyDel;
                            $get_comerDel = Fotos::eliminarRegistroFoto($id_fotoS);
                            header('Location: '.$retornoUrl3.'');
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
$smarty->assign("bucleTodasFotosAdmin",$bucleTodasFotosAdmin,true);
$smarty->assign("imagenPrincipal",$imagenPrincipal,true);
$smarty->assign("bucleComerciosAdmin",$bucleComerciosAdmin,true);
$smarty->assign("exitoOperacion",$exitoOperacion,true);
$smarty->assign("getNombreProvincia",$getNombreProvincia,true);
$smarty->assign("getNombrePoblacion",$getNombrePoblacion,true);
$smarty->assign("getNombreSector",$getNombreSector,true);
$smarty->assign("getTicoNombre",$getTicoNombre,true);

$smarty->assign("getCategoriaNombre",$getCategoriaNombre,true);

$smarty->assign("reciboSector",$tipoCons,true);
$smarty->assign("reciboPagina",$getPagina,true);
$smarty->assign("reciboIdCome",$idrequest,true);

           