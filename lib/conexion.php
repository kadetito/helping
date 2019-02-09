<?php 

//---------------------------------------------------
//
// Conexion PDO orientada a Objetos
// version 1.0
// 08/12/2018
//
//--------------------------------------------------
//define base url


	  

 class Conexion extends PDO { //extends usa la libreria php PDO qu eno necesita ser incluida desde PHP5
 	//declaro las variables como privadas
   private $tipo_de_base = 'mysql';
   private $host = 'localhost';
   private $bbdd = 'helping';
   private $usuario = 'helping01';
   private $contrasena = 'JRK441e22'; 

 
   //metodo construct
   public function __construct() {
      //Sobreescribo el m�todo constructor de la clase PDO.
      //usamos las sentencia try catch
      try{
      	
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->bbdd, $this->usuario, $this->contrasena);
      
      } catch(PDOException $e){
      	
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      
      }
   } 

 } 
 

 
?>
