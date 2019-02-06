<?php



$IndicadoresCarrusel='';
$bucleFotografias='';
$bucleDatos='';


        $nol=0;
        $cls =null;
        $stmt = TipoEventos::detallepaginado($identidad);
        

        foreach ($stmt as $key):
        if($nol==0):
         $cls ='active';
        else:
         $cls ='.';
        endif;
           $IndicadoresCarrusel.='<li data-target="#carousel-149808" data-slide-to="'.$nol.'" class="'.$cls.'"></li>';
        $nol++; endforeach;
        



       //wrappers
       $noslide=0;
       $clsslide =null;
       foreach ($stmt as $key):
       if($noslide==0):
        $clsslide ='active';
       else:
        $clsslide ='.';
       endif;

        $bucleFotografias.='<div class="carousel-item '.$clsslide.'"><div class="veestafoto"><a href="'.BASE_URL.'tarea_update.php?id='.$key['id'].'"><i class="far fa-eye fa-1g"></i>&nbsp;&nbsp;Detalles</a></div>';
        $bucleFotografias.='<div data-slide-to="'.$nol.'"><h4>'.$key['nombre_foto'].'</h4></div>';	
				$bucleFotografias.='<img class="d-block w-100" alt="'.$key['nombre_foto'].'" src="'.BASE_URL.'fotos/'.$key['archivo'].'" />';
				$bucleFotografias.='<div class="carousel-caption"><p>'.$key['nombre_foto'].'  </p></div></div>';
				
        $noslide++; 
        endforeach; 



//casteo la variable



