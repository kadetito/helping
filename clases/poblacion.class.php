<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// POBLACIONES
// Clase que gestiona las poblaciones
// version 1.0
// 06/02/2019
//  
//--------------------------------------------------
 
 class Poblaciones {
 	
		 	//defino las propiedades
		 	private $id_pobl;

		 	const TABLA = 'hc_pobl_poblacion_cliente'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_pobl;
		 	}
		 	public function getNombrePobl(){
		 		return $this->nombre_poblacion;	
		 	}
                        public function getIdProv(){
		 		return $this->id_prov;	
		 	}
 		 	
  
		 	public function setId(){
		 		$this->id_pobl = $id_pobl;
		 	}
		 	public function setNombrePobl(){
		 		$this->nombre_poblacion = $nombre_poblacion;	
		 	} 	
		 	public function setIdProv(){
		 		$this->id_prov = $id_prov;
		 	}

                        
                        
            //constructor
	    public function __construct($id_prov,$nombre_poblacion,$id_pobl=null)
	    {
				$this->id_pobl = $id_pobl;
				$this->nombre_poblacion = $nombre_poblacion;
                                $this->id_prov = $id_prov;

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
             
  
            //*
            //* CONSULTA MEDIANTE EL ID PROVINCIA
            //*
            //---------------------------------------------------------
            public static function consultaporId($idProvincia){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                      WHERE id_prov = :idProvincia
                          ORDER BY nombre_poblacion ASC
                          ");//uso la constante TABLA
                  $consulta->bindParam(':idProvincia', $idProvincia);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  return [ $registros ];
            }    

           
            
            public static function consultadeIdaAlias($getId_pobl){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_pobl = :identi   ' );//uso la constante TABLA
	       $consulta->bindParam(':identi', $getId_pobl);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['id_prov'],$registro['nombre_poblacion'],$getId_pobl);	       
               } else {   
	          return false;
	       }
           }      

 	
}
 
