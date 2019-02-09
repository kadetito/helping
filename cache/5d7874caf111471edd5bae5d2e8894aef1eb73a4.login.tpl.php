<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:40:09
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4b2dd9297bb5_45476168',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '307d159ab731fb47774680d048537af856673aba' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/login.tpl',
      1 => 1548430801,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c4b2dd9297bb5_45476168 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lengua']->value;?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['settings_version']->value;?>
</title>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
favicon.ico">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
    <link href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/css/sweetalert.css" />
  </head>
  <body>
   <div class="container">

      
      
		<form method="post" action="" name="login">
		<label>Username or Email</label>
		<input type="text" value="rafa" class="form-control" name="usernameEmail" autocomplete="off" />
		<div class="clearfix"></div>
<span class="noline"><hr class="featurette-divider"></span>
		<label>Password</label>
		<input type="password" value="1234" class="form-control"  name="password" autocomplete="off"/>
		<div class="errorMsg"><?php echo $_smarty_tpl->tpl_vars['errorMsgLogin']->value;?>
</div>
		<p class="text-center"><input type="submit" class="btn btn-primary" name="loginSubmit" value="Acceder al &aacute;rea"></p>
		</form>



    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/popper.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/sweetalert.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/jquery.cookie.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/tether.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/js/scripts.js"></script>
  </body>
</html>
<?php }
}
