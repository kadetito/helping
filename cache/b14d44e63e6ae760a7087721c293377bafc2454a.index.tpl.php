<?php
/* Smarty version 3.1.33, created on 2019-01-15 15:26:51
  from '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3dedabb40711_95064805',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'dce34e9ab79094c4ec5a5fc245d196c236b0d588' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/index.tpl',
      1 => 1544888515,
      2 => 'file',
    ),
    '7e5d952758851b888278e6a50ae37c7fb9b386f4' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/header.tpl',
      1 => 1544888515,
      2 => 'file',
    ),
    '5ed3ee69a7cc72c5635149a34740189676f709ba' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/footer.tpl',
      1 => 1544888515,
      2 => 'file',
    ),
    '432e4ad96a0c1fa70c767d78db35dc3f83c1fcd4' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/practice/templates/modales.tpl',
      1 => 1544888515,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c3dedabb40711_95064805 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['settings_version']->value;?>
</title>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
favicon.ico">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
    <link href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
css/sweetalert.css" />
  </head>
  <body>
   <div class="container-fluid">
      <header>
	<div class="row">
		<div class="col-12">
                    
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top " >
			 
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <img class="imagenlogo ml-4" src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
img/logowebentorn.png" alt="Logotipo de la empresa" />
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/index">Dashboard <span class="sr-only">(current)</span></a>
						</li>

						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Lista de proyectos</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/nuevo_proyecto">Nuevo Proyecto</a> 
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/lp/listaproyectos">Proyectos de esta Suite</a> 
							</div>
						</li>
						
						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Issues</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/nueva_issue">Nueva Issue</a> 
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/li/listaissues">Listado de Issues</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Cronograma</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Cronograma</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-md-auto mr-2">
						<li class="nav-item active">
							 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/config">Configuración <span class="sr-only">(current)</span></a>
						</li>

													<li class="nav-item dropdown">
								 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Nombre - Perfil</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
//perf/">Datos Personales</a> 
									 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['llengua']->value;?>
/logout">Desconectar</a> 
								</div>
							</li>
						 
					</ul>
				</div>
				
			</nav>


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
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
php/proyectos/proyecto.php">Proyectos</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
php/tareas/tarea.php">Tareas</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
php/usuarios/usuario.php">Usuarios</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
php/settings/settings.php">Settings</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
php/comentarios/comentario.php">Comentarios</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
logout.php">Logout</a></li>
                       </ul>
                        </div>
                    </div>
                    <div class="col-md-9 listados">
                        <h2>Lista de tareas</h2>                      
<?php echo $_smarty_tpl->tpl_vars['detalle']->value;?>
             

<div class="list-group list-group-flush">
 <?php echo $_smarty_tpl->tpl_vars['bucleTareas']->value;?>

</div>

<div class="clearfix"></div>
<span class="noline"><hr class="featurette-divider"></span>
<?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>



                    </div>
                </div>

                 
                
	</div>
      </div>
    </div>
       
</div>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/popper.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/sweetalert.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/jquery.cookie.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/tether.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>
js/scripts.js"></script>
  </body>
</html>
<?php }
}
