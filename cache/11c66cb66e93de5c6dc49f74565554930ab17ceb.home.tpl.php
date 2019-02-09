<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:56:24
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b5808dc1428_26774599',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'f4f84b730c760776b4de1bd4cbae481853f95797' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/home.tpl',
      1 => 1549474726,
      2 => 'file',
    ),
    '30d628089ed4e0b3081c7b32ea6e25ff31b2b8f6' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/menu.tpl',
      1 => 1549474727,
      2 => 'file',
    ),
    '309fe9293562adec7c7270ffa40cbb78388944b7' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/header.tpl',
      1 => 1549474726,
      2 => 'file',
    ),
    '005f99e9a36aa70847dfe3233d09f01e9d66f37b' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/introduccion.tpl',
      1 => 1549474726,
      2 => 'file',
    ),
    'e69c075c7d0a01e0281c639a6591c4fd4ffb2e92' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/anuncios.tpl',
      1 => 1549474723,
      2 => 'file',
    ),
    '702fa160b91a5b894565afc09db78fa8925b14e9' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/actualidad.tpl',
      1 => 1549474723,
      2 => 'file',
    ),
    '757eb360c052917972c7354a7b2dfc3edbaf1373' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/banner_central.tpl',
      1 => 1549474723,
      2 => 'file',
    ),
    'b4a78acd12f7f97d7a632a168bd01e919c0a1d5d' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/mejores_comercios.tpl',
      1 => 1549474727,
      2 => 'file',
    ),
    '627a9c9fef207a4f77f2aecee8862da9a9a1eb8b' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/stuff_noticias.tpl',
      1 => 1549474728,
      2 => 'file',
    ),
    'f55c5f5e22dcdd97dae3607176251ac1e92b60a1' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/footer.tpl',
      1 => 1549474726,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c5b5808dc1428_26774599 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lengua']->value;?>
">
<head>
<title> <?php echo $_smarty_tpl->tpl_vars['titulo_general']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nombreProvinciaHeader']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metasMetadatos']->value;?>
">
<meta property="og:title" content=" <?php echo $_smarty_tpl->tpl_vars['titulo_general']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nombreProvinciaHeader']->value;?>
">
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['titulo_general']->value;?>
">
<meta property="og:url" content="www.helpingcity.es">
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['metasMetadatos']->value;?>
">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['og_imagen']->value;?>
">
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
<link rel="shortcut icon" type="image/ico" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/favicon.ico"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/favicon-16x16.png">
<link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/iconos/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
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
    <?php echo $_smarty_tpl->tpl_vars['meta_datos']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['codigo_analytics']->value;?>

</head>
<body>

<div class="super_container">
	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				<li class="menu_item"><a href="#">About us</a></li>
				<li class="menu_item"><a href="#">Services</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['urlHomeLogo']->value;?>
"><img src="img/logo-helping-city.png" alt="" /></a>
                                                                            
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												
                                                                                                <li><a href="#">Todo es posible</a></li>	
                                                                                              
                                                                                               <li ><a href="#">Servicios</a></li>	
                                                                                                <li><a href="#">Ofertas	</a></li>
                                                                                                <li><a href="#">Noticias</a></li>
                                                                                                
                                                                                                
                                                                                                
                                                                                                                                                                          <li> <a id="modal-516206" href="#modal-container-516206" role="button" data-toggle="modal">Acceso a tu cuenta</a></li> 
                                                                                     

                                                                                                
                                                                                                
                                                                                                
											</ul>
                                                                                    <h3 class="nomprovtop mt-3 text-right"><?php echo $_smarty_tpl->tpl_vars['nombreProvinciaHeader']->value;?>
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
    <input type="hidden" name="inicio_provincia" value="<?php echo $_smarty_tpl->tpl_vars['nombreProvincia']->value;?>
" />
<select id="e2_2" onchange="this.form.submit()" multiple="multiple" name="inicio_categoria" id="inicio_categoria" style="width:100%" class="select2-multi-col">
<?php echo $_smarty_tpl->tpl_vars['bucleCategoriasSelect']->value;?>
    
</select>											
</form>
											</div>

                                                                                    	<div class="col-lg-8 " >
												
                                                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lengua']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nombreProvincia']->value;?>
/rb/resultado" METHOD="GET" id="search_container_form">
                                                                                            
													
                                                                                                <div class="row">
                                                                                                <div class="col-6" >
                                                                                                    <select name="bpr" id="busquedaProvincia" class="search_container_input" placeholder="D&oacute;nde?"><option value="" selected>D&oacute;nde?</option><?php echo $_smarty_tpl->tpl_vars['bucleProvinciasSelect']->value;?>
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
			<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
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
</div><!-- Info Boxes -->
	<div class="info mb-sm-3">
		<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 bganuncio d-none d-xl-block"  style="background:url('<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosLaterales']->value;?>
