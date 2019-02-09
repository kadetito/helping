<?php
/* Smarty version 3.1.33, created on 2019-01-30 13:42:50
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c519bca51bbd7_71204000',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '2ae7bb17f793392db1067c7df578f63358339640' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/banners.tpl',
      1 => 1548811287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/anuncios.tpl' => 1,
    'file:templates/actualidad.tpl' => 1,
  ),
),false)) {
function content_5c519bca51bbd7_71204000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4601454415c519bca50a229_75665987';
?>
<!-- Info Boxes -->
	<div class="info mb-sm-3">
		<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 bganuncio d-none d-xl-block"  style="background:url('<?php echo '/*%%SmartyNocache:4601454415c519bca50a229_75665987%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:4601454415c519bca50a229_75665987%%*/';?>
/img/<?php echo '/*%%SmartyNocache:4601454415c519bca50a229_75665987%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleAnunciosLaterales\']->value;?>
/*/%%SmartyNocache:4601454415c519bca50a229_75665987%%*/';?>
') ;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-8">
                <div class="row row-eq-height mb-sm-3">            
 <!-------------------------------------------------------------------------------->                           

 <!-- slider -->
				<div class="col-lg-12 info_box_col">
                                    
		<div class="carousel slide" id="carousel-755385">
				
				<div class="carousel-inner">
<?php echo '/*%%SmartyNocache:4601454415c519bca50a229_75665987%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleDestacados\']->value;?>
/*/%%SmartyNocache:4601454415c519bca50a229_75665987%%*/';?>

					
				
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




<div class="col-md-2 bganuncio2 d-none d-xl-block" style="background:url('<?php echo '/*%%SmartyNocache:4601454415c519bca50a229_75665987%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:4601454415c519bca50a229_75665987%%*/';?>
/img/<?php echo '/*%%SmartyNocache:4601454415c519bca50a229_75665987%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleAnunciosLaterales\']->value;?>
/*/%%SmartyNocache:4601454415c519bca50a229_75665987%%*/';?>
') ;"></div>



                       </div>
		</div>
	</div>
<?php }
}
