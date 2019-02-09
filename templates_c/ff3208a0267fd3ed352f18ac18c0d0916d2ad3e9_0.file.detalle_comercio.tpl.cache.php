<?php
/* Smarty version 3.1.33, created on 2019-02-06 16:04:01
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/detalle_comercio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5af76143a032_81585028',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'ff3208a0267fd3ed352f18ac18c0d0916d2ad3e9' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/detalle_comercio.tpl',
      1 => 1549391013,
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
function content_5c5af76143a032_81585028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1401292685c5af76135f917_51195251';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'lengua\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
">
<head>
<title><?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'comerTitulo\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
 - <?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'titulo_general\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
 <?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombreProvinciaHeader\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
 - <?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'version\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'comerMetaTags\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
">
<meta property="og:title" content="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'comerTitulo\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
">
<meta property="og:site_name" content="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'titulo_general\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
 <?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombreProvinciaHeader\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
">
<meta property="og:url" content="www.helpingcity.es">
<meta property="og:description" content="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'comerMetaTags\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/img/<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'og_imagen\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
">
<link rel="shortcut icon" type="image/ico" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/favicon.ico"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/favicon-16x16.png">
<link rel="manifest" href="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>
/iconos/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/selectcombo.css">
<link rel="stylesheet" type="text/css" href="css/tema_helping_global.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/carrusel.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/colorbox.css">
  <?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_datos_comercio\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>

    <?php echo '/*%%SmartyNocache:1401292685c5af76135f917_51195251%%*/<?php echo $_smarty_tpl->tpl_vars[\'codigo_analytics\']->value;?>
/*/%%SmartyNocache:1401292685c5af76135f917_51195251%%*/';?>

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
 src="js/jquery.colorbox-min.js"><?php echo '</script'; ?>
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
>
	$(document).ready(function(){
			$(".group4").colorbox({rel:'group4', slideshow:true,slideshowAuto:false});
                        $(".ajax").colorbox();
			$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
			});
	});
		<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
