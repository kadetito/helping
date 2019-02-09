<?php
$smarty = new Smarty;
$smarty->force_compile = true;//fuerza eliminar chache(comentar esta linea al acabar)
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
?>