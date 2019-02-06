<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// METADATOS
// Clase que gestiona los metadatos
// version 1.0
// 04/02/2019
//  
//--------------------------------------------------
 
 class Metadatos {
 	
		 	//defino las propiedades
		 	private $id_meta;

		 	const TABLA = 'hc_meta_metadatos_provincia'; //constante del nombre de la tabla

		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_meta;
		 	}
                        public function getIdProv(){
		 		return $this->id_prov;
		 	}
		 	public function getMetaDatosProv(){
		 		return $this->meta_datos;	
		 	}
                        public function getMetas(){
		 		return $this->metas;	
		 	}
                        public function getKeywords(){
		 		return $this->keywords;	
		 	}                        
		 	public function setId(){
		 		$this->id_meta = $id_meta;
		 	}
                        public function setIdProv(){
		 		$this->id_prov = $id_prov;
		 	}
		 	public function setMetaDatosProv(){
		 		$this->meta_datos = $meta_datos;	
		 	} 	
		 	public function setMetas(){
		 		$this->metas = $metas;	
		 	} 		 	
		 	public function setKeywords(){
		 		$this->keywords = $keywords;	
		 	}                         
                        
            //constructor
	    public function __construct($keywords,$metas,$meta_datos,$id_prov,$id_meta=null)
	    {
				$this->id_prov = $id_prov;
                                $this->id_meta = $id_meta;
                                $this->meta_datos = $meta_datos;
                                $this->metas = $metas;
                                $this->keywords = $keywords;
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
             
  

           
           public static function consultaMetadatos($identificadornumericoProvincia){ 
	       $conexion = new conexion(); 
                $conexion->exec("SET NAMES 'utf8'");
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_prov = :identi   ' );//uso la constante TABLA
	       $consulta->bindParam(':identi', $identificadornumericoProvincia);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['keywords'],$registro['metas'],$registro['meta_datos'],$registro['id_prov'],$identificadornumericoProvincia);	       
               } else {   
	          return false;
	       }
           }      
                       

   
 	
}
 
 


