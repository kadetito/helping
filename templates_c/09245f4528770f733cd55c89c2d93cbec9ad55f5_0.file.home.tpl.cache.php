<?php
/* Smarty version 3.1.33, created on 2019-01-30 18:43:11
  from 'C:\AppServ\www\eventos\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51f03f96f8f4_97300260',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '09245f4528770f733cd55c89c2d93cbec9ad55f5' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\home.tpl',
      1 => 1548853578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/menu.tpl' => 1,
    'file:templates/header.tpl' => 1,
    'file:templates/introduccion.tpl' => 1,
    'file:templates/banner_central.tpl' => 1,
    'file:templates/mejores_comercios.tpl' => 1,
    'file:templates/stuff_noticias.tpl' => 1,
    'file:templates/anuncios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5c51f03f96f8f4_97300260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '482829475c51f03f903e69_08546092';
?>
<div id="clicks"></div><!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'lengua\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>
">
<head>
<title><?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'getNombreProvincia\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>
 - <?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'titulo_general\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>
 - <?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'version\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_tags\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>
">
<meta name="author" content="<?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'autor\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>
">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/tema_helping_global.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/carrusel.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_datos\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>

    <?php echo '/*%%SmartyNocache:482829475c51f03f903e69_08546092%%*/<?php echo $_smarty_tpl->tpl_vars[\'codigo_analytics\']->value;?>
/*/%%SmartyNocache:482829475c51f03f903e69_08546092%%*/';?>

</head>
<body>

<div class="super_container">
<?php $_smarty_tpl->_subTemplateRender("file:templates/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/introduccion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/banner_central.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
<?php $_smarty_tpl->_subTemplateRender("file:templates/mejores_comercios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	       
<?php $_smarty_tpl->_subTemplateRender("file:templates/stuff_noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>        
<div class="departments">
    <div class="container"><?php $_smarty_tpl->_subTemplateRender("file:templates/anuncios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/tiker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
function onClick(e) {   
       var id = e.getAttribute('data-pageref-id');
       var poste = 'id='+id;

    $.ajax({                        
           type: "POST",                 
           url: '../contador_clicks.php',                  
           data: {id:id},
           success: function(data)             
           {
             console.log(data);          
           }
       });
       
       
       
}


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/parallax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
