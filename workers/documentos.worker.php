<?php



$bucleDocumentos='';
$paginador='';
$detalleDocumento = '';

$resultado = Documentos::consultaSinPaginador();
$bucle_Documentos = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_Documentos);
$i = 0;

foreach($bucle_Documentos as $item):
    
            //separamos fecha creacion para manipularla aparte   
            $fecha_creacion = strtotime($item['fecha_documento']);
            $mesCreacion = date("m", $fecha_creacion); // Month (12)
            $diaCreacion = date("d", $fecha_creacion); // day (14)
            $anoCreacion = date("Y", $fecha_creacion); // day (14)
            setlocale(LC_TIME, 'es_ES');
            $numero = $mesCreacion;
            $fecha_creacion = DateTime::createFromFormat('!m', $numero);
            $mesCrea = strftime("%B", $fecha_creacion->getTimestamp()); // marzo

        if($contador!=''){ 
            

                
//    //3 columnas
//   if ($i % 2 == 0){ $bucleDocumentos.='<div class="row">'; }

                            $bucleDocumentos.='
                                <a href="'.BASE_URL.'/'.$lengua.'/'.$nombreProvincia.'/d/'.$item['id_docu'].'/'.filtrourl($item['titulo_documento']).'" class="latestlnk">
				'.substr($item['titulo_documento'],0,120).'</a>';
                       
    
//    if ($i % 2 == 1){ $bucleDocumentos.='</div>'; }
//    $i++;

        } else {
                $bucleDocumentos.=$mensTodaviaNoseHaCreadoDocumento;
        }
endforeach;

//here is a check in case you don't have multiple of 3 rows
//if ($i % 3 != 0){
//    echo '6</div>';
//}





// MUESTRO EL DETALLE desde la peticion get de la url
//------------------------------------------------------------------------------------      
if(isset($_GET['id_docu'])){
    
$id_docu = $_GET['id_docu']; 


            $get_docu = Documentos::consultaDetalle($id_docu); 
            
            $docuId = $get_docu->getId();
            $docuTitulo = $get_docu->getNombre();
            $docuDescripcion = $get_docu->getDescripcion();
            $docuFecha = $get_docu->getFecha();

            $detalleDocumento.=''.$docuTitulo.'';

         
 }
          
 
 
 
              
//paginador estandar para todas las tablas
//require (ROOT_DIR.'/includes/paginador.php');
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleDocumentos",$bucleDocumentos,true); 
$smarty->assign("detalleDocumento",$detalleDocumento,true); 


