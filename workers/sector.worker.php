<?php

//---------------------------------------------------
//
// SECTORES
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  
//--------------------------------------------------


$paginador='';
$bucleSectorSelect='';

$bucleSectoresAdmin='';
$exitoOperacionDelSec='';
//OBTENEMOS RESULTADOS
//-----------------------------------------------------------------------------------------

        $resultadoSP = Sectores::consultaSinPaginador();
        $bucleSP = $resultadoSP[0];
        $cont_registroSP=0;
        $contador = count($bucleSP);
        foreach($bucleSP as $itemSP):
                if($contador!=''){ 

                    //listado en desplegable
                    $bucleSectorSelect.='<option value="'.$itemSP['id_sect'].'">'.$itemSP['nombre_sector'].'</option>';

                    
                } else {
                }
        endforeach;

//fin
//-----------------------------------------------------------------------------------------

        
    //=========================================================
    //
    // consulta  LISTADO CON PAGINADOR
    // 
    //==========================================================
        $thisSeccion='comercios';
        $thisPagina= 'lista_sector';
        $resultado = Sectores::consulta();
        $bucle_SectoresAdmin = $resultado [0];//me llega un array de los registros mas las paginas etc del metodo consulta
        $cont_registroAdmin=0;
        $contador = count($bucle_SectoresAdmin);
        foreach($bucle_SectoresAdmin as $itemAdmin):
    
        if($contador!=''){ 
                //** consulta la foto principal
                //----------------------------------------------------------------------
                $identitys=$itemAdmin['id_sect'];  
                $bucleSectoresAdmin.='<tr>
                                        <th scope="row">'.$itemAdmin['id_sect'].'</th>
                                        <td>'.substr($itemAdmin['nombre_sector'],0,100).'</td>
                                      
                                        <td class="text-right limnp">
                                        <div class="row m-0"> 
                                       <div class="col-4"><a href="'.BASE_URL.'/administracion/ads/'.$thisSeccion.'/'.$thisPagina.'/'.$itemAdmin['id_sect'].'"><i class="fas fa-pen-square fa-2x"></i></a></div>';
                                                                  
                $bucleSectoresAdmin.='<div class="col-4"><form action="" method="POST"><input type="hidden" name="id_sect" value="'.$itemAdmin['id_sect'].'" /><button type="submit" name="eliminarsector"><i class="fas fa-trash-alt fa-2x"></i></button></form></div>
                    
                                            </div>
                                        </td>
                                      </tr>';
        } else {
                $bucleSectoresAdmin.=$mensTodaviaNoseHaCreadoComercio;
        }
endforeach;




        // ELIMINAR REGISTRO
        //
        //----------------------------------------------------------------------
        $eliminarcat = filter_input(INPUT_POST, 'eliminarsector');
        if(isset($eliminarcat)){  
            $id_sect = filter_input(INPUT_POST, 'id_sect');
                             //echo '<script>alert("'.$id_sect.'");</script>';
            $exitoOperacionDelSec.= "  
            <script>  
            var baseurl = '".BASE_URL."'; 
            var okDsl = '".$id_sect."'; 
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
              ).then((value) =>{window.location =  baseurl+'/administracion/lista_sector.php?dsl='+okDsl  ;
              })
             }
             });
            </script> ";
        }
        //si confirmo borrado
        $okeyDel = filter_input(INPUT_GET, 'dsl');
        if(isset($okeyDel)){
            $id_sect = $okeyDel;
            $get_sectDel = Sectores::eliminarRegistroSec($id_sect);
          
            header('Location: '.BASE_URL.'/administracion/lista_sector.php');
        }
        
        
        
//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("bucleSectorSelect",$bucleSectorSelect,true); 
$smarty->assign("bucleSectoresAdmin",$bucleSectoresAdmin,true); 
$smarty->assign("exitoOperacionDelSec",$exitoOperacionDelSec,true); 

