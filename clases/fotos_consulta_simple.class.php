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
             
             
	    public function eliminarRegistroFoto($id_fotoS){echo '<script>alert("'.$id_fotoS.'");</script>';
	       $conexion = new Conexion();
                   $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA .'  WHERE id_foto = :id_foto');
                   $consulta->bindParam(':id_foto', $id_fotoS);
	          $consulta->execute();	          
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
                    //echo '<script>alert("'.$idrequest.','.$campo.'")</script>';
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
            
            
              //**
	     // OBTENER FOTOS ADMIN
	     // obtiene todas las fotos de un id
             // tipocons determina si es evento, noticia, comercio etc
             // y damos valor al campo
             // NOTA: saltamos el primer registro por fecha ya que aparece como foto prioncipal en el detalle
	     //**
                public static function consultaTodasFotosAdmin($idrequest,$tipoCons){  
                  $conexion = new conexion();//objeto conexion
                  $paginaFotos = isset($_GET['paginaFotos']) ? (int)$_GET['paginaFotos'] : 1;
                  $porPaginaFotos = isset($_GET['por-paginaFotos']) && $_GET['por-paginaFotos'] <= 50 ? (int)$_GET['por-paginaFotos'] : 10;
                  $inicioFotos = ($paginaFotos > 1) ? ($paginaFotos * $porPaginaFotos) - $porPaginaFotos : 0;
                   switch ($tipoCons) {
                        case "":
                                $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                                WHERE id_even = ".$idrequest."
                                ORDER by fecha_foto ASC LIMIT 0,99999
                                ");
                            
                            break;
                        case "eventos":
                                $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                                WHERE id_even = ".$idrequest."
                                ORDER by fecha_foto ASC LIMIT 0,99999
                                ");
                            
                            break;
                        case "comercios":
                                $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                                WHERE id_come = ".$idrequest."
                                ORDER by fecha_foto ASC LIMIT 0,99999
                                ");
                            break;
                        case "noticias":
                                $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                                WHERE id_noti = ".$idrequest."
                                ORDER by fecha_foto ASC LIMIT 0,99999
                                ");
                           
                            break;
                    }
                  $consulta->execute();
                  $registrosFotos = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $totalFotos = $conexion->query("SELECT FOUND_ROWS() as totalFotos")->fetch()['totalFotos'];
                  $paGinasFotos = ceil($totalFotos / $porPaginaFotos);
                  return [ $registrosFotos, $paGinasFotos, $porPaginaFotos, $paginaFotos ];
                }    

                 public static function insertFotosMasivo($id_comefotos,$fechaFotos,$countfiles,$fechayHora,$tipoCons){        
                                $conexion = new conexion();//objeto conexion
                                switch ($tipoCons) {
                                    case "":
                                              $query = "INSERT INTO " . self::TABLA . " (archivo_foto,id_even,fecha_foto) VALUES(?,".$id_comefotos.",'".$fechaFotos."')";
                                        break;
                                    case "eventos":
                                              $query = "INSERT INTO " . self::TABLA . " (archivo_foto,id_even,fecha_foto) VALUES(?,".$id_comefotos.",'".$fechaFotos."')";
                                        break;
                                    case "comercios":
                                              $query = "INSERT INTO " . self::TABLA . " (archivo_foto,id_come,fecha_foto) VALUES(?,".$id_comefotos.",'".$fechaFotos."')";
                                        break;
                                    case "noticias":
                                              $query = "INSERT INTO " . self::TABLA . " (archivo_foto,id_noti,fecha_foto) VALUES(?,".$id_comefotos.",'".$fechaFotos."')";
                                        break;
                                }
                                  $statement = $conexion->prepare($query);
                                  for($i=0;$i<$countfiles;$i++){
                                    // foto original
                                    $filename = $_FILES['files']['name'][$i];
                                    $ext = end((explode(".", $filename)));
                                    $valid_ext = array("png","jpeg","jpg");
                                    if(in_array($ext, $valid_ext)){
                                                $image = new Imagick($_FILES['files']['tmp_name'][$i]);
                                                $image->cropThumbnailImage(368,368);   	
                                    if(move_uploaded_file($_FILES['files']['tmp_name'][$i],'../fotos/'.$fechayHora.'_'.$filename))
                                      {      		
                                        $image->writeImage( '../fotos_baja/'.$fechayHora.'_'.$filename.'' );
                                        $statement->execute(array($fechayHora.'_'.$filename));
                                      }
                                    }   
                                  }
                 }
  
  

}
 
