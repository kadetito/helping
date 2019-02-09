<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:56:24
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/introduccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b5808d72d39_75209661',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '005f99e9a36aa70847dfe3233d09f01e9d66f37b' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/introduccion.tpl',
      1 => 1549474726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/anuncios.tpl' => 1,
    'file:templates/actualidad.tpl' => 1,
  ),
),false)) {
function content_5c5b5808d72d39_75209661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20447838735c5b5808d688d9_95744936';
?>
<!-- Info Boxes -->
	<div class="info mb-sm-3">
		<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 bganuncio d-none d-xl-block"  style="background:url('<?php echo '/*%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/';?>
/img/<?php echo '/*%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleAnunciosLaterales\']->value;?>
/*/%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/';?>
') ;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-8">
                <div class="row row-eq-height mb-sm-3">            
 <!-------------------------------------------------------------------------------->                           

 <!-- slider -->
				<div class="col-lg-12 info_box_col">
                                    
		<div class="carousel slide" id="carousel-755385">
				
				<div class="carousel-inner">
<?php echo '/*%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleOfertas\']->value;?>
/*/%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/';?>

					
				
				</div> 
                    
			</div>
				</div>           
                            
                            
                            
                            
                            
                            
                            
 <!-------------------------------------------------------------------------------->                          
                            
                        </div>                      
                            
                            
                            
<?php $_smarty_tpl->_subTemplateRender("file:templates/anuncios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="noticias mt-sm-3">
    <?php $_smarty_tpl->_subTemplateRender("file:templates/actualidad.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
                        </div>




<div class="col-md-2 bganuncio2 d-none d-xl-block" style="background:url('<?php echo '/*%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/';?>
/img/<?php echo '/*%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleAnunciosLaterales\']->value;?>
/*/%%SmartyNocache:20447838735c5b5808d688d9_95744936%%*/';?>
') ;"></div>



                       </div>
		</div>
	</div>
<?php }
}
