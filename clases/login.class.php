<?php 

//---------------------------------------------------
//
// LOGIN -  PDO orientada a Objetos
// Clase que gestiona las acciones de bucle, detalle, insert, update y delete 
// version 1.0
// 24 enero 2019
//  
//--------------------------------------------------


class userClass
{
        /* User Login */
        public function userLogin($usernameEmail,$password)
        {
            try{
                $db = new Conexion();
                $stmt = $db->prepare("SELECT * FROM usua_usuarios WHERE (nombre_usuario=:usernameEmail or email=:usernameEmail) AND contrasenya=:password"); 
                $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
                $stmt->bindParam("password", $password,PDO::PARAM_STR) ;
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $db = null;
                if($count)
                {
                $_SESSION['uid']=$data->id; // Storing user session value
                return true;
                }
                else
                {
                return false;
                } 
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }

     }


}
 
