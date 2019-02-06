<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// USUARIOS
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 01 febrero 2019
//  
//--------------------------------------------------
 
 class Usuarios {
 	
		 	//defino las propiedades
		 	private $id_usvi;
		 	
		 	const TABLA = 'hc_usvi_usuario_visitante'; //constante del nombre de la tabla
		 	
		 	//metodos getters y setters
		 	public function getId(){return $this->id_usvi;}
                        public function getNombre(){return $this->nombre_usuario;}
                        public function getApellido(){return $this->apellido_usuario;}
                        public function getEmail(){return $this->email_usuario;}
                        public function getTelefono(){return $this->telefono_usuario;}
                        public function getPass(){return $this->password_usuario;}
                        public function getFecha(){return $this->fecha_alta;}
                        public function getIdProv(){
                            return $this->id_prov;
                            
                        }
                        public function getIdPobl(){return $this->id_pobl;}
                        public function getIdActivo(){return $this->activo;}

                        public function setId(){return $this->id_usvi=$id_usvi;}
                        public function setNombre(){return $this->nombre_usuario=$nombre_usuario;}
                        public function setApellido(){return $this->apellido_usuario=$apellido_usuario;}
                        public function setEmail(){return $this->email_usuario=$email_usuario;}
                        public function setTelefono(){return $this->telefono_usuario=$telefono_usuario;}
                        public function setPass(){return $this->password_usuario=$password_usuario;}
                        public function setFecha(){return $this->fecha_alta=$fecha_alta;}
                        public function setIdProv(){
                            return $this->id_prov = $id_prov;
                            
                        }
                        public function setIdPobl(){return $this->id_pobl=$id_pobl;}
                        public function setIdActivo(){return $this->activo=$activo;}
                       
		 	//constructor
	    public function __construct($id_usvi=NULL,$nombre_usuario,$apellido_usuario,$email_usuario,$telefono_usuario,$password_usuario,$fecha_alta,$id_prov,$id_pobl,$activo)
	    {
                        $this->id_usvi=$id_usvi;
                        $this->nombre_usuario=$nombre_usuario;
                        $this->apellido_usuario=$apellido_usuario;
                        $this->email_usuario=$email_usuario;
                        $this->telefono_usuario=$telefono_usuario;
                        $this->password_usuario=$password_usuario;
                        $this->fecha_alta=$fecha_alta;
                        $this->id_prov=$id_prov;
                        $this->id_pobl=$id_pobl;
                        $this->activo=$activo;
                               
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
	    // MUESTRA REGISTROS
	    // con paginador
	    //**
            public static function consulta(){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 5;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;

                  $conexion = new conexion();//objeto conexion
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . " 
                          ORDER BY nombre_album DESC 
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
            public static function consultaSinPaginador($nombreProvincia){  
                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM " . self::TABLA . "
                       WHERE alias_provincia = :nombreprovincia
                    ORDER BY titulo_noticia DESC LIMIT 8
                          ");//uso la constante TABLA
                  $consulta->bindParam(':nombreprovincia', $nombreProvincia);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];

                  return [ $registros ];
            }   
            
  	   

             //**
	     // OBTENER DETALLE
	     // obtiene el detalle del registro pedido por url get
	     //**
  	     public static function consultaDetalle($id_usvi){
	       $conexion = new conexion(); 
               $conexion->exec("SET NAMES 'utf8'");
               $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id_usvi = :id_usvi ");
	       $consulta->execute(array(':id_usvi' => $id_usvi));
	       $registro = $consulta->fetch();
	       if($registro){ 
	          return new self($id_usvi,$registro['nombre_usuario'],$registro['apellido_usuario'],$registro['email_usuario'],$registro['telefono_usuario'],$registro['password_usuario'],$registro['fecha_alta'],$registro['id_prov'],$registro['id_pobl'],$registro['activo']);
	       } else {
	          return false;
	       }
            }   
          

 	
}
 
 

