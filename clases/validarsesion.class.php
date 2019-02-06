<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// USUARIOS
// Clase que gestiona las acciones de login
// version 1.0
// 01 febrero 2019
//  
//--------------------------------------------------
 
 class userClass
{
        /* User Login */
        public function userLogin($email_usuario,$password_usuario)
        {
            try{
                $db = new Conexion();
                //$hash_password= hash('sha256', $password); //Password encryption 
                $stmt = $db->prepare("SELECT * FROM hc_usvi_usuario_visitante WHERE email_usuario=:email_usuario AND password_usuario=:password_usuario"); 
                $stmt->bindParam("email_usuario", $email_usuario,PDO::PARAM_STR) ;
                $stmt->bindParam("password_usuario", $password_usuario,PDO::PARAM_STR) ;
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $db = null;
                if($count)
                {
                $_SESSION['uid']=$data->id_usvi; // Storing user session value
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

/* User Registration */
//public function userRegistration($username,$password,$email,$name)
//{
//try{
//$db = getDB();
//$st = $db->prepare("SELECT uid FROM users WHERE username=:username OR email=:email"); 
//$st->bindParam("username", $username,PDO::PARAM_STR);
//$st->bindParam("email", $email,PDO::PARAM_STR);
//$st->execute();
//$count=$st->rowCount();
//if($count<1)
//{
//$stmt = $db->prepare("INSERT INTO users(username,password,email,name) VALUES (:username,:hash_password,:email,:name)");
//$stmt->bindParam("username", $username,PDO::PARAM_STR) ;
//$hash_password= hash('sha256', $password); //Password encryption
//$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
//$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
//$stmt->bindParam("name", $name,PDO::PARAM_STR) ;
//$stmt->execute();
//$uid=$db->lastInsertId(); // Last inserted row id
//$db = null;
//$_SESSION['uid']=$uid;
//return true;
//}
//else
//{
//$db = null;
//return false;
//}
//
//} 
//catch(PDOException $e) {
//echo '{"error":{"text":'. $e->getMessage() .'}}'; 
//}
//}
//
///* User Details */
//public function userDetails($uid)
//{
//try{
//$db = getDB();
//$stmt = $db->prepare("SELECT email,username,name FROM users WHERE uid=:uid"); 
//$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
//$stmt->execute();
//$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
//return $data;
//}
//catch(PDOException $e) {
//echo '{"error":{"text":'. $e->getMessage() .'}}';
//}
//}
}
 


