<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador - Helping City</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.ico">
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="js/sweetalert2.all.min.js"></script>
  </head>
  <body>
{include file="templates/nav.tpl"}
    <div class="page">
    {include file="templates/header.tpl"}
    
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Lista de Sectores</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <div class="row">
           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  
<div class="row"> 
    <div class="col-6"><h4>Lista de Sectores</h4></div>
    <div class="col-6 text-right"><a id="modal-329132" href="#modal-container-329132" role="button" data-toggle="modal"><button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</button></a></div>
</div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th width="10%">ID</th>
                         
                          <th width="80%">Nombre</th>

                          <th width="10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        {$bucleSectoresAdmin}
                      </tbody>
                    </table>
                  </div>
                      {$paginador}
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
   
              
                
                
<div class="modal fade" id="modal-container-329132" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content"><div class="card p-3">
			<button type="button" class="close text-right" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body introdatos">

                            <form  action=""  method="POST" id="register" action="javascript:void(0)" >
                            <input type="hidden" name="seccion" value="comercios" />
                            <input type="hidden" name="fecha_alta" value="{$fechaHoy}" />
                            <input type="hidden" name="pagina" value="lista_sector" />

                          
                            
                            <div class="row mb-3">
                              <div class="col-md-12"><label for="nombre_sector">Nombre sector</label><input type="text" class="form-control" name="nombre_sector" id="nombre_sector" placeholder="Nombre del sector" value="" required /></div>
                            </div>
                          
                            <div class="row mb-3">
                                <div class="col-md-12 text-center"><input type="submit" class="btn btn-primary" name="agregar" value="Nuevo registro" /></div>
                            </div>
                            </form>	
                           
                      </div> 
		</div>			
            </div>
	</div>
</div>
                
                
              
      {include file="templates/footer.tpl"}
    </div>
    <!-- JavaScript files-->
   
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
     <script src="js/jquery.validate.min.js"></script>

    <script src="js/front.js"></script>
    {$exitoOperacion}  
{$exitoOperacionAlta}  
{$exitoOperacionDelCat}
{$exitoOperacionDelSec}
    <script>
        {literal}
    //bloqueo modal
    $(document).ready(function(){
        $('#modal-container-329132').modal({show: false,backdrop: 'static', keyboard: false});

        $('#modal-container-329132').on('hidden.bs.modal', function () {
         location.reload();
        })
    });

          {/literal}  
    </script>
    

  
  
  </body>
</html>