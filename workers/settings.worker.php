<?php
//-----------------------------------------------------------------
//
// EVENTOS 
//
// SETTINGS > Worker
//
// FECHA LOG :   24 ENERO 2019
//
//-----------------------------------------------------------------
//        $aniovigente       = '';
//        $version           = '';
//        $meta_tags         = '';
//        $autor             = '';
//        $titulo_general    = '';
//        $codigo_analytics  = '';
//        $keywords          = '';
//        $favicon           = '';
//        $og_imagen         = '';
//        $email_tecnico     = '';
//        $email_comercial   = '';
//        $telefono          = '';
//        $email_atencion    = '';
//        $meta_datos    = '';

       
     
        
        
        //datos para el openssl encrypt
        //funciones encrypt y decrypt
        //----------------------------------------------------------------------------
           $key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';
            $claveCryptA = '5476Yw';
            $claveCryptB = 'd0rdHf';
           function my_encrypt($data, $key) {
               // Remove the base64 encoding from our key
               $encryption_key = base64_decode($key);
               // Generate an initialization vector
               $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
               // Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
               $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
               // The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
               return base64_encode($encrypted . '::' . $iv);
           }

           function my_decrypt($data, $key) {
               // Remove the base64 encoding from our key
               $encryption_key = base64_decode($key);
               // To decrypt, split the encrypted data from our IV - our unique separator used was "::"
               list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
               return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
           }
        //usaremos esto cuando tengamos que utilizar la encryptacion           
        //$password_encrypted = my_encrypt($password_plain, $key);
        //$password_decrypted = my_decrypt($password_encrypted, $key);

        //fin
        //----------------------------------------------------------------------------

           
           
        //FILTRO PARA LAS URL FRIENDLY
        //----------------------------------------------------------------------------         
           
           function filtrourl($url) {
            $url = strtolower($url);
            $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
            $repl = array('a', 'e', 'i', 'o', 'u', 'n');
            $url = str_replace ($find, $repl, $url);
            $find = array(' ', '&', '\r\n', '\n', '+');
            $url = str_replace ($find, '-', $url);
            $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
            $repl = array('', '-', '');
            $url = preg_replace ($find, $repl, $url);
            return $url;
            }
        //fin
        //----------------------------------------------------------------------------



	//si la variable lengua no existe, el idioma predeterminado es "es"
	//si recibe la variable idioma por url, el idioma se ira difundiendo en cada accion URL
        if(!isset($lengua)) {
	  $lengua= 'es';
	} elseif($lengua = $_GET['idioma']){
		$_SESSION['lengua'] = $_GET['idioma'];
		$lengua = $_SESSION['lengua'];
	} 
	//INCLUDES

	// directorio de las traducciones
	require (ROOT_DIR."/traducciones/".$lengua.".php");
	//archivos de literales se parsean las variables para smarty
	//se localizan en el directorio traducciones segun idioma
	include ROOT_DIR.'/includes/lenguaje.php';
	require (ROOT_DIR.'/includes/mensajes_respuesta.php');//contiene los mensajes de rerspuesta de los formularios de validacion
		
	//url canonical
	$canonical='http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];
	//anio en curso
	$aniovigente=date('Y');
	$UrlRetornoLogin = BASE_URL.'/php/index.php';
        
        
        
    $iduno = 1;    
    $get_Settings = Settings::detalleSettings($iduno);
    
        $idSettings =   $get_Settings->getIdSettings(); 
        $titulo_general =   $get_Settings->getTituloSettings(); 
        $version =          $get_Settings->getVersionSettings();
        $meta_tags =        $get_Settings->getMetaTagsSettings();
        $codigo_analytics = $get_Settings->getAnalyticsSettings();
        $favicon =          $get_Settings->getFaviconSettings();
        $og_imagen =        $get_Settings->getOgimagenSettings();
        $email_tecnico =    $get_Settings->getEmailTecnicoSettings();
        $email_comercial =  $get_Settings->getEmailComercialSettings();
        $telefono =         $get_Settings->getTelefonoSettings();
        $email_atencion =   $get_Settings->getEmailAtencionSettings();
        $autor =            $get_Settings->getAutorSettings();
        $meta_datos =       $get_Settings->getMetaDatosSettings();
        
        //en este caso casteo las variables en este archivo que siempre ira include en todas las paginas
	$smarty->assign("aniovigente",$aniovigente,true);
	$smarty->assign("lengua",$lengua,true);
	$smarty->assign("version",$version,true);
	$smarty->assign("ruta",BASE_URL,true);
	$smarty->assign("meta_tags",$meta_tags,true);
	$smarty->assign("autor",$autor,true);
        $smarty->assign("titulo_general",$titulo_general,true);
        $smarty->assign("codigo_analytics",$codigo_analytics,true);
        $smarty->assign("favicon",$favicon,true);
        $smarty->assign("og_imagen",$og_imagen,true);
        $smarty->assign("email_tecnico",$email_tecnico,true);
        $smarty->assign("email_comercial",$email_comercial,true);
        $smarty->assign("telefono",$telefono,true);
        $smarty->assign("email_atencion",$email_atencion,true);
        $smarty->assign("meta_datos",$meta_datos,true);
