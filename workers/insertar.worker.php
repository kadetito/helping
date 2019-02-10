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
$exitoOperacionAlta='';


 
        // INSERT SI ENVIO EL FORMULARIO
        // procedo al insert
        //----------------------------------------------------------------------    
            $agregar = filter_input(INPUT_POST, 'agregar');

            if(isset($agregar)){
                $seccion = filter_input(INPUT_POST, 'seccion');
                $geterPagina = filter_input(INPUT_POST, 'pagina');
               
                //DETERMINO LOS DATOS SEGUN SECCION Y filtro las variables 
                switch ($seccion){
                         case "comercios": 
                               switch ($geterPagina){
                                   case "lista_comercios":   
                                       
                                      $the_guia = "Comercio";
                                      $nombre_comercio      = filter_input(INPUT_POST, 'nombre_comercio');
                                      $breve_comercio       = filter_input(INPUT_POST, 'breve_comercio');      
                                      $descripcion_comercio = filter_input(INPUT_POST, 'descripcion_comercio');
                                      $fecha_alta           = filter_input(INPUT_POST, 'fecha_alta');
                                      $email_comercio       = filter_input(INPUT_POST, 'email_comercio');      
                                      $direccion_comercio   = filter_input(INPUT_POST, 'direccion_comercio');  
                                      $codigo_postal        = filter_input(INPUT_POST, 'codigo_postal');       
                                      $telefono_comercio    = filter_input(INPUT_POST, 'telefono_comercio');   
                                      $fax_comercio         = filter_input(INPUT_POST, 'fax_comercio');        
                                      $url_comercio         = filter_input(INPUT_POST, 'url_comercio');  
                                      $id_cate         = filter_input(INPUT_POST, 'id_cate');  
                                      $id_prov         = filter_input(INPUT_POST, 'id_prov');
                                      $id_pobl         = filter_input(INPUT_POST, 'id_pobl');  
                                      $id_sect         = filter_input(INPUT_POST, 'id_sect');  
                                      $id_tico         = filter_input(INPUT_POST, 'id_tico');
                                      $guia            = $the_guia;
                                      $metas           = filter_input(INPUT_POST, 'metas');

                                      $comDest  = filter_input(INPUT_POST, 'ccomercio_destacado');
                                      if(empty($comDest)){
                                          $ccomercio_destacado = "N";}
                                      else {
                                          $ccomercio_destacado      = filter_input(INPUT_POST, 'ccomercio_destacado');
                                      }

                                      $youtube_comercio         = filter_input(INPUT_POST, 'youtube_comercio');
                                      $instagram_comercio       = filter_input(INPUT_POST, 'instagram_comercio');
                                      $twitter_comercio         = filter_input(INPUT_POST, 'twitter_comercio');
                                      $facebook_comercio        = filter_input(INPUT_POST, 'facebook_comercio');

                                      $identi = $id_prov;
                                      $get_Provincia = Provincias::consultadeIdaAlias($identi);
                                      $alias_provincia         =$get_Provincia->getAliasProv();

                                      //metodo (NO ESTATICO, RECORDAR)
                                      $get_MetodoInsert = new Comercios($nombre_comercio,$breve_comercio,$descripcion_comercio,$fecha_alta,$email_comercio,$direccion_comercio,$codigo_postal,$telefono_comercio,$fax_comercio,$url_comercio,$id_cate,$id_prov,$id_pobl,$id_sect,$id_tico,$guia,$metas,$ccomercio_destacado,$youtube_comercio,$instagram_comercio,$twitter_comercio,$facebook_comercio,$alias_provincia);
                                      $get_MetodoInsert->inserTotalRegistro();
                                      $retornoUrl = BASE_URL."/administracion/lista_comercios.php";

                                    break;
                                    case "lista_categorias":  
                                       
                                      $nombre_categoria           = filter_input(INPUT_POST, 'nombre_categoria');
                                      $descripcion_categoria      = filter_input(INPUT_POST, 'descripcion_categoria');
                                      $tags_categoria             = filter_input(INPUT_POST, 'tags_categoria');

                                      function limpiaEspacios($cadena){
                                        $cadena = str_replace(' ', '', $cadena);
                                         return strtolower($cadena);
                                      }
                                        $alias = $nombre_categoria;
                                        $AliasParseado = filtrourl($alias);
                                        $alias_categoria = limpiaEspacios($AliasParseado);
                                        
                                      //metodo (NO ESTATICO, RECORDAR)
                                      $get_MetodoInsertCat = new Categorias($alias_categoria,$descripcion_categoria,$tags_categoria,$nombre_categoria);
                                      $get_MetodoInsertCat->inserTotalRegistro();
                                      $retornoUrl = BASE_URL."/administracion/lista_categorias.php";
                                    break;  
                             case "lista_sector":  
                                      $nombre_sector = filter_input(INPUT_POST, 'nombre_sector');
                                      //metodo (NO ESTATICO, RECORDAR)
                                      $get_MetodoInsertCat = new Sectores($nombre_sector);
                                      $get_MetodoInsertCat->inserTotalRegistroSector();
                                      $retornoUrl = BASE_URL."/administracion/lista_sector.php";
                                    break; 
                             case "lista_servicio":  
                                      $nombre_catservicio = filter_input(INPUT_POST, 'nombre_catservicio');
                                      $get_MetodoInsertCat = new Servicios($nombre_catservicio);
                                      $get_MetodoInsertCat->inserTotalRegistroCatServ();
                                     
                                      $retornoUrl = BASE_URL."/administracion/lista_servicio.php";
                                    break; 
                                }
                          break;
                      }
                    //devuelvo mensaje exito y me quedo en el registro
                    $exitoOperacionAlta= "  
                        <script>  
                        var baseurlretorno = '".$retornoUrl."'; 
                        swal.fire({
                          position: 'center',
                          type: 'success',
                          title: 'Registro insertado',
                          showConfirmButton: false,
                          timer: 1500
                        }).then((value) =>{
                                window.location =  baseurlretorno+'';
                            });
                        </script>";
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
$smarty->assign("exitoOperacionAlta",$exitoOperacionAlta,true);
           