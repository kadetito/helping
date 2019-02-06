<?php
//-----------------------------------------------------------------
//
// USUARIOS
//
//
// FECHA LOG :   01 FEBRERO 2019
//
//-----------------------------------------------------------------
$detalleUsuario='';
$detalleUsuariopagina = '';
//solo si la sesion esta iniciada
if($sesion == 1){


     $id_usvi = $_SESSION['uid'];
        
 // MUESTRO EL DETALLE desde el login
//------------------------------------------------------------------------------------      


            $get_usua = Usuarios::consultaDetalle($id_usvi); 
            
            $usuaId = $get_usua->getId();
            $usuarioProv = $get_usua->getIdProv();
            $usuaNombre = $get_usua->getNombre();
            $usuaApellido = $get_usua->getApellido();
            $usuaFecha = $get_usua->getFecha();
    
          
          $get_aliasProv = Provincias::consultadeIdaAlias($usuarioProv);   
            
            
                  
        //IMPORTANTE ESTO ES UN TODO    
        // de momento cualquier idProvincia que me devuelva me irá a valencia
        // provincia activas, a dia de hoy valencia y tarragona
        //cuando se completen todas este script no servira
         if($get_aliasProv)
            {
              $aliasProvincia = $get_aliasProv->getAliasProv();   
              $aliasProvincia = $aliasProvincia;
            } else {
              $aliasProvincia = 'valencia'; 
            }
          
          
          
          
          $detalleUsuario='<a href="'.BASE_URL.'/'.$lengua.'/'.$aliasProvincia.'/pf/perfil">Hola, '.$usuaNombre.' '.$usuaApellido.'</a> <a href="'.BASE_URL.'/logout.php"><i class="fas fa-sign-out-alt"></i></a>';
          $detalleUsuariopagina=''.$usuaNombre.' '.$usuaApellido.'';
            
        //en este caso casteo las variables en este archivo que siempre ira include en todas las paginas
	$smarty->assign("detalleUsuario","$detalleUsuario",true);
        $smarty->assign("detalleUsuariopagina",$detalleUsuariopagina,true);
}   else {

   
}     
