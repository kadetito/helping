<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// SECTORES
// Clase que gestiona los sectores
// version 1.0
// 06/02/2019
//  
//--------------------------------------------------
 
 class Sectores {
 	
		 	//defino las propiedades
		 	private $id_sect;

		 	const TABLA = 'hc_sect_sector_cliente'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_sect;
		 	}
		 	public function getNombreSect(){
		 		return $this->nombre_sector;	
		 	}

 		 	
  
		 	public function setId(){
		 		$this->id_sect = $id_sect;
		 	}
		 	public function setNombreSect(){
		 		$this->nombre_sector = $nombre_sector;	
		 	} 	

                        
                        
            //constructor
	    public function __construct($nombre_sector,$id_sect=null)
	    {
				$this->id_sect = $id_sect;
				$this->nombre_sector = $nombre_sector;

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
                          ORDER BY nombre_sector DESC
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

            
             public static function consultadeIdaAlias($getId_sect){ 
	       $conexion = new conexion(); 
               $conexion->exec("SET NAMES 'utf8'");
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_sect = :identi   ' );//uso la constante TABLA
	       $consulta->bindParam(':identi', $getId_sect);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['nombre_sector'],$getId_sect);	       
               } else {   
	          return false;
	       }
           }      
           

 	
}
 
