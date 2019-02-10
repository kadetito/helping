<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// SERVICIOS
// Clase que gestiona los servicios
// version 1.0
// 06/02/2019
//  
//--------------------------------------------------
 
 class Servicios {
 	
		 	//defino las propiedades
		 	private $id_serv;

		 	const TABLA = 'hc_serv_servicios_categoria'; //constante del nombre de la tabla
		 	const TABLA2 = 'hc_util_servicios_utilidad'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getIdCat(){
		 		return $this->id_serv;
		 	}
		 	public function getNombreCatServ(){
		 		return $this->nombre_catservicio;	
		 	}

 		 	
  
		 	public function setIdCat(){
		 		$this->id_serv = $id_serv;
		 	}
		 	public function setNombreCatServ(){
		 		$this->nombre_catservicio = $nombre_catservicio;	
		 	} 	

                        
                        
            //constructor
	    public function __construct($nombre_catservicio,$id_serv=null)
	    {
				$this->nombre_catservicio = $nombre_catservicio;
                                $this->id_serv = $id_serv;
	    }
	    

	    //**
	    // MUESTRA REGISTROS  CATEG
	    // con paginador
	    //**
            public static function consulta(){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 9999999999999;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          ORDER BY nombre_catservicio DESC 
                          LIMIT {$inicio},{$porPagina}");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  $paGinas = ceil($total / $porPagina);

                  return [ $registros, $paGinas, $porPagina, $pagina ];
            }
 

            //**
	    // MUESTRA REGISTROS CATEG
	    // SIN paginador
	    //**
            public static function consultaServUtil($identitys){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA2 . " 
                    WHERE id_serv = :idServ 
                    ORDER BY nombre_servicio DESC
                          ");//uso la constante TABLA
                  $consulta->bindParam(':idServ', $identitys);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  
                  return [ $registros ];
            }       
 	    //**
	    // MUESTRA REGISTROS CATEG
	    // SIN paginador
	    //**
            public static function consultaServCateSinPaginador(){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          ORDER BY nombre_catservicio DESC
                          ");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  return [ $registros ];
            }    
  	    //**
	    // MUESTRA REGISTROS
	    // SIN paginador
	    //**
            public static function consultaServSinPaginador(){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA2 . " 
                          ORDER BY nombre_servicio DESC
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
           

            //**----------------------------
	      // UPDATE TOTAL CAT
	      // actualiza todo el registro
	      //**---------------------

	     public static function updateTotalRegistroCatServ($setServCatTitulo,$setIdCatServ){
                 
                   $conexion = new Conexion();
                    $conexion->exec("SET NAMES 'utf8'");
                    $consulta = $conexion->prepare('UPDATE '. self::TABLA .' SET 
                    nombre_catservicio  = :setServCatTitulo
                       WHERE id_serv = :setIdCatServ');
                    $consulta->bindParam(':setServCatTitulo',$setServCatTitulo);
                    $consulta->bindParam(':setIdCatServ', $setIdCatServ);
                    $consulta->execute();
                    $conexion = null; 
	      }     
             
              
               //**----------------------------
	      // UPDATE TOTAL
	      // actualiza todo el registro
	      //**---------------------

	     public static function updateTotalRegistroServ($setServCatTitulo,$setIdCatServ){
                 
                   $conexion = new Conexion();
                    $conexion->exec("SET NAMES 'utf8'");
                    $consulta = $conexion->prepare('UPDATE '. self::TABLA .' SET 
                    nombre_catservicio  = :setServCatTitulo
                       WHERE id_serv = :setIdCatServ');
                    $consulta->bindParam(':setServCatTitulo',$setServCatTitulo);
                    $consulta->bindParam(':setIdCatServ', $setIdCatServ);
                    $consulta->execute();
                    $conexion = null; 
	      }     
             
             
           
           
           
            public function eliminarRegistroCatServ($id_servC){
	       $conexion = new Conexion();
	       if($id_servC) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_serv = :id_serv');
	          $consulta->bindParam(':id_serv', $id_servC);
	          $consulta->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     
             
             
             public function eliminarRegistroServ($id_util){
	       $conexion = new Conexion();
	       if($id_sect) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_util = :id_util');
	          $consulta->bindParam(':id_util', $id_util);
	          $consulta->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     
             
             
             //**
	     // OBTENER DETALLE
	     // obtiene el detalle del registro pedido por url get
	     //**
  	     public static function consultaDetalleCatServicio($idrequest){
	       $conexion = new conexion(); 
                  $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_serv = :id_serv ");
	       $consulta->execute(array(':id_serv' => $idrequest));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['nombre_catservicio'],$idrequest);
	       } else {
	          return false;
	       }
            }  
            
            
              //**----------------------------
	      // INSERT TOTAL CATEG
	      // inserta todo el registro
	      //**---------------------
	     public function inserTotalRegistroCatServ(){

                $conexion = new Conexion();
                $conexion->exec("SET NAMES 'utf8'");
               
                $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (nombre_catservicio) VALUES (:nombre_catservicio)');

                $consulta->bindParam(':nombre_catservicio',$this->nombre_catservicio);

                $consulta->execute();
                $this->id= $conexion->lastInsertId();
	     }     
              //**----------------------------
	      // INSERT TOTAL 
	      // inserta todo el registro
	      //**---------------------
	     public function inserTotalRegistroServ(){

                $conexion = new Conexion();
                $conexion->exec("SET NAMES 'utf8'");
                $consulta = $conexion->prepare('INSERT INTO '.self::TABLA2.' (nombre_sector) VALUES (:nombre_sector)');

                $consulta->bindParam(':nombre_sector',$this->nombre_sector);

                $consulta->execute();
                $this->id= $conexion->lastInsertId();
	     }                 
             
            
            
}
 
class Servicios2 {
 	
		 	//defino las propiedades
		 	private $id_util;
		 	const TABLA = 'hc_util_servicios_utilidad'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getIdServ(){
		 		return $this->id_util;
		 	}
		 	public function getNombreServ(){
		 		return $this->nombre_servicio;	
		 	}

 		 	
  
		 	public function setIdUtil(){
		 		$this->id_util = $id_util;
		 	}
		 	public function setNombreServ(){
		 		$this->nombre_servicio = $nombre_servicio;	
		 	} 	
                        
                        
            //constructor
	    public function __construct($nombre_servicio,$id_util=null)
	    {
				
                                $this->nombre_servicio = $nombre_servicio;
                                $this->id_util = $id_util;

	    }
	    

	   
 

            //**
	    // MUESTRA REGISTROS 
	    // SIN paginador
	    //**
            public static function consultaServUtil($identitys){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                    WHERE id_serv = :idServ 
                    ORDER BY nombre_servicio DESC
                          ");//uso la constante TABLA
                  $consulta->bindParam(':idServ', $identitys);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  
                  return [ $registros ];
            }       
 	    

             
             public function eliminarRegistroServ($id_util){
	       $conexion = new Conexion();
	       if($id_sect) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_util = :id_util');
	          $consulta->bindParam(':id_util', $id_util);
	          $consulta->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     
             
            
            
            
              //**----------------------------
	      // INSERT TOTAL 
	      // inserta todo el registro
	      //**---------------------
	     public function inserTotalRegistroServ(){

                $conexion = new Conexion();
                $conexion->exec("SET NAMES 'utf8'");
                $consulta = $conexion->prepare('INSERT INTO '.self::TABLA2.' (nombre_sector) VALUES (:nombre_sector)');

                $consulta->bindParam(':nombre_sector',$this->nombre_sector);

                $consulta->execute();
                $this->id= $conexion->lastInsertId();
	     }                 
             
            
            
}