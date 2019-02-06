<?php

//---------------------------------------------------
//
// ANUNCIOS
// Worker que consulta datos y devuelve variables para castear 
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
$bucleAnuncios='';
$bucleAnunciosLaterales='';
$bucleAnunciosBanner = '';
$bucleAnunciosBanner_2 = '';

$resultado = Anuncios::consultaSinPaginador($nombreProvincia,$paginaActual);
$bucle_Anuncios = $resultado[0];//me llega un array de los registros mas las paginas etc del metodo consulta
$cont_registro=0;
$contador = count($bucle_Anuncios);

foreach($bucle_Anuncios as $item):
        if($contador!=''){ 
                $identitys=$item['id_anun'];
                $tipodeBanner=$item['id_tian'];
                if ($item === reset($bucle_Ofertas)){$activo = 'active';} else {$activo = '';}       
                if($tipodeBanner==2){$bucleAnunciosLaterales.=''.$item['imagen_anuncio'].'';}       
        } else {
                $bucleAnuncios.=$mensTodaviaNoseHaCreadoAnuncios;
        }
endforeach;





//de 0 a 5 registros
foreach(array_slice($bucle_Anuncios,1,5) as $item):
        if($contador!=''){ 
                $tipodeBanner=$item['id_tian'];
                if($tipodeBanner==1) {
                    $bucleAnunciosBanner.='<div class="col info_box_col"><div class="info_box"><div class="info_image"><a data-pageref-id="'.$item['id_anun'].'" onClick="onClick(this)" href="'.$item['url'].'"><img src="'.BASE_URL.'/img/'.$item['imagen_anuncio'].'" alt=""></a></div></div></div>';
                }                    
        } else {
                $bucleAnuncios.=$mensTodaviaNoseHaCreadoAnuncios;
        }
endforeach;
//de 5 a 10 registros
foreach(array_slice($bucle_Anuncios,5,10) as $item):
        if($contador!=''){ 
                $tipodeBanner=$item['id_tian'];
                if($tipodeBanner==1) {
                    $bucleAnunciosBanner_2.='<div class="col info_box_col"><div class="info_box"><div class="info_image"><a data-pageref-id="'.$item['id_anun'].'" onClick="onClick(this)" href="'.$item['url'].'"><img src="'.BASE_URL.'/img/'.$item['imagen_anuncio'].'" alt=""></a></div></div></div>';
                }                    
        } else {
                $bucleAnuncios.=$mensTodaviaNoseHaCreadoAnuncios;
        }
endforeach;

 
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleAnuncios",$bucleAnuncios,true); 
$smarty->assign("bucleAnunciosLaterales",$bucleAnunciosLaterales,true); 
$smarty->assign("bucleAnunciosBanner",$bucleAnunciosBanner,true); 
$smarty->assign("bucleAnunciosBanner_2",$bucleAnunciosBanner_2,true); 
