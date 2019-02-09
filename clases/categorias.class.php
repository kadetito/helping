<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// CATEGORIAS
// Clase que gestiona las categorias de clientes
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Categorias {
 	
		 	//defino las propiedades
		 	private $id_cate;
		 	
		 	const TABLA = 'hc_cate_categoria_cliente'; //constante del nombre de la tabla
		 	//const TABLA_F = 'foto_foto_album';
		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_cate;
		 	}
		 	public function getNombre(){
		 		return $this->nombre_categoria;	
		 	}

		 	public function getTags(){
		 		return $this->tags_categoria;	
		 	} 
 		 	public function getDescripcion(){
		 		return $this->descripcion_categoria;	
		 	} 
                        public function getAliasCateg(){
		 		return $this->alias_categoria;	
		 	}
		 	public function setId(){
		 		$this->id_cate = $id_cate;
		 	}
		 	public function setNombre(){
		 		$this->nombre_categoria = $nombre_categoria;	
		 	} 	

                        public function setTags(){
		 		$this->tags_categoria = $tags_categoria;	
		 	} 
                        public function setDescripcion(){
		 		$this->descripcion_categoria = $descripcion_categoria;	
		 	} 
                        public function setAliasCateg(){
		 		$this->alias_categoria = $alias_categoria;	
		 	} 
		
            //constructor
	    public function __construct($alias_categoria,$descripcion_categoria,$tags_categoria,$nombre_categoria,$id_cate=null)
	    {
				$this->id_cate = $id_cate;
				$this->nombre_categoria = $nombre_categoria;
				$this->tags_categoria = $tags_categoria;
                                $this->descripcion_categoria = $descripcion_categoria;
                                $this->alias_categoria = $alias_categoria;
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
                          ORDER BY nombre_categoria DESC 
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
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          ORDER BY nombre_categoria DESC
                          ");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  return [ $registros ];
            }    
             

               public static function consultaporId($id_cate){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_cate = :id_cate');//uso la constante TABLA
	       $consulta->bindParam(':id_cate', $id_cate);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['alias_categoria'],$ident);	       
               } else {   
	          return false;
	       }
              }       
           
               public static function consultaParsCat($idCat){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE alias_categoria = :aliascategoria');//uso la constante TABLA
	       $consulta->bindParam(':aliascategoria', $idCat);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
	       if($registro){
	          return new self($registro['alias_categoria'],$registro['descripcion_categoria'],$registro['tags_categoria'],$registro['imagen_categoria'],$registro['nombre_categoria'],$registro['id_cate']);	       
               } else {   
	          return false;
	       }
              } 
              
              
               
           public static function consultadeIdaAlias($getId_cate){ 
	       $conexion = new conexion(); 
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_cate = :identi   ' );//uso la constante TABLA
	       $consulta->bindParam(':identi', $getId_cate);
	       $consulta->execute();
	       //$registro = $consulta->setFetchMode(PDO::FETCH_ASSOC); 
 	       $registro = $consulta->fetch(); 
              
	       if($registro){
	          return new self($registro['alias_categoria'],$registro['descripcion_categoria'],$registro['tags_categoria'],$registro['imagen_categoria'],$registro['nombre_categoria'],$getId_cate);	       
               } else {   
	          return false;
	       }
           } 
           
           
             //**
	     // OBTENER DETALLE
	     // obtiene el detalle del registro pedido por url get
	     //**
  	     public static function consultaDetalle($idrequest){
	       $conexion = new conexion(); 
                  $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_cate = :id_cate ");
	       $consulta->execute(array(':id_cate' => $idrequest));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['alias_categoria'],$registro['descripcion_categoria'],$registro['tags_categoria'],$registro['nombre_categoria'],$idrequest);
	       } else {
	          return false;
	       }
            }  
            
            
            
              //**----------------------------
	      // UPDATE TOTAL
	      // actualiza todo el registro
	      //**---------------------

	     public static function updateTotalRegistro($setId_cate,$setCateTitulo,$setCateAlias){           
                    function limpiaEspacios($cadena){
                        $cadena = str_replace(' ', '', $cadena);
                        return strtolower($cadena);
                    }
                   $conexion = new Conexion();
                    $conexion->exec("SET NAMES 'utf8'");
                    $setCateTituloParseado = limpiaEspacios($setCateTitulo);
                    $setCateTituloFiltrado = filtrourl($setCateTituloParseado);
                    $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET 
                    nombre_categoria  = :setCateTitulo,
                    alias_categoria  = :setCateAlias
                       WHERE id_cate = :setId_cate');
                    $consulta->bindParam(':setCateTitulo',$setCateTitulo);
                    if(isset($setCateAlias)){
                     $consulta->bindParam(':setCateAlias', $setCateTituloFiltrado);
                    } else {
                     $consulta->bindParam(':setCateAlias', $setCateAlias);    
                    }
                   $consulta->bindParam(':setId_cate', $setId_cate);
                   $consulta->execute();
                   $conexion = null; //cierro conexion
	      }     
             
             
             
              //**----------------------------
	      // INSERT TOTAL
	      // inserta todo el registro
	      //**---------------------
	     public function inserTotalRegistro(){

                $conexion = new Conexion();
                $conexion->exec("SET NAMES 'utf8'");
                $consulta = $conexion->prepare('INSERT INTO '.self::TABLA.' (alias_categoria,descripcion_categoria,tags_categoria,nombre_categoria) VALUES (:alias_categoria,:descripcion_categoria,:tags_categoria,:nombre_categoria)');

                $consulta->bindParam(':alias_categoria',  $this->alias_categoria);
                $consulta->bindParam(':descripcion_categoria', $this->descripcion_categoria);
                $consulta->bindParam(':tags_categoria',  $this->tags_categoria); 
                $consulta->bindParam(':nombre_categoria',$this->nombre_categoria);

                $consulta->execute();
                $this->id= $conexion->lastInsertId();
	     }                  	 


           
            public function eliminarRegistroCat($id_cate){
//                echo '<script>alert("hola")</script>';
	       $conexion = new Conexion();
	       if($id_cate) {
	          $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_cate = :id_cate');
	          $consulta->bindParam(':id_cate', $id_cate);
	          $consulta->execute();	          
	       }
	       $conexion = null; //cierro conexion
	     }     
             

 	
}
