<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// COMERCIOS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Comercios {
 	
		 	//defino las propiedades
		 	private $id_come;
	
		 	const TABLA = 'hc_come_comercio_cliente'; //constante del nombre de la tabla

		 	//metodos getters y setters
public function getIdcome                 (){return $this->id_come                       ;}
public function getIdcate                 (){return $this->id_cate                       ;}
public function getIdprov                 (){return $this->id_prov                       ;}
public function getAliasprovincia         (){return $this->alias_provincia               ;}
public function getIdpobl                 (){return $this->id_pobl                       ;}
public function getIdtico                 (){return $this->id_tico                       ;}
public function getIdsect                 (){return $this->id_sect                       ;}
public function getNombrecomercio         (){return $this->nombre_comercio;}
public function getDescripcioncomercio    (){return $this->descripcion_comercio          ;}
public function getFechaalta              (){return $this->fecha_alta                    ;}
public function getBrevecomercio          (){return $this->breve_comercio                ;}
public function getEmailcomercio          (){return $this->email_comercio                ;}
public function getDireccioncomercio      (){return $this->direccion_comercio            ;}
public function getCodigopostal           (){return $this->codigo_postal                 ;}
public function getTelefonocomercio       (){return $this->telefono_comercio             ;}
public function getFaxcomercio            (){return $this->fax_comercio                  ;}
public function getUrlcomercio            (){return $this->url_comercio                  ;}
public function getFacebookcomercio       (){return $this->facebook_comercio             ;}
public function getTwittercomercio        (){return $this->twitter_comercio              ;}
public function getInstagramcomercio      (){return $this->instagram_comercio            ;}
public function getYoutubecomercio        (){return $this->youtube_comercio              ;}
public function getCcomerciodestacado     (){return $this->ccomercio_destacado           ;}
public function getMetas                   (){return $this->metas                         ;}
public function getGuia                    (){return $this->guia                          ;}
                        
                        
public function setIdcome                 (){$this->id_come                       = $id_come;               }
public function setIdcate                 (){$this->id_cate                       = $id_cate;               }
public function setIdprov                 (){$this->id_prov                       = $id_prov;               }
public function setAliasprovincia         (){$this->alias_provincia               = $alias_provincia;       }
public function setIdpobl                 (){$this->id_pobl                       = $id_pobl;               }
public function setIdsect                 (){$this->id_sect                       = $id_sect;               }
public function setIdsevi                 (){$this->id_sevi                       = $id_sevi;               }
public function setNombrecomercio         (){$this->nombre_comercio = $nombre_comercio; }
public function setDescripcioncomercio    (){$this->descripcion_comercio          = $descripcion_comercio;  }
public function setFechaalta              (){$this->fecha_alta                    = $fecha_alta;            }
public function setBrevecomercio          (){$this->breve_comercio                = $breve_comercio;        }
public function setIdtico                 (){$this->id_tico                       = $id_tico;               }
public function setEmailcomercio          (){$this->email_comercio                = $email_comercio;        }
public function setDireccioncomercio      (){$this->direccion_comercio            = $direccion_comercio;    }
public function setCodigopostal           (){$this->codigo_postal                 = $codigo_postal;         }
public function setTelefonocomercio       (){$this->telefono_comercio             = $telefono_comercio;     }
public function setFaxcomercio            (){$this->fax_comercio                  = $fax_comercio;          }
public function setUrlcomercio            (){$this->url_comercio                  = $url_comercio;          }
public function setFacebookcomercio       (){$this->facebook_comercio             = $facebook_comercio;     }
public function setTwittercomercio        (){$this->twitter_comercio              = $twitter_comercio;      }
public function setInstagramcomercio      (){$this->instagram_comercio            = $instagram_comercio;    }
public function setYoutubecomercio        (){$this->youtube_comercio              = $youtube_comercio;      }
public function setCcomerciodestacado     (){$this->ccomercio_destacado           = $ccomercio_destacado;   }
public function setMetas                   (){$this->metas                         = $metas;                 }
public function setGuia                    (){$this->guia                           = $guia;                 }


