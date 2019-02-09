<?php
/* Smarty version 3.1.33, created on 2019-01-25 16:40:09
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4b2dd928be97_16482280',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5c4b2dd928be97_16482280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21214813945c4b2dd922e0a2_64730108';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'lengua\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'settings_version\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
</title>
    <link rel="icon" href="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
favicon.ico">
    <meta name="description" content="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'metas\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
">
    <meta name="author" content="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'autor\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
">
    <link href="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
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
		<div class="errorMsg"><?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'errorMsgLogin\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
</div>
		<p class="text-center"><input type="submit" class="btn btn-primary" name="loginSubmit" value="Acceder al &aacute;rea"></p>
		</form>



    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/tether.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:21214813945c4b2dd922e0a2_64730108%%*/';?>
/js/scripts.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
