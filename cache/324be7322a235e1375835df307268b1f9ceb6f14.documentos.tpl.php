<?php
/* Smarty version 3.1.33, created on 2019-02-01 14:10:13
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/documentos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c544535cfb192_04278126',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b0aad3aaf8f34a90ebeb44ffc5afefaf37e45aad' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/documentos.tpl',
      1 => 1549026591,
      2 => 'file',
    ),
    '30d628089ed4e0b3081c7b32ea6e25ff31b2b8f6' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/menu.tpl',
      1 => 1549026592,
      2 => 'file',
    ),
    '309fe9293562adec7c7270ffa40cbb78388944b7' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/header.tpl',
      1 => 1549026592,
      2 => 'file',
    ),
    'ed96e2a6855642d6c7f55aa0876e35e98d4570d3' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/contenido.tpl',
      1 => 1549026590,
      2 => 'file',
    ),
    'e69c075c7d0a01e0281c639a6591c4fd4ffb2e92' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/anuncios.tpl',
      1 => 1549026589,
      2 => 'file',
    ),
    '757eb360c052917972c7354a7b2dfc3edbaf1373' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/banner_central.tpl',
      1 => 1549026589,
      2 => 'file',
    ),
    '627a9c9fef207a4f77f2aecee8862da9a9a1eb8b' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/stuff_noticias.tpl',
      1 => 1549026593,
      2 => 'file',
    ),
    'f55c5f5e22dcdd97dae3607176251ac1e92b60a1' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/footer.tpl',
      1 => 1549026592,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c544535cfb192_04278126 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lengua']->value;?>
">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['getNombreProvincia']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['titulo_general']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_tags']->value;?>
">
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
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
										<img src="img/logo-helping-city.png" alt="" />
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												
                                                                                                <li><a href="#">Todo es posible</a></li>	
                                                                                              
                                                                                               <li ><a href="#">Servicios</a></li>	
                                                                                                <li><a href="#">Ofertas	</a></li>
                                                                                                <li><a href="#">Noticias</a></li>	
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
											  <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
<form action="" METHOD="POST" name="search_container_form" id="search_container_form" class="search_container_form">
    <input type="text" name="inicio_provincia" value="<?php echo $_smarty_tpl->tpl_vars['nombreProvincia']->value;?>
" />
<select id="e2_2" onchange="this.form.submit()" multiple="multiple" name="inicio_categoria" id="inicio_categoria" style="width:100%" class="select2-multi-col">
<?php echo $_smarty_tpl->tpl_vars['bucleCategoriasSelect']->value;?>
    
</select>											
</form>
											</div>
											
                                                                                    	<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Buscar" required="required">
                                                                                                        
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div>
                                                                                    <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
                                                                                                   
                                                                                                    <select name="inicio_provincia" id="busquedaProvincia" class="search_container_input" placeholder="D&oacute;nde?"><option value="" selected>D&oacute;nde?</option><?php echo $_smarty_tpl->tpl_vars['bucleProvinciasSelect']->value;?>
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
		</header><!-- Info Boxes -->
	<div class="info mb-sm-3">
		<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 bganuncio d-none d-xl-block"  style="background:url('<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['bucleAnunciosLaterales']->value;?>
') ;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-8">
                <div class="row row-eq-height mb-sm-3">            
 <!-------------------------------------------------------------------------------->                           


                            
<?php if ($_smarty_tpl->tpl_vars['paginaActual']->value == "categorias") {?>
	<?php echo $_smarty_tpl->tpl_vars['bucleCategoriasEscog']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['paginaActual']->value == "detalle_oferta") {?>
	<?php echo $_smarty_tpl->tpl_vars['detalleOferta']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['paginaActual']->value == "detalle_evento") {?>
	<?php echo $_smarty_tpl->tpl_vars['detalleEvento']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['paginaActual']->value == "detalle_comercio") {?>
	<?php echo $_smarty_tpl->tpl_vars['detalleComercio']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['paginaActual']->value == "detalle_noticia") {?>
	<?php echo $_smarty_tpl->tpl_vars['detalleNoticia']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['paginaActual']->value == "detalle_documentos") {?>
	<?php echo $_smarty_tpl->tpl_vars['detalleDocumento']->value;?>

<?php } elseif ($_smarty_tpl->tpl_vars['paginaActual']->value == "documentos") {?>
	<?php echo $_smarty_tpl->tpl_vars['bucleDocumentos']->value;?>

<?php } else { ?>
	Welcome, whatever you are.
<?php }?>                            
                            

                            
                            
                        
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
                                </div>
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
									<li><a href="#">Cookies</a></li>
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
