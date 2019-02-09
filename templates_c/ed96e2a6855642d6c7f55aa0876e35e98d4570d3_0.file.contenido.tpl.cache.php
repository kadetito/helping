<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:58:18
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/contenido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b587a2c0ef3_87141164',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'ed96e2a6855642d6c7f55aa0876e35e98d4570d3' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/contenido.tpl',
      1 => 1549474724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/anuncios.tpl' => 1,
  ),
),false)) {
function content_5c5b587a2c0ef3_87141164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12748140445c5b587a26fbf5_58596766';
?>
<!-- Info Boxes -->
	<div class="info mb-sm-3">
		<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 bganuncio d-none d-xl-block"  style="background:url('<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
/img/<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleAnunciosLaterales\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
') ;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-8 mb-5">
                          
 <!-------------------------------------------------------------------------------->                           


                            
<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php if ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "categorias") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

    <div class="row"><div class="col-md-12 mb-5"><h2><?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'tituloCategoria\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</h2></div></div>
	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleCategoriasEscog\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "detalle_oferta") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'detalleOferta\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "detalle_evento") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'detalleEvento\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "detalle_comercio") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

    
    <div class="row">
        <div class="col-md-8">
            <h2><?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'comerTitulo\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</h2>
            <div class="recortefotoprincipal"><a href="<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
/img/<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagenPrincipal\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
" class="ajax"><img src="<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
/img/<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagenPrincipal\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'comerTitulo\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
" /></a></div>
            <h4><?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getBreve_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</h4>
            <p><?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getDescripcion_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Imagenes: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleTodasFotos\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
        </div>
        <div class="col-md-4">
            <h5><?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getAlias_provincia\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</h5>
            <p>Destacado: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getCcomercio_destacado\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p><address><?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getDireccion_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
 <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getCodigo_postal\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</address></p>
            <p>Poblacion:<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getId_pobl\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Sector: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getId_sect\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>en Helping City desde: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getFecha_alta\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Tel: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getTelefono_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Fax: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getFax_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>E-mail: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getEmail_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Web: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getUrl_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Facebook: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getFacebook_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Twitter: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getTwitter_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Instagram: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getInstagram_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Youtube: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getYoutube_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Yelp: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getYelp_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Fotolog: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getFotolog_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            <p>Twitter: <?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'getTwitter_comercio\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
</p>
            
        </div>
    </div>




    
<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "detalle_noticia") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'detalleNoticia\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "detalle_documentos") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'detalleDocumento\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "documentos") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleDocumentos\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "perfil") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'detalleUsuariopagina\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'paginaActual\']->value == "resultado") {?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'resultadosBus\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php } else { ?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>

	Welcome, whatever you are.
<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php }?>/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
                            
                            

                            
                            
                        
 <!-------------------------------------------------------------------------------->                          
                            
                               
                            
                            
                            
<?php $_smarty_tpl->_subTemplateRender("file:templates/anuncios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        </div>




<div class="col-md-2 bganuncio2 d-none d-xl-block" style="background:url('<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
/img/<?php echo '/*%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleAnunciosLaterales\']->value;?>
/*/%%SmartyNocache:12748140445c5b587a26fbf5_58596766%%*/';?>
') ;"></div>



                       </div>
		</div>
	</div>
<?php }
}
