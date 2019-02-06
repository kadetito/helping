<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
 
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// FOTOS -  PDO orientada a Objetos
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete
// version 1.0
// 08/12/2018
// fichero de conexion en el archivo PHP que invoca a Smarty
//--------------------------------------------------
 
 class TipoEventos {
 	
		 	//defino las propiedades
		 	private $id;

     
		 	const TABLA = 'foto_foto_album'; //constante del nombre de la tabla
		 	
		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id;
		 	}

		 	public function getNombre(){
		 		return $this->nombre_foto;	
		 	}
		 	public function getDescripcion(){
		 		return $this->descripcion_foto;	
		 	} 	
      public function getFechaCreacion(){
            return $this->fecha;	
      }                         
      public function getIdAlbum(){
            return $this->id_album;	
      } 
       public function getdestino(){
            return $this->destino;	
      } 
           
       public function getArchivo(){
            return $this->archivo;	
      }                        
                        
 
		 	public function setId(){
		 		$this->id = $id;
		 	}
		 	public function setNombre(){
		 		$this->nombre_foto = $nombre_foto;	
		 	} 	
 		 	public function setDescripcion(){
		 		$this->descripcion_foto = $descripcion_foto;	
		 	} 	
       public function setFechaCreacion(){
		 		$this->fecha = $fecha;
		 	}
		 	
		 	public function setIdAlbum(){
		 		$this->id_album = $id_album;
		 	}
		 	
		 	public function setdestino(){
		 		$this->destino = $destino;
		 	}
 			 	public function setArchivo(){
		 		$this->archivo = $archivo;
		 	}	
                        
		 	//constructor
	    public function __construct($nombre_foto,$descripcion_foto,$archivo,$id=null,$id_album,$destino,$fecha)
	    { $this->destino = $destino;
	    	$this->fecha = $fecha;
	    	$this->id_album = $id_album;
				$this->id = $id;
        $this->archivo = $archivo;
				$this->descripcion_foto = $descripcion_foto;
				$this->nombre_foto = $nombre_foto;
                          
	    }
	      //**
	      //
	      // la siguiente funcion determina si el id viene vacï¿½o (definido null en el constructor) y hace update
	      // de lo contrario hace un insert
	      //
	      //**
	     public function guardar(){
	       $conexion = new Conexion();
	       if($this->id) /*Modifica*/ {
	          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre_foto = :nombre_foto, descripcion_foto = :descripcion_build WHERE id = :id');
	          $consulta->bindParam(':nombre_build', $this->nombre_build);
	          $consulta->bindParam(':descripcion_build', $this->descripcion_build);
	          $consulta->bindParam(':id', $this->id);
	          $consulta->execute();
	       }else /*Inserta*/ {
	          $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre_build, descripcion_build) VALUES(:nombre_build, :descripcion_build)');
	          $consulta->bindParam(':nombre_build', $this->nombre_build);
	          $consulta->bindParam(':descripcion_build', $this->descripcion_build);
	          $consulta->execute();
	          $this->id = $conexion->lastInsertId();
	       }
	       $conexion = null; //cierro conexion
	     }
             



		  public function moverFotos(){
	       $conexion = new Conexion(); 
	          $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET id_album = :id_album WHERE id_album = :origen');
	          $consulta->bindParam(':id_album', $this->id_album);
	          $consulta->bindParam(':origen', $this->origen);
	          $consulta->execute();

	       $conexion = null; //cierro conexion
	     }  
	     
	     
	     
	    public function copiarFotos(){
	       $conexion = new Conexion();

	          $consulta = $conexion->prepare('INSERT INTO foto_foto_album 
	          (id_album,nombre_foto, descripcion_foto, archivo, fecha) 
	          VALUES
	          (:destino,:nombre_foto,:descripcion_foto,:archivo,:fecha)');
	          
	          $consulta->bindParam(':destino', $this->destino);
	          $consulta->bindParam(':nombre_foto', $this->nombre_foto);
	          $consulta->bindParam(':descripcion_foto', $this->descripcion_foto);
	          $consulta->bindParam(':archivo', $this->archivo);
	          $consulta->bindParam(':fecha', $this->fecha);
	          $consulta->execute();
	          $this->id = $conexion->lastInsertId();
	       $conexion = null; //cierro conexion
	     }  
	     
	     
	     
             
            public static function consultabyId($identitys){  
                  $conexion = new conexion();//objeto conexion
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS 
                                id,
                                id_album,
                                nombre_foto,	     
                                descripcion_foto,	 
                                fecha,
                                archivo 
                                FROM 
                                ". self::TABLA ." WHERE id_album = :identidad");
                  $consulta->execute(array('identidad' => $identitys));
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  return [$registros];
            }                
             
	     
	   	//    public function copiarFotos(){
	    //   $conexion = new Conexion();
      //
	    //      $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id_album,nombre_foto, descripcion_foto, archivo, fecha) VALUES(:id_album,:nombre_foto, :descripcion_foto, :archivo, :fecha)');
	    //     // $consulta->bindParam(':id_album', $this->id_album);
	    //      $consulta->bindParam(':nombre_foto', $this->nombre_foto);
	    //      $consulta->bindParam(':descripcion_foto', $this->descripcion_foto);
	    //      $consulta->bindParam(':archivo', $this->archivo);
	    //      $consulta->bindParam(':fecha', $this->fecha);
	    //      $contaListas->bindParam(':cont_registroB',$this->cont_registroB);
	    //      for($i=1;$i<=$contaListas;$i++) {                
      //          $consulta->bindParam(":id_album", $i, PDO::PARAM_INT);         
      //          $consulta->execute();
      //          //$this->id = $conexion->lastInsertId();
      //      }
	    //      
	    //   $conexion = null; //cierro conexion
	    // }  
	       
	     
	     
	     
	     
	     	      //**
	      //
	      // MUESTRA RESGISTROS
	      // por id album
	      //
	      //**
	          public static function consultaPorIdAlbum($AlbumOrigen){  
                  $conexion = new conexion();//objeto conexion
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS 
                  id,
                                                    id_album,
                                                    nombre_foto,	     
                                                    descripcion_foto,	 
                                                    fecha,
                                                    archivo 
                                                     FROM 
                  " . self::TABLA . " 
                  
                  
                          WHERE id_album = $AlbumOrigen
                          ");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
            }    
            
	      //**
	      //
	      // MUESTRA RESGISTROS
	      // con paginador
	      //
	      //**
            public static function consulta($identidad){  


                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 15;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;
                  $conexion = new conexion();//objeto conexion
                   $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  
                                                    id,
                                                    nombre_foto,	     
                                                    descripcion_foto,	 
                                                    fecha,
                                                    archivo       
                         FROM foto_foto_album 
												 WHERE id_album = $identidad
                         ORDER BY fecha ASC 
                         LIMIT {$inicio},{$porPagina}
                          ");//uso la constante TABLA
                         
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 

                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  $paGinas = ceil($total / $porPagina);
                  return [ $registros, $paGinas, $porPagina, $pagina ];
            }
      
      
//**
	      //
	      // MUESTRA RESGISTROS
	      // con paginador
	      //
	      //**
            public static function detallepaginado($idalbum){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");

                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  
                                                    id,
                                                    nombre_foto,	     
                                                    descripcion_foto,	 
                                                    fecha,
                                                    archivo       
                         FROM foto_foto_album 
												 WHERE  id_album = $idalbum
                         ORDER BY fecha ASC 

                          ");//uso la constante TABLA
                         
                  $consulta->execute();

$data = array();
        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
 }            

      
      
      
      
      
      
      
      
      
      
      
      
 	     public static function detalle($id){
	       $conexion = new conexion(); //objeto conexion
	       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');//uso la constante TABLA
	       $consulta->bindParam(':id', $id);
	       $consulta->execute();
	       $registro = $consulta->fetch();
	       if($registro){
	          return new self($registro['nombre_foto'],$registro['descripcion_foto'],$registro['archivo'],$registro['id_album'], $id);
	       }else{
	          return false;
	       }
             }
 	 

             
             
             
}
 
