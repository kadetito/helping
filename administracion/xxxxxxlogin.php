<?php session_start();
//========================================================
// arxiu de configuracio 
//========================================================
include('lib/conexion.php');
//========================================================
// funcio idioma
// accion determina el numero de idiomes i el idioma per defecte
// traduccion conte els idiomes
//========================================================
include('accion.php');require_once("traduccion/".$_SESSION['Idioma'].".php");
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="css/login_style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body>
  <div class="logo"></div>
  <div class="login"> <!-- Login -->
    <h1><?=$GLOBALS['TXT_titolacceslogin'];?></h1>

    <form class="form" method="post" action="control.php">
      <p class="field">
        <input type="text" name="nomdusuari" placeholder="<?=$GLOBALS['TXT_placeholderEscriuEmail'];?>" required/>
        <i class="fa fa-user"></i>
      </p>
      <p class="field">
        <input type="password" name="password" placeholder="<?=$GLOBALS['TXT_placeholderEscriuPassword'];?>" required/>
        <i class="fa fa-lock"></i>
      </p>
      <p class="submit"><input type="submit" name="commit" value="<?=$GLOBALS['TXT_Botosubmitlogin'];?>"></p>
      <p class="remember">
        <input type="checkbox" id="remember" name="remember" />
        <label for="remember"><span></span><?=$GLOBALS['TXT_RememberMe'];?></label>
      </p>
      <p class="forgot">
        <a href="#"><?=$GLOBALS['TXT_ForgotPassword'];?></a>
      </p>
    </form>
  </div> <!--/ Login-->
  <div class="copyright">
    <p>Copyright &copy; <?=date('Y');?>.</p>
  </div>
</body>
</html>
