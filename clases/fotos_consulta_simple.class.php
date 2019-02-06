<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// FOTOS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24/01/2019
//  
//--------------------------------------------------
 
 class Fotos {
 	
		 	//defino las propiedades
		 	private $id_foto;
private $fecha_foto;
		 	const TABLA = 'hc_foto_imagenes_general';
		 	//metodos getters y setters
		 	public function getId(){
		 		return $this->id_foto;
		 	}
 		 	public function getImagen(){
		 		return $this->archivo_foto;	
		 	} 
                        public function getFecha(){
		 		return $this->fecha_foto;	
		 	} 
		 	public function setId(){
		 		$this->id_foto = $id_foto;
		 	}
		 	public function setFecha(){
		 		$this->fecha_foto = $fecha_foto;	
		 	}
                        public function setImagen(){
		 		$this->archivo_foto = $archivo_foto;	
		 	}                         
		 	//constructor
	    public function __construct($archivo_foto,$fecha_foto,$id_foto=null)
	    {
				$this->id_foto = $id_foto;
				$this->fecha_foto = $fecha_foto;
                                $this->archivo_foto = $archivo_foto;
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
	     // OBTENER FOTOS
	     // obtiene la foto de la tabla fotos con el id del evento id_even
	     //**
  	     public static function consultaFotos($identitys){
	       $conexion = new conexion(); 
               $consulta = $conexion->prepare("SELECT *,MAX(fecha_foto) FROM " . self::TABLA . " WHERE id_even = :id_even  GROUP BY id_foto LIMIT 0,1");
	       $consulta->execute(array(':id_even' => $identitys));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['archivo_foto'],$identitys);
	       } else {
	          return false;
	       }
            }          
           
  	     //**
	     // OBTENER FOTOS
	     // obtiene la foto de la tabla fotos con el id del comercio id_come
	     //**
  	     public static function consultaFotosComercio($identitys){
	       $conexion = new conexion(); 
               $consulta = $conexion->prepare("SELECT *,MAX(fecha_foto) FROM " . self::TABLA . " WHERE id_come = :id_come  GROUP BY id_foto LIMIT 0,1");
	       $consulta->execute(array(':id_come' => $identitys));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['archivo_foto'],$identitys);
	       } else {
	          return false;
	       }
            }          
 	
           
  	     //**
	     // OBTENER FOTOS
	     // obtiene la foto de la tabla fotos con el id del noticia id_noti
	     //**
  	     public static function consultaFotosNoticia($identitys){
	       $conexion = new conexion(); 
               $consulta = $conexion->prepare("SELECT *,MAX(fecha_noticia) FROM " . self::TABLA . " WHERE id_noti = :id_noti  GROUP BY id_foto LIMIT 0,1");
	       $consulta->execute(array(':id_noti' => $identitys));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($registro['archivo_foto'],$identitys);
	       } else {
	          return false;
	       }
            }   
            
             //**
	     // OBTENER FOTOS
	     // obtiene todas las fotos de un id
             // tipocons determina si es evento, noticia, comercio etc
             // y damos valor al campo
             // NOTA: saltamos el primer registro por fecha ya que aparece como foto prioncipal en el detalle
	     //**
                public static function consultaTodasFotos($idrequest,$tipoCons){  
                    switch ($tipoCons) {
                        case "":
                            $campo = 'id_even';
                            break;
                        case "eventos":
                            $campo = 'id_even';
                            break;
                        case "comercios":
                            $campo = 'id_come';
                            break;
                        case "noticias":
                            $campo = 'id_noti';
                            break;
                    }
                    
                  $conexion = new conexion();//objeto conexion
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          WHERE ".$campo." = ".$idrequest."
                              ORDER by fecha_foto ASC LIMIT 1,99999
                          ");//uso la constante TABLA
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
                }    
            
            
            
            
            
 	
}
 
