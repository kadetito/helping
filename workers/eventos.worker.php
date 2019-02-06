<?php


$bucleEventos='';
$paginador='';
$detalleEvento = '';
$bucleFoto = '';
$meta_datos_evento = '';
$eventoTitulo = '';
$metaTagsEvento = '';
$resultado = Eventos::consultaSinPaginador($nombreProvincia);
$bucle_eventos = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_eventos);
foreach($bucle_eventos as $item):
    
            //separamos fecha creacion para manipularla aparte   
            $fecha_creacion = strtotime($item['fecha_inicio']);
            $mesCreacion = date("m", $fecha_creacion); // Month (12)
            $diaCreacion = date("d", $fecha_creacion); // day (14)
            $anoCreacion = date("Y", $fecha_creacion); // day (14)
            setlocale(LC_TIME, 'es_ES');
            $numero = $mesCreacion;
            $fecha_creacion = DateTime::createFromFormat('!m', $numero);
            $mesCrea = strftime("%B", $fecha_creacion->getTimestamp()); // marzo

        if($contador!=''){ 
            
                $identitys=$item['id_even'];  
                $detalle_proyecto = Fotos::consultaFotos($identitys);
                if($detalle_proyecto){
                      $bucleFoto= $detalle_proyecto->getImagen();  
                      
                } else {
                       $bucleFoto= 'nophoto.png';         
                }
                
                
                $bucleEventos.='
                <div class="col-lg-4 info_box_col">
                <div class="info_box">
                <div class="info_image"><img src="'.BASE_URL.'/img/'.$bucleFoto.'" alt=""></div>
                <div class="info_content">
                <div class="info_title">'.substr($item['titulo_evento'],0,100).'...</div>
                <div class="info_text mb-5"><span class="fechaevento">'.$diaCreacion.' de '.$mesCrea.' de '.$anoCreacion.'</span> - '.substr($item['descripcion_evento'],0,200).'...</div>
                <div class="button info_button "><a href="'.BASE_URL.'/'.$lengua.'/'.$nombreProvincia.'/'.$item['id_even'].'/'.filtrourl($item['titulo_evento']).'"><span>saber más</span><span>saber más</span></a></div>
                </div>
                </div>
                </div>';
        } else {
                $bucleEventos.=$mensTodaviaNoseHaCreadoEvento;
        }
endforeach;


// MUESTRO EL DETALLE desde la peticion get de la url
//------------------------------------------------------------------------------------      
if(isset($_GET['id_even'])){
    
$tipoCons = 'eventos'; //determino el tipo para obtener las fotos de la clase Fotos indicando si es evento, noticia, comerco, etc    
$id_even = $_GET['id_even']; 

            $resultadoFoto = Fotos::consultaTodasFotos($id_even,$tipoCons);
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
    

            $get_even = Eventos::consultaDetalle($id_even); 
            
            $eventoId = $get_even->getId();
            $eventoTitulo = $get_even->getNombre();
            $eventoDescripcion = $get_even->getDescripcion();
            $eventoFecha = $get_even->getFecha();
            $eventoMetadatos = $get_even->getMetaDatos();
            $eventoImagen = $bucleFoto;
            $metaTagsEvent = $get_even->getMetaTags();
            //header('Location: '.BASE_URL.'/'.$lengua.'/'.$getNomProvi.'');
            $detalleEvento.=''.$eventoTitulo.''.$bucleFoto.'';
            $meta_datos_evento.=''.$eventoMetadatos.'';
            $metaTagsEvento.=''.$metaTagsEvent.'';
 }
              
//paginador estandar para todas las tablas
//require (ROOT_DIR.'/includes/paginador.php');
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleEventos",$bucleEventos,true); 
$smarty->assign("detalleEvento",$detalleEvento,true);
$smarty->assign("meta_datos_evento",$meta_datos_evento,true);
$smarty->assign("eventoTitulo",$eventoTitulo,true);
$smarty->assign("metaTagsEvento",$metaTagsEvento,true);
