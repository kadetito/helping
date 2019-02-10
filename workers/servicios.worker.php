<?php

//---------------------------------------------------
//
// SERVICIOS
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  
//--------------------------------------------------


$paginador='';

$exitoOperacionDelSec='';

$bucleServSelect='';
$bucleServCatSelect='';
$bucleServiciosAdmin='';

$bucleServiciosCatAdmin='';
$exitoOperacionDelCatSer='';
$exitoOperacionDeltSer='';


        //OBTENEMOS RESULTADOS CATEGORIAS SERVICIOS
        //-----------------------------------------------------------------------------------------

        $resultadoSP = Servicios::consultaServCateSinPaginador();
        $bucleSP = $resultadoSP[0];
        $cont_registroSP=0;
        $contador = count($bucleSP);
        foreach($bucleSP as $itemSP):
                if($contador!=''){ 
                    //listado en desplegable
                    $bucleServCatSelect.='<option value="'.$itemSP['id_serv'].'">'.$itemSP['nombre_catservicio'].'</option>';
                } else {
                }
        endforeach;
        //fin
        
        //-----------------------------------------------------------------------------------------
        //OBTENEMOS RESULTADOS SERVICIOS
        //-----------------------------------------------------------------------------------------
        $resultadoSU = Servicios::consultaServSinPaginador();
        $bucleSU = $resultadoSU[0];
        $cont_registroSU=0;
        $contador = count($bucleSU);
        foreach($bucleSU as $itemSU):
                if($contador!=''){ 
                    //listado en desplegable
                    $bucleServSelect.='<option value="'.$itemSU['id_util'].'">'.$itemSU['nombre_servicio'].'</option>';
                } else {
                }
        endforeach;
        //fin
        //-----------------------------------------------------------------------------------------
        
        //=========================================================
        //
        // consulta  CATEGORIAS SERVICIO LISTADO CON PAGINADOR
        // 
        //==========================================================
        $thisSeccion='comercios';
        $thisPagina= 'lista_servicio';
        $resultado = Servicios::consulta();
        $bucle_ServiciosAdmin = $resultado [0];//me llega un array de los registros mas las paginas etc del metodo consulta
        $cont_registroAdmin=0;
        $contador = count($bucle_ServiciosAdmin);
        foreach($bucle_ServiciosAdmin as $itemAdmin):
        if($contador!=''){ 
                $identitys=$itemAdmin['id_serv'];  
                $bucleServiciosCatAdmin.='<tbody><tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-'.$itemAdmin['id_serv'].'" aria-expanded="false" aria-controls="group-of-rows-'.$itemAdmin['id_serv'].'">
                                        <th scope="row"><i class="fa fa-plus" aria-hidden="true"></i></th>
                                        <td>'.$itemAdmin['id_serv'].'</td>
                                        <td>'.substr($itemAdmin['nombre_catservicio'],0,100).'</td>
                                        <td class="text-right limnp">
                                        <div class="row m-0"> 
                                       <div class="col-4"><a href="'.BASE_URL.'/administracion/adsv/'.$thisSeccion.'/'.$thisPagina.'/'.$itemAdmin['id_serv'].'"><i class="fas fa-pen-square fa-2x"></i></a></div>';                           
                $bucleServiciosCatAdmin.='<div class="col-4"><form action="" method="POST"><input type="hidden" name="id_serv" value="'.$itemAdmin['id_serv'].'" /><button type="submit" name="eliminarcategoriaservicio"><i class="fas fa-trash-alt fa-2x"></i></button></form></div>
                                            </div>
                                        </td>
                                      </tr></tbody>'; 
        
        } else {
                $bucleServiciosCatAdmin.=$mensTodaviaNoseHaCreadoComercio;
        }
        endforeach;

                            //=========================================================
                            //
                            // consulta  SERVICIO LISTADO 
                            // 
                            //==========================================================

                            $get_evenService = Servicios2::consultaServUtil($identitys); 
                            $bucle_eventosFoto = $get_evenService[0];//me llega un array de los registros mas las paginas etc del metodo consulta
                            $cont_registroFoto=0;
                            $contadorFoto = count($bucle_eventosFoto);
                            foreach($bucle_eventosFoto as $itemAdminServ):
                               
                                                                $bucleServiciosAdmin.='<tbody id="group-of-rows-'.$identitys.'" class="collapse">';
                                                                $bucleServiciosAdmin.='
                                                                        <tr><td></td>
                                                                            <td>'.$itemAdminServ['id_util'].'</td>
                                                                            <td>'.$itemAdminServ['nombre_servicio'].'</td> 
                                                                            <td></td>
                                                                        </tr>
                                                                    ';
                                                                 $bucleServiciosAdmin.='</tbody>';
                            endforeach;
       

        // ELIMINAR REGISTRO CATEGORIA SERVICIO
        //
        //----------------------------------------------------------------------
        $eliminarcategoriaservicio = filter_input(INPUT_POST, 'eliminarcategoriaservicio');
        if(isset($eliminarcategoriaservicio)){  
            $id_serv = filter_input(INPUT_POST, 'id_serv');
            $exitoOperacionDeltSer.= "  
            <script>  
            var baseurl = '".BASE_URL."'; 
            var okDslv = '".$id_serv."'; 
            swal.fire({
            title: 'Seguro que quiere borrar?',
              position: 'center',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, borrar!'
            }).then((result) =>{
            if (result.value) {    
            swal.fire( 'Borrado!',
            'El registro ha sido borrado.',
            'success'
              ).then((value) =>{window.location =  baseurl+'/administracion/lista_servicio.php?dsvlv='+okDslv  ;
              })
             }
             });
            </script> ";
        }
        //si confirmo borrado
        $okeyDelC = filter_input(INPUT_GET, 'dsvlv');
        if(isset($okeyDelC)){
            $id_servC = $okeyDelC;
            $get_servDelC = Servicios::eliminarRegistroCatServ($id_servC);
            header('Location: '.BASE_URL.'/administracion/lista_servicio.php');
        }
        
