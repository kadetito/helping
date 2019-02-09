<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:58:18
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b587a24dfb6_04416905',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '309fe9293562adec7c7270ffa40cbb78388944b7' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/header.tpl',
      1 => 1549474726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b587a24dfb6_04416905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19519944775c5b587a214285_65868269';
?>
<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
                                                                            <a href="<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'urlHomeLogo\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
"><img src="img/logo-helping-city.png" alt="" /></a>
                                                                            
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												
                                                                                                <li><a href="#">Todo es posible</a></li>	
                                                                                              
                                                                                               <li ><a href="#">Servicios</a></li>	
                                                                                                <li><a href="#">Ofertas	</a></li>
                                                                                                <li><a href="#">Noticias</a></li>
                                                                                                
                                                                                                
                                                                                                
                                                                                    <?php if (isset($_smarty_tpl->tpl_vars['detalleUsuario']->value)) {?> 
                                                                                      <li><?php echo $_smarty_tpl->tpl_vars['detalleUsuario']->value;?>
</li>
                                                                                    <?php } else { ?>
                                                                                      <li> <a id="modal-516206" href="#modal-container-516206" role="button" data-toggle="modal">Acceso a tu cuenta</a></li> 
                                                                                    <?php }?> 

                                                                                                
                                                                                                
                                                                                                
											</ul>
                                                                                    <h3 class="nomprovtop mt-3 text-right"><?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombreProvinciaHeader\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
</h3>
										</div>
										<div class="header_top_phone">
											<i class="fab fa-facebook-f circle-icon"></i>
											<i class="fab fa-twitter circle-icon"></i>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="row header_nav_content  align-items-center ">
										       <div class="col-lg-4  ml-auto">

                                                                                              

<form action="" METHOD="POST" name="search_container_form" id="search_container_form2" class="search_container_form">
    <input type="hidden" name="inicio_provincia" value="<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombreProvincia\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
" />
<select id="e2_2" onchange="this.form.submit()" multiple="multiple" name="inicio_categoria" id="inicio_categoria" style="width:100%" class="select2-multi-col">
<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleCategoriasSelect\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
    
</select>											
</form>
											</div>

                                                                                    	<div class="col-lg-8 " >
												
                                                                                            <form action="<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
/<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'lengua\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
/<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombreProvincia\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
/rb/resultado" METHOD="GET" id="search_container_form">
                                                                                            
													
                                                                                                <div class="row">
                                                                                                <div class="col-6" >
                                                                                                    <select name="bpr" id="busquedaProvincia" class="search_container_input" placeholder="D&oacute;nde?"><option value="" selected>D&oacute;nde?</option><?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleProvinciasSelect\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
</select>    
                                                                                               </div>
                                                                                                <div class="col-6" >
                                                                                                    <input type="text" name="bs" class="search_container_inpute" placeholder="Buscar" >
                                                                                                    <button type="submit"  class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                                                                </div>
                                                                                                </div>
                                                                                                
                                                                                                
												
                                                                                            </form>       
                                                                                                    
                                                                                                    
											</div>
          
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
<div class="modal fade" id="modal-container-516206" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		
		<div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-right">
                        <button type="button" class="close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
                    </div>
                </div>
	
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="row  p-5">
		<div class="col-5">
                    <h4>Si est&aacute;s registrad@, accede a tu cuenta</h4>
			<form role="form" action="<?php echo '/*%%SmartyNocache:19519944775c5b587a214285_65868269%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:19519944775c5b587a214285_65868269%%*/';?>
/validar_sesion.php"  method="POST" class="contact_form">
				<div class="form-group">
					 
					<label for="nombre_usuario">
						Tu dirección de Correo
					</label>
					<input placeholder="E-mail" type="email" class="contact_input" name="nombre_usuario" id="nombre_usuario" />
				</div>
				<div class="form-group">
					 
					<label for="userpassword">
						Password
					</label>
					<input placeholder="Tu contraseña" type="password" class="contact_input" name="userpassword" id="userpassword" />
				</div>
				<div class="checkbox">
					No recuerdo mis datos
				</div> 
<button type="submit" class="contact_button" id="contact_button">Acceder</button>
                       
			</form>
		</div>
                        
                        
                        
                        
                        
                        <div class="col-1">
                        <div class="divider"></div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
		<div class="col-6">
                    <h4>Regístrate con nosotros!</h4>
                    <p>Disfruta de ofertas especiales y de información actualizada</p>
			<form role="form" action="alta_usuario.php" method="POST"  class="contact_form">
				<div class="form-group">
					 
					<label for="email_usuario">
						Tu E-mail
					</label>
					<input type="email" class="contact_input" id="email_usuario" />
				</div>
				<div class="form-group">
					<label for="tu_password">
						Password
					</label>
					<input type="password" class="contact_input" id="tu_password" />
				</div>
                                <div class="form-group">
					<label for="tu_password">
						Repite el Password
					</label>
					<input type="password" class="contact_input" id="re_password" />
				</div>
				
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Acepto la política de privacidad
					</label>
				</div> 
				<button type="submit" class="contact_button">
					Registrarte
				</button>
			</form>
		</div>
	</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
		</div>				
        </div>
    </div>
</div><?php }
}
