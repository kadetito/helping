<?php
/* Smarty version 3.1.33, created on 2019-01-30 18:43:11
  from 'C:\AppServ\www\eventos\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51f03f9cbd45_79714405',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '2537bcfb5197afffee622c49e3005584d92a2774' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\header.tpl',
      1 => 1548785981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51f03f9cbd45_79714405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5778875025c51f03f9bdd37_13730608';
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
										<img src="img/logo-helping-city.png" alt="" />
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												
                                                                                                <li><a href="#">Todo es posible</a></li>	
                                                                                               <li><a href="#">Trabaja con nosotros</a></li>
                                                                                                <li><a href="#">Acceso a tu cuenta</a></li>
											</ul>
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
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
												
                                                                                                <li class="active"><a href="#">Servicios</a></li>	
                                                                                                <li><a href="#">Ofertas	</a></li>
                                                                                                <li><a href="#">Noticias</a></li>	
                                                                                                
												</ul>
											</nav>
											
                                                                                    	<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Buscar" required="required">
                                                                                                        
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div>
                                                                                    <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
                                                                                                   
                                                                                                    <select name="inicio_provincia" id="busquedaProvincia" class="search_container_input" placeholder="D&oacute;nde?"><option value="" selected>D&oacute;nde?</option><?php echo '/*%%SmartyNocache:5778875025c51f03f9bdd37_13730608%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleProvinciasSelect\']->value;?>
/*/%%SmartyNocache:5778875025c51f03f9bdd37_13730608%%*/';?>
</select>    
													
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
		</header><?php }
}
