<?php



$bucleNoticias='';
$paginador='';
$detalleNoticia = '';
$metaTagsNoticia = '';
$notiTitulo = '';



$resultado = Noticias::consultaSinPaginador($nombreProvincia);
$bucle_Noticias = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_Noticias);
$i = 0;

foreach($bucle_Noticias as $item):
    
            //separamos fecha creacion para manipularla aparte   
            $fecha_creacion = strtotime($item['fecha_noticia']);
            $mesCreacion = date("m", $fecha_creacion); // Month (12)
            $diaCreacion = date("d", $fecha_creacion); // day (14)
            $anoCreacion = date("Y", $fecha_creacion); // day (14)
            setlocale(LC_TIME, 'es_ES');
            $numero = $mesCreacion;
            $fecha_creacion = DateTime::createFromFormat('!m', $numero);
            $mesCrea = strftime("%B", $fecha_creacion->getTimestamp()); // marzo

        if($contador!=''){ 
            
                $identitys=$item['id_noti'];  
                $detalle_proyecto = Fotos::consultaFotosNoticia($identitys);
                if($detalle_proyecto){
                      $bucleFoto= $detalle_proyecto->getImagen();  
                      
                } else {
                       $bucleFoto= 'nophoto.png';         
                }
                
    //3 columnas
   if ($i % 2 == 0){ $bucleNoticias.='<div class="row">'; }

                            $bucleNoticias.='<div class="col-md-6">
                                <a href="'.BASE_URL.'/'.$lengua.'/'.$nombreProvincia.'/n/'.$item['id_noti'].'/'.filtrourl($item['titulo_noticia']).'" class="latestlnk">
				<div class="latest d-flex flex-row align-items-start justify-content-start mb-5">
					<div><div class="latest_image"><img src="'.BASE_URL.'/img/'.$bucleFoto.'" alt=""></div></div>
					<div class="latest_content">
                                        
						<div class="latest_title">'.substr($item['titulo_noticia'],0,120).'</div>
						<div class="latest_info">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								
								<li><span class="fechaevento">'.$diaCreacion.' de '.$mesCrea.' de '.$anoCreacion.'</span></li>
							</ul>
                                                        <p>'.substr($item['descripcion_noticia'],0,220).'...</p>
						</div>
						<div class="latest_comments">2 Comments</div>
					</div>
                                        
				</div></a>
                                </div>';
                             //$bucleNoticias.='<div class="col-md-4">'.$item['titulo_noticia'].'</div>'; 
    
    if ($i % 2 == 1){ $bucleNoticias.='</div>'; }
    $i++;

        } else {
                $bucleNoticias.=$mensTodaviaNoseHaCreadonoticia;
        }
endforeach;

//here is a check in case you don't have multiple of 3 rows
//if ($i % 3 != 0){
//    echo '6</div>';
//}





// MUESTRO EL DETALLE desde la peticion get de la url
//------------------------------------------------------------------------------------      
if(isset($_GET['id_noti'])){
    
$tipoCons = 'noticias'; //determino el tipo para obtener las fotos de la clase Fotos indicando si es evento, noticia, comerco, etc    
 $id_noti = $_GET['id_noti']; 

            $resultadoFoto = Fotos::consultaTodasFotos($id_noti,$tipoCons);
            $bucle_eventosFoto = $resultadoFoto[0];//me llega un array de los registros mas las paginas etc del metodo consulta
            $cont_registroFoto=0;
            $contadorFoto = count($bucle_eventosFoto);
            foreach($bucle_eventosFoto as $itemFoto):
                if($bucle_eventosFoto){
                                  $bucleFoto.= $itemFoto['archivo_foto'];  

                } else {
                                  $bucleFoto.= 'nophoto.png';         
                }   
            endforeach;   
    

            $get_noti = Noticias::consultaDetalle($id_noti); 
            
            $notiId = $get_noti->getId();
            $notiTitulo = $get_noti->getNombre();
            $notiDescripcion = $get_noti->getDescripcion();
            $notiFecha = $get_noti->getFecha();
            $metasNew = $get_noti->getMetaTags();
            $notiImagen = $bucleFoto;
	
            //header('Location: '.BASE_URL.'/'.$lengua.'/'.$getNomProvi.'');
            $detalleNoticia.=''.$notiTitulo.''.$bucleFoto.'';
            $metaTagsNoticia.= ''.$metasNew.'';
 }
          
 
 
 
              
//paginador estandar para todas las tablas
//require (ROOT_DIR.'/includes/paginador.php');
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleNoticias",$bucleNoticias,true); 
$smarty->assign("detalleNoticia",$detalleNoticia,true); 
$smarty->assign("notiTitulo",$notiTitulo,true); 
$smarty->assign("metaTagsNoticia",$metaTagsNoticia,true); 

