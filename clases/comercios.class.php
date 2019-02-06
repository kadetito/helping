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
public function getIdsect                 (){return $this->id_sect                       ;}
public function getIdsevi                 (){return $this->id_sevi                       ;}
public function getNombrecomercio         (){return $this->nombre_comercio;}
public function getDescripcioncomercio    (){return $this->descripcion_comercio          ;}
public function getFechaalta              (){return $this->fecha_alta                    ;}
public function getBrevecomercio          (){return $this->breve_comercio                ;}
public function getIdtico                 (){return $this->id_tico                       ;}
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
public function getYelpcomercio           (){return $this->yelp_comercio                 ;}
public function getFotologcomercio        (){return $this->fotolog_comercio              ;}
public function getCcomerciodestacado     (){return $this->ccomercio_destacado           ;}
public function getMetadatos               (){return $this->metadatos                     ;}
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
public function setYelpcomercio           (){$this->yelp_comercio                 = $yelp_comercio;         }
public function setFotologcomercio        (){$this->fotolog_comercio              = $fotolog_comercio;      }
public function setCcomerciodestacado     (){$this->ccomercio_destacado           = $ccomercio_destacado;   }
public function setMetadatos               (){$this->metadatos                     = $metadatos;             }
public function setMetas                   (){$this->metas                         = $metas;                 }
public function setGuia                    (){$this->guia                           = $guia;                 }


		 	//constructor
	    public function __construct($guia,$metas,$metadatos,$ccomercio_destacado,$fotolog_comercio,$yelp_comercio,$youtube_comercio,$instagram_comercio,$twitter_comercio,$facebook_comercio,$url_comercio,$fax_comercio,$telefono_comercio,$codigo_postal,$direccion_comercio,$email_comercio,$id_tico,$breve_comercio,$fecha_alta,$descripcion_comercio,$nombre_comercio,$id_sevi,$id_sect,$id_pobl,$alias_provincia,$id_prov,$id_cate,$id_come=NULL)
	    {
                    $this->id_come=$id_come;
                    $this->id_cate=$id_cate;
                    $this->id_prov=$id_prov;
                    $this->alias_provincia=$alias_provincia;
                    $this->id_pobl=$id_pobl;
                    $this->id_sect=$id_sect;
                    $this->id_sevi=$id_sevi;
                    $this->nombre_comercio=$nombre_comercio;
                    $this->descripcion_comercio=$descripcion_comercio;
                    $this->fecha_alta=$fecha_alta;
                    $this->breve_comercio=$breve_comercio;
                    $this->id_tico=$id_tico;
                    $this->email_comercio=$email_comercio;
                    $this->direccion_comercio=$direccion_comercio;
                    $this->codigo_postal=$codigo_postal;
                    $this->telefono_comercio=$telefono_comercio;
                    $this->fax_comercio=$fax_comercio;
                    $this->url_comercio=$url_comercio;
                    $this->facebook_comercio=$facebook_comercio;
                    $this->twitter_comercio=$twitter_comercio;
                    $this->instagram_comercio=$instagram_comercio;
                    $this->youtube_comercio=$youtube_comercio;
                    $this->yelp_comercio=$yelp_comercio;
                    $this->fotolog_comercio=$fotolog_comercio;
                    $this->ccomercio_destacado=$ccomercio_destacado;
                    $this->metadatos=$metadatos;
                    $this->metas=$metas;
                    $this->guia=$guia;          
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
             
             
             
             
	      //**
	      // la siguiente funcion determina si el id viene vac�o (definido null en el constructor) y hace update
	      // de lo contrario hace un insert
	      //**
	     public function guardar(){
	       $conexion = new Conexion();
	       if($this->id) /*Modifica*/ {
	          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre_album = :nombre_album, descripcion_album = :descripcion_album,fecha = :fecha WHERE id = :id');
	          $consulta->bindParam(':nombre_album', $this->nombre_album);
	          $consulta->bindParam(':descripcion_album', $this->descripcion_album);
	          $consulta->bindParam(':fecha', $this->fecha);
	          $consulta->bindParam(':id', $this->id);
	          $consulta->execute();
	       }else /*Inserta*/ {
	          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre_album, descripcion_album, fecha) VALUES(:nombre_album, :descripcion_album, :fecha)');
	          $consulta->bindParam(':nombre_album', $this->nombre_album);
	          $consulta->bindParam(':descripcion_album', $this->descripcion_album);
	          $consulta->bindParam(':fecha', $this->fecha);
	          $consulta->execute();
	          $this->id = $conexion->lastInsertId();
	       }
	       $conexion = null; //cierro conexion
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
	          return new self($registro['guia'],$registro['metas'],$registro['metadatos'],$registro['ccomercio_destacado'],$registro['fotolog_comercio'],$registro['yelp_comercio'],$registro['youtube_comercio'],$registro['instagram_comercio'],$registro['twitter_comercio'],$registro['facebook_comercio'],$registro['url_comercio'],$registro['fax_comercio'],$registro['telefono_comercio'],$registro['codigo_postal'],$registro['direccion_comercio'],$registro['email_comercio'],$registro['id_tico'],$registro['breve_comercio'],$registro['fecha_alta'],$registro['descripcion_comercio'],$registro['nombre_comercio'],$registro['id_sevi'],$registro['id_sect'],$registro['id_pobl'],$registro['alias_provincia'],$registro['id_prov'],$registro['id_cate'],$idrequest);
	       } else {
	          return false;
	       }
            }  
               

 	
}
