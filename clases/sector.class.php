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
				
				$this->nombre_sector = $nombre_sector;
                                $this->id_sect = $id_sect;
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
                          ORDER BY nombre_sector DESC 
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
           

               //**----------------------------
	      // UPDATE TOTAL
	      // actualiza todo el registro
	      //**---------------------

	     public static function updateTotalRegistroSect($setSectTitulo,$setIdSect){
                 
                   $conexion = new Conexion();
                    $conexion->exec("SET NAMES 'utf8'");
                    $consulta = $conexion->prepare('UPDATE '. self::TABLA .' SET 
                    nombre_sector  = :setSectTitulo
                       WHERE id_sect = :setIdSect');
                    $consulta->bindParam(':setSectTitulo',$setSectTitulo);
                    $consulta->bindParam(':setIdSect', $setIdSect);
                    $consulta->execute();
                    $conexion = null; 
	      }     
             
           
           
            public function eliminarRegistroSec($id_sect){
//                echo '<script>alert("hola")</script>';
	       $conexion = new Conexion();
	       if($id_sect) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_sect = :id_sect');
	          $consulta->bindParam(':id_sect', $id_sect);
	          $consulta->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     
             
       
             //**
	     // OBTENER DETALLE
	     // obtiene el detalle del registro pedido por url get
	     //**
  	     public static function consultaDetalle($idrequest){
	       $conexion = new conexion(); 
                  $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_sect = :id_sect ");
	       $consulta->execute(array(':id_sect' => $idrequest));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['nombre_sector'],$idrequest);
	       } else {
	          return false;
	       }
            }  
            
            
              //**----------------------------
	      // INSERT TOTAL
	      // inserta todo el registro
	      //**---------------------
	     public function inserTotalRegistroSector(){

                $conexion = new Conexion();
                $conexion->exec("SET NAMES 'utf8'");
                $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (nombre_sector) VALUES (:nombre_sector)');

                $consulta->bindParam(':nombre_sector',$this->nombre_sector);

                $consulta->execute();
                $this->id= $conexion->lastInsertId();
	     }     
             
             
            
            
}
 
