<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// ANUNCIOS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Anuncios {

		 	//defino las propiedades
		 	private $id_anun;
                        private $id_come;
                        private $id_tian;

		 	private $titulo_anuncio;
		 	const TABLA = 'hc_anun_anuncios_cliente'; //constante del nombre de la tabla
		
		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_anun;
		 	}
                        public function getIdCome(){
		 		return $this->id_come;
		 	}
                        public function getIdTian(){
		 		return $this->id_tian;
		 	}
                        public function getIdOfer(){
		 		return $this->id_ofer;
		 	}
		 	public function getTitulo(){
		 		return $this->titulo_anuncio;	
		 	}
                        public function getImagen(){
		 		return $this->imagen_anuncio;	
		 	} 
		 	public function getDescripcion(){
		 		return $this->descripcion_anuncio;	
		 	} 
		 	public function getFecha(){
		 		return $this->fecha_creacion;	
		 	} 
                        public function getTags(){
		 		return $this->tags_anuncio;	
		 	}
                        public function getActivo(){
		 		return $this->activo;	
		 	} 
                        public function getUrl(){
		 		return $this->url;	
		 	} 
                        
		 	public function setId(){
		 		$this->id_anun = $id_anun;
		 	}
                        public function setIdCome(){
		 		$this->id_come = $id_come;
		 	}
                        public function setIdTian(){
		 		$this->id_tian = $id_tian;
		 	}
                        public function setIdOfer(){
		 		$this->id_ofer = $id_ofer;
		 	}
		 	public function setTitulo(){
		 		$this->titulo_anuncio = $titulo_anuncio;	
		 	} 
                        public function setImagen(){
		 		$this->imagen_anuncio = $imagen_anuncio;	
		 	} 
 		 	public function setDescripcion(){
		 		$this->descripcion_anuncio = $descripcion_anuncio;	
		 	} 
		 	public function setFecha(){
		 		$this->fecha_creacion = $fecha_creacion;	
		 	} 
                        public function setTags(){
		 		$this->tags_anuncio = $tags_anuncio;	
		 	} 
                        public function setActivo(){
		 		$this->activo = $activo;	
		 	} 
                        public function setUrl(){
		 		$this->url = $url;	
		 	} 
		 	//constructor
	    public function __construct($id_anun=NULL,$id_come,$id_tian,$id_ofer,$titulo_anuncio,$imagen_anuncio,$descripcion_anuncio,$fecha_creacion,$tags_anuncio,$activo,$url)
	    {
                        $this->id_anun              = $id_anun;
                        $this->id_come              = $id_come;
                        $this->id_tian              = $id_tian;
                        $this->id_ofer              = $id_ofer;
                        $this->titulo_anuncio	      = $titulo_anuncio;	
                        $this->imagen_anuncio	      = $imagen_anuncio;	
                        $this->descripcion_anuncio  = $descripcion_anuncio;	
                        $this->fecha_creacion	      = $fecha_creacion;	
                        $this->tags_anuncio	        = $tags_anuncio;	
                        $this->activo	              = $activo;
                        $this->url	              = $url;
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
	     
	      
	    public function eliminar(){
	       $conexion = new Conexion();
	       if($this->id) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id = :id');
	          $consulta->bindParam(':id', $this->id);
	          $consulta->execute();
	          
	          $consultaB = $conexion->prepare('DELETE FROM ' . self::TABLA_F .'  WHERE id_album = :id');
	          $consultaB->bindParam(':id', $this->id);
	          $consultaB->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     

   
	     	     
	    //**
	    // MUESTRA REGISTROS
	    // con paginador
	    //**
            public static function consulta(){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 5;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;

                  $conexion = new conexion();//objeto conexion
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          ORDER BY nombre_album DESC 
                          LIMIT {$inicio},{$porPagina}");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 

                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  $paGinas = ceil($total / $porPagina);

                  return [ $registros, $paGinas, $porPagina, $pagina ];
            }
 	      //**
	      // MUESTRA REGISTROS
	      // SIN paginador
	      //**
            public static function consultaSinPaginador($nombreProvincia,$paginaActual){  
                  $conexion = new conexion();//objeto conexion
                   $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                    WHERE activo = 'S' 
                    AND pagina_anuncio = :paginaActual
                    AND alias_provincia = :nombreprovincia
                    ORDER BY fecha_creacion DESC
                          LIMIT 0,10");//uso la constante TABLA
                  $consulta->bindParam(':nombreprovincia', $nombreProvincia);
                  $consulta->bindParam(':paginaActual', $paginaActual);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
            }    
             

 	
}
 


