<?php
/* Smarty version 3.1.33, created on 2019-02-06 22:56:19
  from '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b5803d07370_76211261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3832cdc8b22e12f38db096d6c4a285d79c31cab' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/eventos/templates/cookies.tpl',
      1 => 1549474724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b5803d07370_76211261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15546247795c5b5803d03619_73682852';
?>
      <!--Código HTML de la política de cookies -->
 
<!--La URL incluida es la parte que se ha de modificar -->
 
<div class="cookiesms" id="cookie1">
Esta web utiliza cookies, puedes ver nuestra  <a href="tu-url-donde-explicas-la-politica-de-cookies">la política de cookies, aquí</a> 
Si continuas navegando estás aceptándola
<button onclick="controlcookies()">Aceptar</button>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
if (localStorage.controlcookie>0){ 
document.getElementById('cookie1').style.bottom = '-50px';
}
<?php echo '</script'; ?>
>
 
<!-- Fin del código de cookies ---><?php }
}