') ;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-8">
                <div class="row row-eq-height mb-sm-3">            
 <!-------------------------------------------------------------------------------->                           

 <!-- slider -->
				<div class="col-lg-12 info_box_col">
                                    
		<div class="carousel slide" id="carousel-755385">
				
				<div class="carousel-inner">
<?php echo $_smarty_tpl->tpl_vars['bucleOfertas']->value;?>

					
				
				</div> 
                    
			</div>
				</div>           
                            
                            
                            
                            
                            
                            
                            
 <!-------------------------------------------------------------------------------->                          
                            
                        </div>                      
                            
                            
                            
<div class="row row-eq-height">
    <div class="col-md-12">
<!-------------------------------------------------------------------------------->
	<div id="lecarous" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

             <div class="carousel-item active">
                <div class="row">
<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosBanner']->value;?>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosBanner_2']->value;?>

                </div>
            </div>
        </div>
    </div>












                       

<!-------------------------------------------------------------------------------->
</div>
                                </div><div class="noticias mt-sm-3">
    <div class="row">
				<div class="col text-center">
					<div class="noticias_title">Propuestas</div>
					<div class="noticias_subtitle">para escoger</div>
				</div>
			</div>

<div class="row row-eq-height"> 
    
    <?php echo $_smarty_tpl->tpl_vars['bucleEventos']->value;?>

    

    
</div></div>
                        </div>




<div class="col-md-2 bganuncio2 d-none d-xl-block" style="background:url('<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosLaterales']->value;?>
') ;"></div>



                       </div>
		</div>
	</div>
	<div class="cta">
		<div class="parallax_background parallax-window" style="background:url(img/cta_1.jpg);" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title pl-5">Pida una cita con uno de nuestros doctores profesionales.</div>
							<div class="cta_subtitle pl-5">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas.</div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="#"><span>Llame ahora</span><span>Llame ahora</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- Departments -->

	<div class="departments">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Mejores comercios</div>
					<div class="section_subtitle">para escoger</div>
				</div>
			</div>
			<div class="row dept_row">
				<div class="col">
					<div class="dept_slider_container_outer">
						<div class="dept_slider_container">

							<!-- Slider -->
							<div class="owl-carousel owl-theme dept_slider">
								
								<!-- Slide -->
						<?php echo $_smarty_tpl->tpl_vars['bucleComercios']->value;?>


							</div>
							
						</div>

						<!-- Dept Slider Nav -->
						<div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

					</div>
						
				</div>
			</div>
		</div>
	</div>	       

	<!-- FAQ & News -->

	<div class="stuff">
		<div class="container"><div class="card p-5">
			<div class="row">

				

				<!-- Latest News -->
				<div class="col-lg-12">
					<div class="news">
						<div class="news_title">&Uacute;ltimas noticias</div>
						<div class="news_subtitle">lee acerca de lo que te interesa</div>
						<div class="news_container">
                                                <?php echo $_smarty_tpl->tpl_vars['bucleNoticias']->value;?>

                                                </div>
					</div>
				</div>

			</div>
		</div></div>
	</div>
        
<div class="bannersinferiores">
    <div class="container"><div class="row row-eq-height">
    <div class="col-md-12">
<!-------------------------------------------------------------------------------->
	<div id="lecarous" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

             <div class="carousel-item active">
                <div class="row">
<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosBanner']->value;?>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosBanner_2']->value;?>

                </div>
            </div>
        </div>
    </div>












                       

<!-------------------------------------------------------------------------------->
</div>
                                </div></div>
</div>
<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/background3fosca.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<img src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/logo-helping-city-blanco.png" alt="Helping City" />	
							</div>
							<div class="footer_about_text">El portal donde encontarás todo lo que busques</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									
							
									<li><i class="fab fa-facebook-f circle-icon"></i></li>
									<li><i class="fab fa-twitter circle-icon"></i></li>
								</ul>
							</div>
							<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 

</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Envíanos un mensaje</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Tu nombre" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Mensaje" required="required"></textarea>
									<button class="footer_contact_button">enviar mensaje</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Sitemap</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Todo es posible</div>
									
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Servicios</div>
									
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Ofertas</div>
									
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Noticias</div>
									
								</li>
                                                                
                                                                


                                                                
                                                                
                                                                
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="index.html">Inicio</a></li>
									<li><a href="about.html">Todo es posible</a></li>
									<li><a href="services.html">Servicios</a></li>
									<li><a href="news.html">Ofertas</a></li>
									<li><a href="contact.html">Noticias</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">Contacta</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lengua']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nombreProvincia']->value;?>
/d/1/aviso-legal">Aviso Legal</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lengua']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['nombreProvincia']->value;?>
/d/2/cookies">Cookies</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+34 586 778 8892</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer></div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/tiker.js"></script>
<script src="js/select2.min.js"></script>

<script>
    
    
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


</script>

<script src="js/custom.js"></script>
</body>
</html><?php }
}
