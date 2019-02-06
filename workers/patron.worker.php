<?php

//---------------------------------------------------
//
// PROVINCIAS
// Worker que consulta datos y devuelve variables casteadas
// para Smarty en la pagina que las deba mostrar
// version 1.0
// 24/01/2019
//  
//  Recibe los parametros provincia al elegir provincia en la home 
//  o bien provincia+categoria
//--------------------------------------------------
require (ROOT_DIR.'/clases/metadatos.class.php');
$urlHomeLogo = '';
    $meta_datos        = '';
    $metasMetadatos='';
    $keywordsMetadatos='';
    $nombreProvinciaHeader = '';
//si recibo el nombre la provincia a mano via url compruebo si existe
// en la bbdd, de lo contrario doy 404
if(isset($_GET['provincia'])){
    $leoprovincia = $_GET['provincia'];
    $urlHomeLogo = BASE_URL.'/'.$lengua.'/'.$leoprovincia; 
    $get_leoprovincia = Provincias::consultaporAlias($leoprovincia);
    
    $nombreProvinciaHeader = $get_leoprovincia->getNombreProv();
    
    $identificadornumericoProvincia = $get_leoprovincia->getId();
    if(empty($get_leoprovincia)){
    header('Location: '.BASE_URL.'/404.php');
    } 

    $get_Metasprovincia = Metadatos::consultaMetadatos($identificadornumericoProvincia);
    $meta_datos= $get_Metasprovincia->getMetadatosProv();
    $metasMetadatos= $get_Metasprovincia->getMetas();
    $keywordsMetadatos= $get_Metasprovincia->getKeywords();
}

//si recibo provincia por parametro voy a ella con header
//------------------------------------------------------------------------------------------
if(isset($_POST['inicio_provincia']) && !isset($_POST['inicio_categoria'])){ //si recibo por post la provincia
                $id_prov = $_POST['inicio_provincia'];
                $get_provincia = Provincias::consultaporId($id_prov);               
//determino si envio provincia en url solamente  
                if( isset($get_provincia) || !isset($_POST['inicio_categoria']) ){
                        $getNombreProvincia = $get_provincia->getNombreProv();
                        $getNomProvi= $get_provincia->getAliasProv(); 
                        header('Location: '.BASE_URL.'/'.$lengua.'/'.$getNomProvi.'');                       
                }              
                else {
                      $getProvincia= 'registro inexistente';
                }    
        }//si no recibimos provincia ya veremos que hacemos TO-DO

  //si recibo provincia y categoria por parametro voy a ella con header
//------------------------------------------------------------------------------------------
elseif(isset($_POST['inicio_categoria']) && isset($_POST['inicio_provincia'])){ //si recibo por post la provincia
                $id_prov = $_POST['inicio_provincia'];
                $id_cate = $_POST['inicio_categoria'];
                $get_provincia = Provincias::consultaporId($id_prov);               
                $get_categoria = Categorias::consultaporId($id_cate);
                        $getNomProvi= $get_provincia->getAliasProv(); 
                        $getNomCateg= $get_categoria->getAliasCateg();
                        header('Location: '.BASE_URL.'/'.$lengua.'/'.$getNomProvi.'/'.$getNomCateg.'');                       
                  
        } //si no recibimos provincia ya veremos que hacemos TO-DO    

//fin
//------------------------------------------------------------------------------------------         
        

//=========================================================
// casteo las variables que se mostraran en el template
//==========================================================
$smarty->assign("urlHomeLogo",$urlHomeLogo,true); 
$smarty->assign("nombreProvinciaHeader",$nombreProvinciaHeader,true);
$smarty->assign("meta_datos",$meta_datos,true);
$smarty->assign("metasMetadatos",$metasMetadatos,true);
$smarty->assign("keywordsMetadatos",$keywordsMetadatos,true);
