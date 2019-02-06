<?php
//---------------------------------------------------
//
// PAGINADOR
// Sera invocado desde el worker
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------

$paGinas=$resultado[1];
$porPag = $resultado[2];
$pagenum = $resultado[3];

if($contador!=''){ //si no hay fotos no necesitamos paginador
if($paGinas != 1){
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginador.= '<a href="'.$_SERVER['PHP_SELF'].'?pagina='.$previous.'&por-pagina='.$porPag.'" ><button type="button" class="btn ">Anterior</button></a> &nbsp; ';
 
		for($x = $pagenum-4; $x < $pagenum; $x++){
			if($x > 0){
		 $paginador.= '<a href="'.$_SERVER['PHP_SELF'].'?pagina='.$x.'&por-pagina='.$porPag.'"><button type="button" class="btn btn-secondary">'.$x.'</button></a> &nbsp; ';
			}
	    }
    }
	$paginador.= ''.$pagenum.' &nbsp; ';
 
	for($x = $pagenum+1; $x <= $paGinas; $x++){
	$paginador.= '<a href="'.$_SERVER['PHP_SELF'].'?pagina='.$x.'&por-pagina='.$porPag.'"><button type="button" class="btn btn-secondary">'.$x.'</button></a> &nbsp; ';
		if($x >= $pagenum+4){
			break;
		}
	}
    if ($pagenum != $paGinas) {
        $next = $pagenum + 1;
       $paginador.= '<a href="'.$_SERVER['PHP_SELF'].'?pagina='.$next.'&por-pagina='.$porPag.'" ><button type="button" class="btn ">Siguiente</button></a>';
    }
    
    
  }
} else {
		
}