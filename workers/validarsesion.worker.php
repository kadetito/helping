<?php
//-----------------------------------------------------------------
//
// VALIDAR SESION
//
//
// FECHA LOG :   01 FEBRERO 2019
//
//-----------------------------------------------------------------

//si la sesion ya esta iniciada
//if($sesion = 1){header('Location: '.BASE_URL.'/'.$lengua.'');} else {

  
        $userClass = new userClass();

        $errorMsgReg='';
        $errorMsgLogin='';

        $email_usuario=$_POST['nombre_usuario'];
        $password_usuario=$_POST['userpassword'];

        
        if(strlen(trim($email_usuario))>1 && strlen(trim($password_usuario))>1 )
        {
            $uid = $userClass->userLogin($email_usuario,$password_usuario);
            if($uid)
            {
                
            $url=BASE_URL;
            header("Location: $url"); // Predirecciono al home
            }
            else
            {
            $errorMsgLogin='<p class="text-center errorff">Acceso denegado, por favor revise los datos</p>';
            }
        }

        $smarty->assign("errorMsgLogin",$errorMsgLogin,true); 



//}        
