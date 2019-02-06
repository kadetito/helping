<?php
/* Smarty version 3.1.33, created on 2019-01-15 15:26:51
  from '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3dedabaaadc2_76965223',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'dce34e9ab79094c4ec5a5fc245d196c236b0d588' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/index.tpl',
      1 => 1544888515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
    'file:templates/modales.tpl' => 1,
  ),
),false)) {
function content_5c3dedabaaadc2_76965223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17760258655c3dedab9db646_59974328';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'llengua\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'settings_version\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
</title>
    <link rel="icon" href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
favicon.ico">
    <meta name="description" content="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'metas\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
">
    <meta name="author" content="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'autor\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
">
    <link href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
css/sweetalert.css" />
  </head>
  <body>
   <div class="container-fluid">
      <header>
	<div class="row">
		<div class="col-12">
                    <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
        </div>
      </header>
      <div class="row titulosseccion mb-2 pl-3">
					 <div class="col-sm-5 mt-3">
						<h3>Escritorio principal</h3>
						<h6>Llistat de tasques</h6>
					</div>
					<div class="col-sm-3 text-right resbus mt-3">
					  <form action="" method="POST">
					    <select name="filtrado" class="form-control" onchange="this.form.submit()">
					    	
						     <option value="">Filtrar issues</option>
						     <option value="">Veure tot</option>
	
						     <option value="prioridad">Prioritat</option>
					       <option value="fecha_creacion">Ordenar per Data creaci&oacute;</option>
					       <option value="nombre_build">Ordenar per Nom</option>
     <option value="1600000">Ajornada</option>
					       <option value="1600001">En supervisí&oacute;</option>
					       <option value="1600002">Dubtes interns</option>
					       <option value="1600003">Consulta a Client</option>
					       <option value="1600004">Completada</option>
					       <option value="1600005">Aturada</option>
					       
					       <option value="1500002">Veure en Desenvolupament</option>
					       <option value="1500001">Veure en Test</option>
					       <option value="1500005">Veure Resoltes</option>
					       <option value="1500003">Veure Reobertes</option>
					       <option value="1500000">Veure Obertes</option>
					       <option value="1500004">Veure Tancades</option>
					       <option value="8000001">Assignades a mi</option>
					    </select>
					  </form>
					 </div>
					<div class="col-sm-4 mt-3"><form action="" method="POST">
						<div class="input-group chwrapper">
						   <input type="text" name="valor_busqueda" placeholder="Cercar per tasca" class="typeahead form-control"  autocomplete="off" />
						   <span class="input-group-btn">
						        <button type="submit" class="btn boton_custom btn-search"><i class="fa fa-search"></i></button>
						   </span>
						</div>
					</form>
	</div>
      </div>               
      <div class="row">
          <div class="col-md-12">
            <div class="card bloqeucentral">
                
                <div class="row vdivide">
                    <div class="marcax col-md-3">
                        <div class="card backgrey">
                            <ul>
                        <li><a href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
php/proyectos/proyecto.php">Proyectos</a></li>
                        <li><a href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
php/tareas/tarea.php">Tareas</a></li>
                        <li><a href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
php/usuarios/usuario.php">Usuarios</a></li>
                        <li><a href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
php/settings/settings.php">Settings</a></li>
                        <li><a href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
php/comentarios/comentario.php">Comentarios</a></li>
                        <li><a href="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
logout.php">Logout</a></li>
                       </ul>
                        </div>
                    </div>
                    <div class="col-md-9 listados">
                        <h2>Lista de tareas</h2>                      
<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'detalle\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
             

<div class="list-group list-group-flush">
 <?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleTareas\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>

</div>

<div class="clearfix"></div>
<span class="noline"><hr class="featurette-divider"></span>
<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'paginador\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>



                    </div>
                </div>

                 
                
	</div>
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>       
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/modales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/tether.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ruta\']->value;?>
/*/%%SmartyNocache:17760258655c3dedab9db646_59974328%%*/';?>
js/scripts.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
