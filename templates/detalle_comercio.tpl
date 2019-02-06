<!DOCTYPE html>
<html lang="{$lengua}">
<head>
<title>{$comerTitulo} - {$titulo_general} {$nombreProvinciaHeader} - {$version}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="{$comerMetaTags}">
<meta property="og:title" content="{$comerTitulo}">
<meta property="og:site_name" content="{$titulo_general} {$nombreProvinciaHeader}">
<meta property="og:url" content="www.helpingcity.es">
<meta property="og:description" content="{$comerMetaTags}">
<meta property="og:type" content="website">
<meta property="og:image" content="{$ruta}/img/{$og_imagen}">
<link rel="shortcut icon" type="image/ico" href="{$ruta}/favicon.ico"/>
<link rel="apple-touch-icon" sizes="57x57" href="{$ruta}/iconos/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="{$ruta}/iconos/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="{$ruta}/iconos/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="{$ruta}/iconos/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="{$ruta}/iconos/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="{$ruta}/iconos/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="{$ruta}/iconos/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="{$ruta}/iconos/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="{$ruta}/iconos/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{$ruta}/iconos/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="{$ruta}/iconos/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="{$ruta}/iconos/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="{$ruta}/iconos/favicon-16x16.png">
<link rel="manifest" href="{$ruta}/iconos/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{$ruta}/iconos/ms-icon-144x144.png">
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
  {$meta_datos_comercio}
    {$codigo_analytics}
</head>
<body>

<div class="super_container">
{include file="templates/menu.tpl"}
{include file="templates/header.tpl"}
{include file="templates/contenido.tpl"}
{include file="templates/banner_central.tpl"}	
{*{include file="templates/mejores_comercios.tpl"}*}	       
{include file="templates/stuff_noticias.tpl"}        
<div class="bannersinferiores">
    <div class="container">{include file="templates/anuncios.tpl"}</div>
</div>
{include file="templates/footer.tpl"}
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/tiker.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script>{literal}
    
    
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



{/literal}
</script>
<script>{literal}
	$(document).ready(function(){
			$(".group4").colorbox({rel:'group4', slideshow:true,slideshowAuto:false});
                        $(".ajax").colorbox();
			$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
			});
	});
		{/literal}</script>
<script src="js/custom.js"></script>
</body>
</html>