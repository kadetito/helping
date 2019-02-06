<?php
/* Smarty version 3.1.33, created on 2019-01-30 18:43:53
  from 'C:\AppServ\www\eventos\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51f0691dc715_80259810',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '780aa6ff5a1c248a6c3bdae0429e27a737bbb9d0' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\index.tpl',
      1 => 1548633281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/cookies.tpl' => 1,
  ),
),false)) {
function content_5c51f0691dc715_80259810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14887538245c51f0691180b5_64474495';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'lengua\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'titulo_general\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
 - <?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'version\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
</title>
    <meta name="description" content="<?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_tags\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
">
    <meta name="author" content="<?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'autor\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tema_helping.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/cookies.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'meta_datos\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>

    <?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'codigo_analytics\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>

  </head>
  <body>
	<div id="preloader">
            <div id="status">
                <div class="status1"><i class="fa fa-clock-o fa-2x fa-spin"></i></div>
		<div class="status2"></div>
            </div>
        </div>
<div class="container">
            <div class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1.5s">
               <br> <img src="img/logo-helping-city.png" class="logo" alt="" />
            </div>
            <div class="soon wow bounceInDown" data-wow-duration="2s" data-wow-delay="0s">
                <h3>&nbsp;</h3>
            </div>
            <h2 class="text-rotator-fade wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <span class="rotate">El Portal de los mejores comercios, ofertas y profesionales.</span>
            </h2>
            <i class="fa fa-dot-circle-o size wow bounceIn" data-wow-duration="1s" data-wow-delay="1s"></i>
            <span class="link-effect wow bounceIn" data-wow-duration="1s" data-wow-delay="1.5s">
                <a href="#page-right">Suscríbete</a>
            </span> 

       <form action="resultados.php" id="buscar" onsubmit="return validacampos()" method="POST" >  
	<div class="row">
            <div class="col-md-6">

      <input type="text"  id="busqueda" name="busqueda" class="search_query search-grande" placeholder="Qué estás buscando?" />
            </div>
            <div class="col-md-5"><select name="inicio_provincia" id="busquedaProvincia" class="search-grande" placeholder="D&oacute;nde?"><option value="" selected>D&oacute;nde?</option><?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleProvinciasSelect\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
</select></div>
            <div class="col-md-1"><button type="submit"  class="btn-transparent"><i class="fas fa-search fa-4x"></i></button></div>
	</div>
       </form>
            
        <form action="home.php" name="explorar" id="explorar" method="POST">  
            <div class="row">
            <div class="col-md-3 dispn">&nbsp;</div>
            <div class="col-md-6  wow bounceInUp mtop" data-wow-duration="1s" data-wow-delay="2s">
                <p>o bien puedes</p>
                <select onchange="return doit();" name="inicio_provincia" id="inicio_provincia" class="search-grande" placeholder="D&oacute;nde?"><option value="" selected>Explorar directamente en</option><?php echo '/*%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleProvinciasSelect\']->value;?>
/*/%%SmartyNocache:14887538245c51f0691180b5_64474495%%*/';?>
</select>
            </div>
            <div class="col-md-3 dispn">&nbsp;</div>
            </div>
        </form>    
</div>
            
 
        <?php $_smarty_tpl->_subTemplateRender("file:templates/cookies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



  <?php echo '<script'; ?>

    type="text/javascript"
    src="//code.jquery.com/jquery-1.9.1.js"
    
  ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/ui/1.9.2/jquery-ui.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <?php echo '<script'; ?>
>
        
  $(window).load(function(){
var json = '{"items":[{"name":"Ashok"},{"name":"Rai"},{"name":"Vinod"}]}';
var searchRequest = null;
$("#busqueda").autocomplete({
    maxLength: 5,
    source: function(request, response) {
        if (searchRequest !== null) {
            searchRequest.abort();
        }
        searchRequest = $.ajax({
            url: 'busqueda_sugerida.php',
            method: 'post',
            dataType: "json",
            data: {term: request.term, json: json},
            success: function(data) {
                searchRequest = null;
                response($.map(data.items, function(item) {
                    return {
                        value: item.name,
                        label: item.name
                    };
                }));
            }
        }).fail(function() {
            searchRequest = null;
        });
    }
});  });
<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/wow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.vegas.min.js"><?php echo '</script'; ?>
>	
        <?php echo '<script'; ?>
>
            //<![CDATA[
                $(function() {
                    $.vegas('slideshow', {
                    backgrounds:[
                        { src:'img/background.jpg', fade:1000  },
                        { src:'img/background2.jpg' , fade:1000  },
                        { src:'img/background3.jpg', fade:1000  }
                        ]
                    })('overlay');
                }); 
            //]]>
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        function doit() {
            var inicio_provincia = document.getElementById('inicio_provincia').value; 
            if (inicio_provincia.trim() == '') {
                return false;
            } else {      
                document.getElementById("explorar").submit();
            }
        }
        
       function validacampos() {


 var busqueda, busquedaProvincia, text;
 busqueda = document.getElementById("busqueda").value;
 busquedaProvincia = document.getElementById("busquedaProvincia").value;


  if (busqueda =='') {
     document.getElementById('busqueda').className = 'errorinput';return false;
  } 
  else if (busquedaProvincia =='') {
     document.getElementById('busquedaProvincia').className = 'errorinput';return false;
  } else {
    text = "Input OK";
  }
        
       
  
       }


    <?php echo '</script'; ?>
>

    
  </body>
</html><?php }
}
