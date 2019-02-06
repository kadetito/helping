<?php



//$resultadoConProvincia='';
//$resultadoBusqueda='';
$paginador='';
$resultadoConProvincia = filter_input(INPUT_GET, 'bpr', FILTER_SANITIZE_SPECIAL_CHARS);
$resultadoBusqueda = filter_input(INPUT_GET, 'bs', FILTER_SANITIZE_SPECIAL_CHARS);
$resultadosBus = '';
//si no hay busqueda devuelvo mensaje
if (empty($resultadoBusqueda)) {

        $resultadosBus.='<div class="mb-5 col-12 text-center">';
        $resultadosBus.='<h3 class="mt-5">No se ha producido ning&uacute;n resultado para su b&uacute;squeda <strong>'.$resultadoBusqueda.'</strong></h3>';
        $resultadosBus.='</div>';
} else {
    //si hay busqeuda de palabra comprueb si ademas llega provincia
    if (empty($resultadoConProvincia)) {
        $resultadoCa = Busqueda::consultaBusqSoloCadena($resultadoBusqueda);
        $bucle_BusCa = $resultadoCa[0];
        $cont_registroCa=0;
        $contadorCa = count($bucle_BusCa);
        if($contadorCa!=0){
            $resultadosBus.='<div class="mb-5 col-12">';
            $resultadosBus.='<h5>Ha buscado <strong>'.$resultadoBusqueda.'</strong>. Estos son los resultados encontrados:</h5>';
            $resultadosBus.='</div>';
        } else {
            $resultadosBus.='<div class="mb-5 col-12">';
            $resultadosBus.='<h5>Ha buscado <strong>'.$resultadoBusqueda.'</strong> pero no hay resultados</h5>';
            $resultadosBus.='</div>';          
        }
    } else {
        $resultadoCa = Busqueda::consultaBusqCadenaProvincia($resultadoConProvincia,$resultadoBusqueda);        
        $contadorCa = count($resultadoCa);
        $bucle_BusCa = $resultadoCa[0];
        $cont_registroCa=0;
        
        //recupero el nombre de la provincia por el alias
        $get_leoprovincia = Provincias::consultaporAlias($resultadoConProvincia);
        $nombreProvinciaHeader = $get_leoprovincia->getNombreProv();
         if($contadorCa!=0){
            $resultadosBus.='<div class="mb-5 col-12">';
            $resultadosBus.='<h5>Ha buscado <strong>'.$resultadoBusqueda.'</strong> en <strong>'.$nombreProvinciaHeader.'</strong>. Estos son los resultados encontrados:</h5>';
            $resultadosBus.='</div>';
        } else {
            $resultadosBus.='<div class="mb-5 col-12">';
            $resultadosBus.='<h5>Ha buscado <strong>'.$resultadoBusqueda.'</strong> en <strong>'.$nombreProvinciaHeader.'</strong> pero no hay resultados.</h5>';
            $resultadosBus.='</div>';      
        }   

        
    }
    $bucle_BusCa = $resultadoCa[0];
    $cont_registroCa=0;
    $contadorCa = count($bucle_BusCa);
    foreach($bucle_BusCa as $itemCa):
            if($contadorCa!=''){ 
                $recuperoGuia = $itemCa['guia'];
                //construyo los tipos de enlace segun guia
                switch ($recuperoGuia){
                    case "Comercio":
                        $urlRespuesta = ''.$lengua.'/'.$nombreProvincia.'/c/'.$itemCa['identificador'].'/'.filtrourl($itemCa['nombre_busqueda']).'';
                    break;
                    case "Evento":
                        $urlRespuesta = ''.$lengua.'/'.$nombreProvincia.'/'.$itemCa['identificador'].'/'.filtrourl($itemCa['nombre_busqueda']).'';
                    break;
                    case "Noticia":
                        $urlRespuesta = ''.$lengua.'/'.$nombreProvincia.'/n/'.$itemCa['identificador'].'/'.filtrourl($itemCa['nombre_busqueda']).'';
                    break;
                    case "Oferta":
                         $encrypted_data = $claveCryptA.$itemCa['identificador'].$claveCryptB;
                         $idOferEncrypted = base64_encode($encrypted_data);
                         $urlRespuesta = ''.$lengua.'/'.$nombreProvincia.'/oferta/'.$idOferEncrypted.'';
                    break;
                }
                $resultadosBus.='<a class="enlaceresultados" href="'.BASE_URL.'/'.$urlRespuesta.'"><div class="col-md-12">';
                $resultadosBus.='<h6 class="enlineado">'.$itemCa['guia'].'</h6>';
                $resultadosBus.='<h3>'.$itemCa['nombre_busqueda'].'</h3>';
                $resultadosBus.='<p>'.substr($itemCa['descripcion_busqueda'],0,250).' <strong>[LEER MÁS]</strong></p>';
                $resultadosBus.='<hr class="style13" />';
                $resultadosBus.='</div></a>';
                
            } 
    endforeach;
}            
//paginador estandar para todas las tablas
//require (ROOT_DIR.'/includes/paginador.php');
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("resultadosBus",$resultadosBus,true); 
//$smarty->assign("detalleDocumento",$detalleDocumento,true); 

