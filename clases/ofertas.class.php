<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// OFERTAS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Ofertas {

		 	//defino las propiedades
		 	private $id_ofer;
                        private $id_come;
                        
		 	private $titulo_destacado;
		 	const TABLA = 'hc_ofer_ofertas_cliente'; //constante del nombre de la tabla
		
		 	//metodos getters y setters
                        public function getIdCome(){
		 		return $this->id_come;
		 	}
                        public function getId(){
		 		return $this->id_ofer;
		 	}
		 	public function getTitulo(){
		 		return $this->titulo_destacado;	
		 	}
                        public function getResumen(){
		 		return $this->resumen_destacado;	
		 	} 
		 	public function getDescripcion(){
		 		return $this->texto_destacado;	
		 	} 
		 	public function getFecha(){
		 		return $this->fecha;	
		 	} 
                        public function getImagen(){
		 		return $this->imagen_destacado;	
		 	} 
public function getMetaData(){
		 		return $this->metadatos;	
		 	} 
public function getMeta(){
		 		return $this->metas;	
		 	}                         
                        public function setIdCome(){
		 		$this->id_come = $id_come;
		 	}
                        public function setId(){
		 		$this->id_ofer = $id_ofer;
		 	}
		 	public function setTitulo(){
		 		$this->titulo_destacado = $titulo_destacado;	
		 	} 
                        public function setResumen(){
		 		$this->resumen_destacado = $resumen_destacado;	
		 	} 
 		 	public function setDescripcion(){
		 		$this->texto_destacado = $texto_destacado;	
		 	} 
		 	public function setFecha(){
		 		$this->fecha = $fecha;	
		 	} 
                        public function setImagen(){
		 		$this->imagen_destacado = $imagen_destacado;	
		 	} 
                        public function setAliasProvincia(){
		 		$this->alias_provincia = $alias_provincia;	
		 	} 
                        public function setMetaData(){
		 		$this->metadatos = $metadatos;	
		 	} 
                        public function setMeta(){
		 		$this->metas = $metas;	
		 	} 
		 	//constructor
	    public function __construct($metadatos,$metas,$alias_provincia,$imagen_destacado,$fecha,$texto_destacado,$resumen_destacado,$titulo_destacado,$id_come,$id_ofer=NULL)
	    {
                
                        $this->metadatos         = $metadatos          ;
                        $this->metas             = $metas              ;
                        $this->alias_provincia   = $alias_provincia    ;
                        $this->imagen_destacado  = $imagen_destacado   ;
                        $this->fecha             = $fecha              ;
                        $this->texto_destacado   = $texto_destacado    ;
                        $this->resumen_destacado = $resumen_destacado  ;
                        $this->titulo_destacado  = $titulo_destacado   ;
                        $this->id_come           = $id_come            ;
                        $this->id_ofer      = $id_ofer      ;

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
                          ORDER BY fecha DESC
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
  	     public static function consultaDetalle($id_ofer){
	       $conexion = new conexion(); 
               $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_ofer = :id_ofer ");
	       $consulta->execute(array(':id_ofer' => $id_ofer));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['metadatos'],$registro['metas'],$registro['alias_provincia'],$registro['imagen_destacado'],$registro['fecha'],$registro['texto_destacado'],$registro['resumen_destacado'],$registro['titulo_destacado'],$registro['id_come'],$id_ofer);
	       } else {
	          return false;
	       }
            }   
        
 	
}
 
