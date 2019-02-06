<?php

//---------------------------------------------------
//
// SETTINGS -  PDO orientada a Objetos
// Clase que gestiona las variables constantes fijas
// metas, superuser, etc
// version 1.0
// 08/12/2018
// fichero de conexion en el archivo PHP que invoca a Smarty
//--------------------------------------------------
 
 class Settings {
 		
		 	//defino las propiedades
                        private $id_sett; 
                        
		 	const TABLA = 'hc_sett_settings_generales';


		 	
		 	//metodos getters y setters
                        public function getIdSettings() { 
                            return $this->id_sett; 
                            }
                        public function getTituloSettings() { 
                            return $this->titulo_general;      
                        }
                        public function getVersionSettings() { 
                            return $this->version;         
                        }
                        public function getMetaTagsSettings() { 
                            return $this->meta_tags;           
                        }
                        public function getAnalyticsSettings() { 
                            return $this->codigo_analytics;   
                        }
                        public function getFaviconSettings() { 
                            return $this->favicon;        
                            }
                        public function getOgimagenSettings() { 
                            return $this->og_imagen;      
                            }
                        public function getEmailTecnicoSettings() { 
                            return $this->email_tecnico;  
                            }
                        public function getEmailComercialSettings() { 
                            return $this->email_comercial;     
                        }
                        public function getTelefonoSettings() { 
                            return $this->telefono;       
                            }
                        public function getEmailAtencionSettings() { 
                            return $this->email_atencion;     
                        }
                        public function getAutorSettings() { 
                            return $this->autor;               
                        }
                        public function getMetaDatosSettings() { 
                            return $this->meta_datos;         
                        }


                        public function setIdSettings() { 
                            return $this->id_sett = $id_sett;
                        }
                        public function setTituloSettings() { 
                            return $this->titulo_general = $titulo_general; 
                            }
                        public function setVersionSettings() { 
                            return $this->version = $version;            
                        }
                        public function setMetaTagsSettings() { 
                            return $this->meta_tags = $meta_tags;           
                        }
                        public function setAnalyticsSettings() { 
                            return $this->codigo_analytics = $codigo_analytics;   
                        }
                        public function setFaviconSettings() { 
                            return $this->favicon = $favicon;             
                        }
                        public function setOgimagenSettings() { 
                            return $this->og_imagen = $og_imagen;           
                        }
                        public function setEmailTecnicoSettings() { 
                            return $this->email_tecnico = $email_tecnico;      
                        }
                        public function setEmailComercialSettings() { 
                            return $this->email_comercial = $email_comercial;    
                        }
                        public function setTelefonoSettings() { 
                            return $this->telefono = $telefono;           
                        }
                        public function setEmailAtencionSettings() { 
                            return $this->email_atencion = $email_atencion; 
                            }
                        public function setAutorSettings() { 
                            return $this->autor = $atencion;              
                        }
                        public function setMetaDatosSettings() { 
                            return $this->meta_datos = $meta_datos;         
                        }


            //constructor
	    public function __construct($meta_datos,$autor,$email_atencion,$telefono,$email_comercial,$email_tecnico,$og_imagen,$favicon,$codigo_analytics,$meta_tags,$version,$titulo_general,$id_sett=NULL)
	    {
                
                 $this->meta_datos        = $meta_datos; 
                 $this->autor             = $autor; 
                 $this->email_atencion    = $email_atencion;  
                 $this->telefono          = $telefono; 
                 $this->email_comercial   = $email_comercial; 
                 $this->email_tecnico     = $email_tecnico;
                 $this->og_imagen         = $og_imagen; 
                 $this->favicon           = $favicon; 
                 $this->codigo_analytics  = $codigo_analytics;            
                 $this->meta_tags         = $meta_tags; 
                 $this->version           = $version;  
                 $this->titulo_general    = $titulo_general;	
                 $this->id_sett           = $id_sett;					


	    }
	      //**
	      //
	      // la siguiente funcion determina si el id viene vac�o (definido null en el constructor) y hace update
	      // de lo contrario hace un insert
	      //
	      //**
	     public function guardar(){
	       $conexion = new Conexion();
	          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' 
                          SET 
                          version = :version, 
                          idioma = :idioma,
                          metas = :metas,
                          autor = :autor,
                          company = :company,
                          webdeveloper = :webdeveloper,
                          developer = :developer,
                          directorio = :directorio
                  WHERE id = :id');
	          $consulta->bindParam(':id', $this->id);
 	          $consulta->bindParam(':version', $this->version);   
                  $consulta->bindParam(':idioma', $this->idioma);
                  $consulta->bindParam(':metas', $this->metas);
                  $consulta->bindParam(':autor', $this->autor);
                  $consulta->bindParam(':company', $this->company);
                  $consulta->bindParam(':webdeveloper', $this->webdeveloper);
                  $consulta->bindParam(':developer', $this->developer);
                  $consulta->bindParam(':directorio', $this->directorio);
	          $consulta->execute();
	       $conexion = null; //cierro conexion
	     }
             
             
	      //**
	      //
	      // MUESTRA UN UNICO REGISTRO CON ID 1
	      // 
	      //
	      //**
 	     public static function detalleSettings($iduno){
	       $conexion = new conexion(); //objeto conexion
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_sett = :id');//uso la constante TABLA
	       $consulta->bindParam(':id', $iduno);
	       $consulta->execute();
	       $registro = $consulta->fetch();
	       if($registro){
	          return new self(
                            $registro['meta_datos'], 
                            $registro['autor'], 
                            $registro['email_atencion'],  
                            $registro['telefono'], 
                            $registro['email_comercial'], 
                            $registro['email_tecnico'],
                            $registro['og_imagen'], 
                            $registro['favicon'], 
                            $registro['codigo_analytics'],            
                            $registro['meta_tags'], 
                            $registro['version'],  
                            $registro['titulo_general'],	
                            $registro['id_sett'],
                            $iduno
                         );
                          
	       }else{
	          return false;
	       }
             }
 	
}
 
 