//	   //constructor
//	    public function __construct($id_cate,$id_prov,$id_pobl,$id_tico,$id_sect,$nombre_comercio,$descripcion_comercio,$fecha_alta,$breve_comercio,$email_comercio,$direccion_comercio,$codigo_postal,$telefono_comercio,$fax_comercio,$url_comercio,$facebook_comercio,$twitter_comercio,$instagram_comercio,$youtube_comercio,$ccomercio_destacado,$metas,$guia,$id_come=NULL)
//                  {
//                    
//                    $this->id_cate=$id_cate;
//                    $this->id_prov=$id_prov;
////                    $this->alias_provincia=$alias_provincia;
//                    $this->id_pobl=$id_pobl;
//                    $this->id_tico=$id_tico;
//                    $this->id_sect=$id_sect;
//                    $this->nombre_comercio=$nombre_comercio;
//                    $this->descripcion_comercio=$descripcion_comercio;
//                    $this->fecha_alta=$fecha_alta;
//                    $this->breve_comercio=$breve_comercio;
//                    $this->email_comercio=$email_comercio;
//                    $this->direccion_comercio=$direccion_comercio;
//                    $this->codigo_postal=$codigo_postal;
//                    $this->telefono_comercio=$telefono_comercio;
//                    $this->fax_comercio=$fax_comercio;
//                    $this->url_comercio=$url_comercio;
//                    $this->facebook_comercio=$facebook_comercio;
//                    $this->twitter_comercio=$twitter_comercio;
//                    $this->instagram_comercio=$instagram_comercio;
//                    $this->youtube_comercio=$youtube_comercio;
//                    $this->ccomercio_destacado=$ccomercio_destacado;
//                    $this->metas=$metas;
//                    $this->guia=$guia; 
//                    $this->id_come=$id_come;
//	    }
 //constructor
	    public function __construct($nombre_comercio,$breve_comercio,$descripcion_comercio,$fecha_alta,$email_comercio,$direccion_comercio,$codigo_postal,$telefono_comercio,$fax_comercio,$url_comercio,$id_cate,$id_prov,$id_pobl,$id_sect,$id_tico,$guia,$metas,$ccomercio_destacado,$youtube_comercio,$instagram_comercio,$twitter_comercio,$facebook_comercio,$alias_provincia,$id_come=NULL)
                  {
                    
                    $this->nombre_comercio=$nombre_comercio;
                    $this->breve_comercio=$breve_comercio;
                    $this->descripcion_comercio=$descripcion_comercio;
                    $this->fecha_alta=$fecha_alta;
                    $this->email_comercio=$email_comercio;      
                    $this->direccion_comercio=$direccion_comercio;  
                    $this->codigo_postal=$codigo_postal;       
                    $this->telefono_comercio=$telefono_comercio;   
                    $this->fax_comercio=$fax_comercio;        
                    $this->url_comercio=$url_comercio;
                    $this->id_cate=$id_cate;
                    $this->id_prov=$id_prov;
                    $this->id_pobl=$id_pobl;
                    $this->id_sect=$id_sect;
                    $this->id_tico=$id_tico;
                    $this->guia=$guia;
                    $this->metas=$metas;
                    $this->ccomercio_destacado=$ccomercio_destacado;
                    $this->youtube_comercio=$youtube_comercio;
                    $this->instagram_comercio=$instagram_comercio;
                    $this->twitter_comercio=$twitter_comercio;
                    $this->facebook_comercio=$facebook_comercio;
                    $this->alias_provincia=$alias_provincia;
                    $this->id_come=$id_come;
                    
	    }           
            

                             
                
              //**----------------------------
	      // UPDATE
	      // actualiza la visibilidad que envia el boton activar o desactivar del listado
	      //**---------------------
	     public function updateRegistro($id_come,$activacion){
	       $conexion = new Conexion();
	          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET activo = :activacion WHERE id_come = :id_come');
	          $consulta->bindParam(':activacion', $activacion);
	          $consulta->bindParam(':id_come', $id_come);
	          $consulta->execute();
                  $conexion = null; //cierro conexion
	     }
               //**----------------------------
	      // UPDATE TOTAL
	      // actualiza todo el registro
	      //**---------------------
	     public static function updateTotalRegistro($setId_come,$setId_cate,$setId_prov,$setId_pobl,$setId_tico,$setId_sect,$setComerTitulo,$setBreve_comercio,$setDescripcion_comercio,$setEmail_comercio,$setDireccion_comercio,$setCodigo_postal,$setTelefono_comercio,$setFax_comercio,$setUrl_comercio,$setFacebook_comercio,$setTwitter_comercio,$setInstagram_comercio,$setYoutube_comercio,$setCcomercio_destacado,$setMetas){
	       $conexion = new Conexion();
	        $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET 

                id_cate                 = :setId_cate                  , 
                id_prov                 = :setId_prov                  , 
                id_pobl                 = :setId_pobl                  , 
                id_tico                 = :setId_tico                  , 
                id_sect                 = :setId_sect                  , 
                nombre_comercio         = :setComerTitulo              , 
                breve_comercio          = :setBreve_comercio           , 
                descripcion_comercio    = :setDescripcion_comercio     , 
                email_comercio          = :setEmail_comercio           , 
                direccion_comercio      = :setDireccion_comercio       , 
                codigo_postal           = :setCodigo_postal            , 
                telefono_comercio       = :setTelefono_comercio        , 
                fax_comercio            = :setFax_comercio             , 
                url_comercio            = :setUrl_comercio             , 
                facebook_comercio       = :setFacebook_comercio        , 
                twitter_comercio        = :setTwitter_comercio         , 
                instagram_comercio      = :setInstagram_comercio       , 
                youtube_comercio        = :setYoutube_comercio         , 
                ccomercio_destacado     = :setCcomercio_destacado      , 
                metas                   = :setMetas                      
                   WHERE id_come = :setId_come');
                $consulta->bindParam(':setId_come',$setId_come);
                $consulta->bindParam(':setId_cate',$setId_cate);
                $consulta->bindParam(':setId_prov',$setId_prov);
                $consulta->bindParam(':setId_pobl',$setId_pobl);
                $consulta->bindParam(':setId_tico',$setId_tico);
                $consulta->bindParam(':setId_sect',$setId_sect);
                $consulta->bindParam(':setComerTitulo',$setComerTitulo);
                $consulta->bindParam(':setBreve_comercio',$setBreve_comercio);
                $consulta->bindParam(':setDescripcion_comercio',$setDescripcion_comercio);
                $consulta->bindParam(':setEmail_comercio',$setEmail_comercio);
                $consulta->bindParam(':setDireccion_comercio',$setDireccion_comercio);
                $consulta->bindParam(':setCodigo_postal',$setCodigo_postal);
                $consulta->bindParam(':setTelefono_comercio',$setTelefono_comercio);
                $consulta->bindParam(':setFax_comercio',$setFax_comercio);
                $consulta->bindParam(':setUrl_comercio',$setUrl_comercio);
                $consulta->bindParam(':setFacebook_comercio',$setFacebook_comercio);
                $consulta->bindParam(':setTwitter_comercio',$setTwitter_comercio);
                $consulta->bindParam(':setInstagram_comercio',$setInstagram_comercio);
                $consulta->bindParam(':setYoutube_comercio',$setYoutube_comercio);
                $consulta->bindParam(':setCcomercio_destacado',$setCcomercio_destacado);
                $consulta->bindParam(':setMetas',$setMetas);

	          $consulta->execute();
                  $conexion = null; //cierro conexion
	     }            
             
