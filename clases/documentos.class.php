<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// DOCUMENTOS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Documentos {
 	
		 	//defino las propiedades
		 	private $id_docu;
		 	private $titulo_documento;
		 	const TABLA = 'hc_docu_documentos'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_docu;
		 	}
		 	public function getNombre(){
		 		return $this->titulo_documento;	
		 	}
		 	public function getDescripcion(){
		 		return $this->descripcion_documento;	
		 	} 
		 	public function getFecha(){
		 		return $this->fecha_documento;	
		 	} 		
	                        
		 	public function setId(){
		 		$this->id_docu = $id_docu;
		 	}
		 	public function setNombre(){
		 		$this->titulo_documento = $titulo_documento;	
		 	} 	
 		 	public function setDescripcion(){
		 		$this->descripcion_documento = $descripcion_documento;	
		 	} 
		 	public function setFecha(){
		 		$this->fecha_documento = $fecha_documento;	
		 	}
                       
		 	//constructor
	    public function __construct($titulo_documento,$descripcion_documento,$fecha_documento,$id_docu=null)
	    {
				$this->id_docu = $id_docu;
				$this->fecha_documento = $fecha_documento;
				$this->descripcion_documento = $descripcion_documento;
				$this->titulo_documento = $titulo_documento;
                               
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
            public static function consultaSinPaginador(){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . "
                     
                    ORDER BY titulo_documento DESC LIMIT 8
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
  	     public static function consultaDetalle($id_docu){
	       $conexion = new conexion(); 
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_docu = :id_docu ");
	       $consulta->execute(array(':id_docu' => $id_docu));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['titulo_documento'],$registro['descripcion_documento'],$registro['fecha_documento'],$id_docu);
	       } else {
	          return false;
	       }
            }   
          

 	
}
 
 