//        // ELIMINAR REGISTRO SERVICIO
//        //
//        //----------------------------------------------------------------------
//        $eliminarservicio = filter_input(INPUT_POST, 'eliminarservicio');
//        if(isset($eliminarservicio)){  
//            $id_util = filter_input(INPUT_POST, 'id_util');
//            $exitoOperacionDelCatSer.= "  
//            <script>  
//            var baseurl = '".BASE_URL."'; 
//            var okDsl = '".$id_util."'; 
//            swal.fire({
//            title: 'Seguro que quiere borrar?',
//              position: 'center',
//              type: 'warning',
//              showCancelButton: true,
//              confirmButtonColor: '#3085d6',
//            cancelButtonColor: '#d33',
//            confirmButtonText: 'Sí, borrar!'
//            }).then((result) =>{
//            if (result.value) {    
//            swal.fire( 'Borrado!',
//            'El registro ha sido borrado.',
//            'success'
//              ).then((value) =>{window.location =  baseurl+'/administracion/lista_servicio.php?dsvl='+okDsl  ;
//              })
//             }
//             });
//            </script> ";
//        }
//        //si confirmo borrado
//        $okeyDel = filter_input(INPUT_GET, 'dsvl');
//        if(isset($okeyDel)){
//            $id_util = $okeyDel;
//            $get_servcatDel = Sectores::eliminarRegistroServ($id_util);
//          
//            header('Location: '.BASE_URL.'/administracion/lista_servicio.php');
//        }      
        
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleServSelect",$bucleServSelect,true); 
$smarty->assign("bucleServCatSelect",$bucleServCatSelect,true); 
$smarty->assign("bucleServiciosAdmin",$bucleServiciosAdmin,true); 
$smarty->assign("exitoOperacionDelCatSer",$exitoOperacionDelCatSer,true);
$smarty->assign("exitoOperacionDeltSer",$exitoOperacionDeltSer,true); 

 $smarty->assign("bucleServiciosCatAdmin",$bucleServiciosCatAdmin,true); 