//              //**----------------------------
//	      // INSERT TOTAL
//	      // inserta todo el registro
//	      //**---------------------
//	     public function inserTotalRegistro(){
//                $conexion = new conexion();//objeto conexion
//                $conexion->exec("SET NAMES 'utf8'");
//
//                $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id_cate,id_prov,id_pobl,id_tico,id_sect,nombre_comercio,breve_comercio,descripcion_comercio,fecha_alta,email_comercio,direccion_comercio,codigo_postal,telefono_comercio,fax_comercio,url_comercio,facebook_comercio,twitter_comercio,instagram_comercio,youtube_comercio,ccomercio_destacado,metas,guia) VALUES (:id_cate,:id_prov,:id_pobl,:id_tico,:id_sect,:nombre_comercio,:breve_comercio,:descripcion_comercio,:fecha_alta,:email_comercio,:direccion_comercio,:codigo_postal,:telefono_comercio,:fax_comercio,:url_comercio,:facebook_comercio,:twitter_comercio,:instagram_comercio,:youtube_comercio,:ccomercio_destacado,:metas,:guia)');
//
// $consulta->bindParam(':id_cate',$this->id_cate);
//                 $consulta->bindParam(':id_prov',$this->id_prov);
//                 $consulta->bindParam(':id_pobl',$this->id_pobl);
//                 $consulta->bindParam(':id_tico',$this->id_tico);
//                 $consulta->bindParam(':id_sect',$this->id_sect);
//                 $consulta->bindParam(':nombre_comercio',$this->nombre_comercio);
//                 $consulta->bindParam(':breve_comercio',$this->breve_comercio);
//                 $consulta->bindParam(':descripcion_comercio',$this->descripcion_comercio);
//                 $consulta->bindParam(':fecha_alta',$this->fecha_alta);
//                 $consulta->bindParam(':email_comercio',$this->email_comercio);
//                 $consulta->bindParam(':direccion_comercio',$this->direccion_comercio);
//                 $consulta->bindParam(':codigo_postal',$this->codigo_postal);
//                 $consulta->bindParam(':telefono_comercio',$this->telefono_comercio);
//                 $consulta->bindParam(':fax_comercio',$this->fax_comercio);
//                 $consulta->bindParam(':url_comercio',$this->url_comercio);
//                 $consulta->bindParam(':facebook_comercio',$this->facebook_comercio);
//                 $consulta->bindParam(':twitter_comercio',$this->twitter_comercio);
//                 $consulta->bindParam(':instagram_comercio',$this->instagram_comercio);
//                 $consulta->bindParam(':youtube_comercio',$this->youtube_comercio);
//                 $consulta->bindParam(':ccomercio_destacado',$this->ccomercio_destacado);
//                 $consulta->bindParam(':metas',$this->metas);
//                 $consulta->bindParam(':guia',$this->guia);
//	        $consulta->execute();
//	        $this->id_come= $conexion->lastInsertId();
//                
//                $conexion = null;
//	     }       
             
  //**----------------------------
	      // INSERT TOTAL
	      // inserta todo el registro
	      //**---------------------
	     public function inserTotalRegistro(){
                $conexion = new conexion();//objeto conexion
                $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (nombre_comercio,breve_comercio,descripcion_comercio,fecha_alta,email_comercio,direccion_comercio,codigo_postal,telefono_comercio,fax_comercio,url_comercio,id_cate,id_prov,id_pobl,id_sect,id_tico,guia,metas,ccomercio_destacado,youtube_comercio,instagram_comercio,twitter_comercio,facebook_comercio,alias_provincia) VALUES (:nombre_comercio, :breve_comercio, :descripcion_comercio, :fecha_alta,:email_comercio,:direccion_comercio,:codigo_postal,:telefono_comercio,:fax_comercio,:url_comercio,:id_cate,:id_prov,:id_pobl,:id_sect,:id_tico,:guia,:metas,:ccomercio_destacado,:youtube_comercio,:instagram_comercio,:twitter_comercio,:facebook_comercio,:alias_provincia)');
                $consulta->bindParam(':nombre_comercio',$this->nombre_comercio);
                $consulta->bindParam(':breve_comercio',$this->breve_comercio);
                $consulta->bindParam(':descripcion_comercio',$this->descripcion_comercio);
                $consulta->bindParam(':fecha_alta',$this->fecha_alta);
                $consulta->bindParam(':email_comercio',    $this->email_comercio);      
                $consulta->bindParam(':direccion_comercio',$this->direccion_comercio);  
                $consulta->bindParam(':codigo_postal',     $this->codigo_postal);       
                $consulta->bindParam(':telefono_comercio', $this->telefono_comercio);   
                $consulta->bindParam(':fax_comercio',      $this->fax_comercio);        
                $consulta->bindParam(':url_comercio',      $this->url_comercio);    
                $consulta->bindParam(':id_cate',      $this->id_cate); 
                $consulta->bindParam(':id_prov',      $this->id_prov); 
                $consulta->bindParam(':id_pobl',      $this->id_pobl); 
                $consulta->bindParam(':id_sect',      $this->id_sect); 
                $consulta->bindParam(':id_tico',      $this->id_tico); 
                $consulta->bindParam(':guia',      $this->guia); 
                $consulta->bindParam(':metas', $this->metas); 
                $consulta->bindParam(':ccomercio_destacado', $this->ccomercio_destacado); 
                $consulta->bindParam(':youtube_comercio', $this->youtube_comercio); 
                $consulta->bindParam(':instagram_comercio',$this->instagram_comercio); 
                $consulta->bindParam(':twitter_comercio', $this->twitter_comercio); 
                $consulta->bindParam(':facebook_comercio',$this->facebook_comercio); 
                $consulta->bindParam(':alias_provincia',  $this->alias_provincia); 
                        echo '<script>alert("'.$this->alias_provincia.'")</script>';
                $consulta->execute();
                $this->id = $conexion->lastInsertId();
	     }                  	 

	     
	      
	    public function eliminarRegistro($id_come){
//                echo '<script>alert("hola")</script>';
	       $conexion = new Conexion();
	       if($id_come) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_come = :id_come');
	          $consulta->bindParam(':id_come', $id_come);
	          $consulta->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     

   
	   
 	      //**
	      // MUESTRA REGISTROS
	      // SIN paginador
	      //**
            public static function consultaSinPaginador($nombreProvincia){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                      WHERE alias_provincia = :nombreprovincia
                    ORDER BY nombre_comercio DESC 
                          ");//uso la constante TABLA
                    $consulta->bindParam(':nombreprovincia', $nombreProvincia);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
            }   
            
   	      //**
	      // MUESTRA REGISTROS
	      // para el admin
	      //**    
            
             public static function consultaConPaginadorniID(){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 15;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;

                  $conexion = new conexion();//objeto conexion
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                           ORDER BY fecha_alta DESC 
                          LIMIT {$inicio},{$porPagina}");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 

                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  $paGinas = ceil($total / $porPagina);

                  return [ $registros, $paGinas, $porPagina, $pagina ];
            }           
  	    //**
	    // MUESTRA REGISTROS
	    // por provincia y categoria
	    //**
            
            public static function consultaComerPorProvinyCat($nombreProvincia,$identiCat){ 
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                   WHERE id_cate = :identicat
                       AND alias_provincia = :nombreProvincia
                    ORDER BY nombre_comercio DESC 
                          ");//uso la constante TABLA
	       $consulta->bindParam(':nombreProvincia', $nombreProvincia);
               $consulta->bindParam(':identicat', $identiCat);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
            }   
            
            
             //**
	     // OBTENER DETALLE
	     // obtiene el detalle del registro pedido por url get
	     //**
  	     public static function consultaDetalle($idrequest){
	       $conexion = new conexion(); 
                  $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_come = :id_come ");
	       $consulta->execute(array(':id_come' => $idrequest));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['nombre_comercio'],$registro['breve_comercio'],$registro['descripcion_comercio'],$registro['fecha_alta'],$registro['email_comercio'],$registro['direccion_comercio'],$registro['codigo_postal'],$registro['telefono_comercio'],$registro['fax_comercio'],$registro['url_comercio'],$registro['id_cate'],$registro['id_prov'],$registro['id_pobl'],$registro['id_sect'],$registro['id_tico'],$registro['guia'],$registro['metas'],$registro['ccomercio_destacado'],$registro['youtube_comercio'],$registro['instagram_comercio'],$registro['twitter_comercio'],$registro['facebook_comercio'],$registro['alias_provincia'],$idrequest);
	       } else {
	          return false;
	       }
            }  
               

 	
}
