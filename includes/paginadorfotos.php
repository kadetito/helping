<?php
//---------------------------------------------------
//
// PAGINADOR
// Sera invocado desde el worker
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------

$paGinasFotos=$resultado[1];
$porPagFotos = $resultado[2];
$pagenumFotos = $resultado[3];

if($contador!=''){ //si no hay fotos no necesitamos paginador
if($paGinasFotos != 1){
	if ($pagenumFotos > 1) {
        $previousFotos = $pagenumFotos - 1;
		$paginadorFotos.= '<a href="'.BASE_URL.'/administracion/adh/'.$tipoCons.'/'.$getPagina.'/'.$idrequest.'?paginaFotos='.$previousFotos.'&por-paginaFotos='.$porPagFotos.'" ><button type="button" class="btn ">Anterior</button></a> &nbsp; ';
 
		for($x = $pagenumFotos-4; $xFotos < $pagenumFotos; $xFotos++){
			if($xFotos > 0){
		 $paginadorFotos.= '<a href="'.BASE_URL.'/administracion/adh/'.$tipoCons.'/'.$getPagina.'/'.$idrequest.'?paginaFotos='.$xFotos.'&por-paginaFotos='.$porPagFotos.'"><button type="button" class="btn btn-secondary">'.$xFotos.'</button></a> &nbsp; ';
			}
	    }
    }
	$paginadorFotos.= ''.$pagenumFotos.' &nbsp; ';
 
	for($xFotos = $pagenumFotos+1; $xFotos <= $paGinasFotos; $xFotos++){
	$paginadorFotos.= '<a href="'.BASE_URL.'/administracion/adh/'.$tipoCons.'/'.$getPagina.'/'.$idrequest.'?paginaFotos='.$xFotos.'&por-paginaFotos='.$porPagFotos.'"><button type="button" class="btn btn-secondary">'.$xFotos.'</button></a> &nbsp; ';
		if($xFotos >= $pagenumFotos+4){
			break;
		}
	}
    if ($pagenumFotos != $paGinasFotos) {
        $nextFotos = $pagenumFotos + 1;
       $paginadorFotos.= '<a href="'.BASE_URL.'/administracion/adh/'.$tipoCons.'/'.$getPagina.'/'.$idrequest.'?paginaFotos='.$nextFotos.'&por-paginaFotos='.$porPagFotos.'" ><button type="button" class="btn ">Siguiente</button></a>';
    }
    
    
  }
} else {
		
}