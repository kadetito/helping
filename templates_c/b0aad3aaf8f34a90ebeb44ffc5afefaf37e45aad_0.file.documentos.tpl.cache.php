<?php
/* Smarty version 3.1.33, created on 2019-02-01 14:10:13
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/documentos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c544535c35172_82573554',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b0aad3aaf8f34a90ebeb44ffc5afefaf37e45aad' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/documentos.tpl',
      1 => 1549026591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/menu.tpl' => 1,
    'file:templates/header.tpl' => 1,
    'file:templates/contenido.tpl' => 1,
    'file:templates/banner_central.tpl' => 1,
    'file:templates/stuff_noticias.tpl' => 1,
    'file:templates/anuncios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5c544535c35172_82573554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13158459495c544535bcb028_14942201';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'lengua\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>
">
<head>
<title><?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'getNombreProvincia\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>
 - <?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'titulo_general\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>
 - <?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'version\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_tags\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>
">
<meta name="author" content="<?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'autor\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>
">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/selectcombo.css">
<link rel="stylesheet" type="text/css" href="css/tema_helping_global.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/carrusel.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_datos\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>

    <?php echo '/*%%SmartyNocache:13158459495c544535bcb028_14942201%%*/<?php echo $_smarty_tpl->tpl_vars[\'codigo_analytics\']->value;?>
/*/%%SmartyNocache:13158459495c544535bcb028_14942201%%*/';?>

</head>
<body>

<div class="super_container">
<?php $_smarty_tpl->_subTemplateRender("file:templates/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/contenido.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/banner_central.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
	       
<?php $_smarty_tpl->_subTemplateRender("file:templates/stuff_noticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>        
<div class="bannersinferiores">
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
 src="js/parallax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/tiker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/select2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    
    
    function format(state) {
    if (!state.id) return state.text; // optgroup
    return  state.text;
    }

    $("#e2_2").select2({
      placeholder: "Qué estás buscando?",
      formatResult: format,
      formatSelection: format,
      escapeMarkup: function(m) { return m; }
    });


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
 src="js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
