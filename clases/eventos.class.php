<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// EVENTOS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Eventos {
 	
		 	//defino las propiedades
		 	private $id_even;
		 	private $titulo_descripcion;
		 	const TABLA = 'hc_even_eventos'; //constante del nombre de la tabla
		 	const TABLA_F = 'hc_foto_imagenes_general';
		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_even;
		 	}
		 	public function getNombre(){
		 		return $this->titulo_evento;	
		 	}
		 	public function getDescripcion(){
		 		return $this->descripcion_evento;	
		 	} 
		 	public function getFecha(){
		 		return $this->fecha_inicio;	
		 	} 		

                        public function getMetaDatos(){
		 		return $this->metadatos;	
		 	}
                         public function getMetaTags(){
		 		return $this->metas;	
		 	}
		 	public function setId(){
		 		$this->id_even = $id_even;
		 	}
		 	public function setNombre(){
		 		$this->titulo_evento = $titulo_evento;	
		 	} 	
 		 	public function setDescripcion(){
		 		$this->descripcion_evento = $descripcion_evento;	
		 	} 
		 	public function setFecha(){
		 		$this->fecha_inicio = $fecha_inicio;	
		 	}

                        public function setMetaDatos(){
		 		$this->metadatos = $metadatos;	
		 	}
                        public function setMetaTags(){
		 		$this->metas = $metas;	
		 	}
		 	//constructor
	    public function __construct($metas,$metadatos,$titulo_evento,$descripcion_evento,$fecha_inicio,$id_even=null)
	    {
				$this->id_even = $id_even;
				$this->fecha_inicio = $fecha_inicio;
				$this->descripcion_evento = $descripcion_evento;
				$this->titulo_evento = $titulo_evento;
                                $this->metadatos = $metadatos;
                                $this->metas = $metas;
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
            public static function consultaSinPaginador($nombreProvincia){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                        WHERE alias_provincia = :nombreprovincia
                    ORDER BY titulo_evento DESC LIMIT 3
                          ");//uso la constante TABLA
                  $consulta->bindParam(':nombreprovincia', $nombreProvincia);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
            }   
            
  	   
           
             //**
	     // OBTENER DETALLE
	     // obtiene el detalle del registro pedido por url get
	     //**
  	     public static function consultaDetalle($id_even){
	       $conexion = new conexion(); 
               $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_even = :id_even ");
	       $consulta->execute(array(':id_even' => $id_even));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['metas'],$registro['metadatos'],$registro['titulo_evento'],$registro['descripcion_evento'],$registro['fecha_inicio'],$id_even);
	       } else {
	          return false;
	       }
            }   
             
          


 	
}
 

