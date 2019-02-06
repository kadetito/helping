<?php
/* Smarty version 3.1.33, created on 2019-01-30 18:43:11
  from 'C:\AppServ\www\eventos\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51f03fb40524_46932131',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '09245f4528770f733cd55c89c2d93cbec9ad55f5' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\home.tpl',
      1 => 1548853578,
      2 => 'file',
    ),
    '1979746b53dcdce1b1a73e7a0fa7b40af20718bf' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\menu.tpl',
      1 => 1548762393,
      2 => 'file',
    ),
    '2537bcfb5197afffee622c49e3005584d92a2774' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\header.tpl',
      1 => 1548785981,
      2 => 'file',
    ),
    'c4e11ce048d66c67bf4d52bf0494f6d5133e2d55' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\introduccion.tpl',
      1 => 1548793875,
      2 => 'file',
    ),
    'fa965d030d77db4aa837fbdb04df5be81f74f286' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\anuncios.tpl',
      1 => 1548798618,
      2 => 'file',
    ),
    '2184411bd341c21db2feeb6f282d3b83d24a82bb' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\actualidad.tpl',
      1 => 1548854304,
      2 => 'file',
    ),
    '394828f3913dcd2a670705a00f1142358cd19be2' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\banner_central.tpl',
      1 => 1548772712,
      2 => 'file',
    ),
    '3cd63debcc69ac6e8788c11afb104d2ccd088fb0' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\mejores_comercios.tpl',
      1 => 1548772761,
      2 => 'file',
    ),
    '7d4d7d2d54551cf21ff95fb15dde8f522f6f01e0' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\stuff_noticias.tpl',
      1 => 1548772810,
      2 => 'file',
    ),
    '802ffa58931ead0ec47c1a7f9bc1da68e2fd7273' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\footer.tpl',
      1 => 1548872540,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c51f03fb40524_46932131 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="clicks"></div><!DOCTYPE html>
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

 <!-- slider -->
				<div class="col-lg-12 info_box_col">
                                    
		<div class="carousel slide" id="carousel-755385">
				
				<div class="carousel-inner">
<?php echo $_smarty_tpl->tpl_vars['bucleDestacados']->value;?>

					
				
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
	<!-- CTA -->

	<div class="cta mb-sm-3">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="img/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title">Make an appointment with one of our professional Doctors.</div>
							<div class="cta_subtitle">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas.</div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="#"><span>call now</span><span>call now</span></a></div>
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
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/dept_1.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Neonatology</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/dept_2.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Dentistry</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/dept_3.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Orthopedics</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/dept_4.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title">Laboratory</div>
										<div class="dept_link"><a href="#">Read More</a></div>
									</div>
								</div>

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
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="faq_title">Faq & Stuff</div>
						<div class="faq_subtitle">read all about it</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Maecenas fermentum tortor id fringilla molestie.</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Duis quis lacinia elit. Etiam varius mi eget lacus ultricies elementum</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Maecenas fermentum tortor id fringilla molestie.</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Latest News -->
				<div class="col-lg-5">
					<div class="news">
						<div class="news_title">Latest News</div>
						<div class="news_subtitle">read all about it</div>
						<div class="news_container">

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="img/latest_1.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">A simple blog post</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="img/latest_2.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">A new way to see things in medicine</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="img/latest_3.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Why is Pharma industry so big?</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
        
<div class="departments">
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="img/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">health<span>+</span></a>	
							</div>
							<div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
									<button class="footer_contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
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
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">Help Desk</a></li>
									<li><a href="#">Emergency Services</a></li>
									<li><a href="#">Appointment</a></li>
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
<script src="js/owl.carousel.js"></script>
<script src="js/tiker.js"></script>
<script>
    
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
<script src="js/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html><?php }
}
