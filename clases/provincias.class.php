<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// PROVINCIAS
// Clase que gestiona las provincias
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Provincias {
 	
		 	//defino las propiedades
		 	private $id_prov;

		 	const TABLA = 'hc_prov_provincia_cliente'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_prov;
		 	}
		 	public function getNombreProv(){
		 		return $this->nombre_provincia;	
		 	}
                        public function getAliasProv(){
		 		return $this->alias_provincia;	
		 	}
 		 	public function getDescripcion(){
		 		return $this->descripcion_provincia;	
		 	} 
  
		 	public function setId(){
		 		$this->id_prov = $id_prov;
		 	}
		 	public function setNombreProv(){
		 		$this->nombre_provincia = $nombre_provincia;	
		 	} 	
		 	public function setAliasProv(){
		 		$this->alias_provincia = $alias_provincia;	
		 	} 	
                        public function setDescripcion(){
		 		$this->descripcion_provincia = $descripcion_provincia;	
		 	} 

                        
                        
            //constructor
	    public function __construct($descripcion_provincia,$alias_provincia,$nombre_provincia,$id_prov=null)
	    {
				$this->id_prov = $id_prov;
				$this->nombre_provincia = $nombre_provincia;
                                $this->alias_provincia = $alias_provincia;
                                $this->descripcion_provincia = $descripcion_provincia;

	    }
	    

	    //**
	    // MUESTRA REGISTROS 
	    // con paginador
	    //**
            public static function consulta(){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 9999999999999;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          ORDER BY nombre_provincia DESC 
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
                      WHERE activo = 'S'
                          ORDER BY nombre_provincia DESC
                          ");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  return [ $registros ];
            }    
             
  
            
   	     public static function consultaporId($ident){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE alias_provincia = :ident');//uso la constante TABLA
	       $consulta->bindParam(':ident', $ident);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['descripcion_provincia'],$registro['alias_provincia'],$registro['nombre_provincia'],$ident);	       
               } else {   
	          return false;
	       }
           }   
           
                   
            
   	     public static function consultaporAlias($leoprovincia){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE alias_provincia = :leoprovincia  AND activo = "S" ' );//uso la constante TABLA
	       $consulta->bindParam(':leoprovincia', $leoprovincia);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['descripcion_provincia'],$registro['alias_provincia'],$registro['nombre_provincia'],$registro['id_prov'],$leoprovincia);	       
               } else {   
	          return false;
	       }
           }
           

           
  
                       
   	     public static function consultadeIdaAlias($identi){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_prov = :identi  AND activo = "S" ' );//uso la constante TABLA
	       $consulta->bindParam(':identi', $identi);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['descripcion_provincia'],$registro['alias_provincia'],$registro['nombre_provincia'],$identi);	       
               } else {   
	          return false;
	       }
           }      
           
           
           
           
           
           
           
           
            
// 	     public static function detalle($id){
//	       $conexion = new conexion(); //objeto conexion
//	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');//uso la constante TABLA
//	       $consulta->bindParam(':id', $id);
//               $consulta->bindParam(':nombre_album', $nombre_album);
//	       $consulta->execute();
//	       $registro = $consulta->fetch();
//	       if($registro){
//	          return new self($registro['nombre_album'],$registro['descripcion_album'],$registro['fecha'], $id);
//
//                  }else{
//	          return false;
//	       }
//           }
 	
}
 
