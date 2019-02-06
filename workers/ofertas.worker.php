<?php

//---------------------------------------------------
//
// DESTACADOS
// Worker que consulta datos y devuelve variables para castear 
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------

$bucleOfertas='';
$detalleOferta='';
$ofertaMetaDatos = '';
$ofertaMetas = '';
$tituloOferta = '';
$resultado = Ofertas::consultaSinPaginador($nombreProvincia);
$bucle_Ofertas = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_Ofertas);
foreach($bucle_Ofertas as $item):
            //separamos fecha creacion para manipularla aparte   
            $fecha_creacion = strtotime($item['fecha']);
            $mesCreacion = date("m", $fecha_creacion); // Month (12)
            $diaCreacion = date("d", $fecha_creacion); // day (14)
            $anoCreacion = date("Y", $fecha_creacion); // day (14)
            setlocale(LC_TIME, 'es_ES');
            $numero = $mesCreacion;
            $fecha_creacion = DateTime::createFromFormat('!m', $numero);
            $mesCrea = strftime("%B", $fecha_creacion->getTimestamp()); // marzo
        if($contador!=''){ 
                        $bucleOfertas.='';

                        $identitys=$item['id_ofer'];

                        if ($item === reset($bucle_Ofertas)){$activo = 'active';} else {$activo = '';}
                        
                        //encripto la id ofer
                        $encrypted_data = $claveCryptA.$item['id_ofer'].$claveCryptB;
                        $idOferEncrypted = base64_encode($encrypted_data);

                        $bucleOfertas.='<div class="carousel-item '.$activo.'">
						<img class="d-block w-100" alt="'.$item['titulo_destacado'].'" src="img/'.$item['imagen_destacado'].'" />
						<div class="carousel-caption">
                                                    <h4>'.substr($item['titulo_destacado'],0,100).'</h4>
                                                    <p>'.substr($item['resumen_destacado'],0,100).'
                                                    <div class="button info_button"><a href="'.BASE_URL.'/'.$lengua.'/'.$nombreProvincia.'/oferta/'.$idOferEncrypted.'"><span>VER LA OFERTA</span><span>VER LA OFERTA</span></a></div>
                                                    </p>
						</div>
					</div>';
        } else {
                $bucleOfertas.=$mensTodaviaNoseHaCreadoOfertas;
        }
endforeach;




// MUESTRO EL DETALLE DE LA OFERTA desde la peticion get de la url
//------------------------------------------------------------------------------------
        //desencripto la id ofer
if(isset($_GET['id_ofer'])){
        $desencryptado = base64_decode($_GET['id_ofer']);
        $id_ofer = substr($desencryptado,6,-6);
        $get_ofer = Ofertas::consultaDetalle($id_ofer); 

           // $ofertaIdCome = $get_ofer->getIdCome();
            $ofertaId = $get_ofer->getId();
            $ofertaTitulo = $get_ofer->getTitulo();
            $ofertaResumen = $get_ofer->getResumen();
            $ofertaDescripcion = $get_ofer->getDescripcion();
            $ofertaFecha = $get_ofer->getFecha();
            $ofertaImagen = $get_ofer->getImagen();
            	$ofertaMetaData = $get_ofer->getMetaData();
		$ofertaMeta = $get_ofer->getMeta(); 	
            //header('Location: '.BASE_URL.'/'.$lengua.'/'.$getNomProvi.'');
            $detalleOferta.=''.$ofertaTitulo.'';
            $tituloOferta = ''.$ofertaTitulo.'';
         $ofertaMetaDatos = ''.$ofertaMetaData.'';
          $ofertaMetas = ''.$ofertaMeta.'';
 }
 
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleOfertas",$bucleOfertas,true); 
$smarty->assign("detalleOferta",$detalleOferta,true);
$smarty->assign("ofertaMetaDatos",$ofertaMetaDatos,true);
$smarty->assign("ofertaMetas",$ofertaMetas,true);
$smarty->assign("tituloOferta",$tituloOferta,true);