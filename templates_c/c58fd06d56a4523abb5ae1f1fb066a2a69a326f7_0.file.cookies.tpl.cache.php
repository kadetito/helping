<?php
/* Smarty version 3.1.33, created on 2019-01-30 18:43:53
  from 'C:\AppServ\www\eventos\templates\cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51f0692bfb97_38020195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58fd06d56a4523abb5ae1f1fb066a2a69a326f7' => 
    array (
      0 => 'C:\\AppServ\\www\\eventos\\templates\\cookies.tpl',
      1 => 1548613734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51f0692bfb97_38020195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21151455415c51f0692ade72_04647501';
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
