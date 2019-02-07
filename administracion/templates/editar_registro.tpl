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
    <link rel="stylesheet" href="../../../css/custom.css">
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
            <li class="breadcrumb-item active">Lista de Comercios</li>
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
    <div class="col-6"><h4>Lista de Comercios</h4></div>
    <div class="col-6 text-right"><a id="modal-329132" href="#modal-container-329132" role="button" data-toggle="modal"><button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</button></a></div>
</div>
                </div>
                <div class="card-body">
           editar
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
   
              
                
                
<div class="modal fade" id="modal-container-329132" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content"><div class="card p-3">
			<button type="button" class="close text-right" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body introdatos">
                            
<form role="form">
<input type="hidden" name="fecha_alta" value="" />
<div class="row mb-3">
  <div class="col-md-12"><label for="id_cate">Categoría</label><select class="form-control f1" name="id_cate"><option value="">Categoría</option>{$bucleCategoriasSelect}</select></div>
</div>
<div class="row  mb-3">
    <div class="col-md-3"><label for="id_prov">Provincia</label><select class="form-control" id="provincia" name="id_prov"><option value="">Provincia</option>{$bucleProvinciasSelectporId}</select></div>
    <div class="col-md-3"><label for="id_poble">Población</label><select class="form-control"  id="poblacion" name="id_pobl"><option value="">Población</option>{$buclePoblacionSelect}</select></div>
    <div class="col-md-3"><label for="id_sect">Sector</label><select class="form-control" name="id_sect"><option value="">Sector</option>{$bucleSectorSelect}</select></div>
    <div class="col-md-3"><label for="id_tico">Tipo comercio</label><select class="form-control" name="id_tico"><option value="">Tipo de comercio</option>{$bucleTicoSelect}</select></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="nombre_comercio">Nombre comercio</label><input type="text" class="form-control" name="nombre_comercio" placeholder="Nombre del comercio" /></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="breve_comercio">Breve comercio</label><textarea class="form-control" name="breve_comercio" placeholder="Texto resumen"></textarea></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="descripcion_comercio">Descripción comercio</label><textarea class="form-control" name="descripcion_comercio" rows="7" placeholder="Descripción"></textarea></div>
</div>

<div class="row mb-3">
        <div class="col-md-3"><label for="direccion_comercio">Dirección comercio</label><input type="text" class="form-control" name="direccion_comercio" placeholder="Dirección" /></div>
        <div class="col-md-3"><label for="codigo_postal">Código postal</label><input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal" /></div>
        <div class="col-md-3"><label for="telefono_comercio">Teléfono comercio</label><input type="text" class="form-control" name="telefono_comercio" placeholder="Teléfono" /></div>
        <div class="col-md-3"><label for="fax_comercio">Fax comercio</label><input type="text" class="form-control" name="fax_comercio" placeholder="Fax" /></div>
</div>
<div class="row mb-3">
        <div class="col-md-6"><label for="email_comercio">E-mail comercio</label><input type="email" class="form-control" name="email_comercio" placeholder="E-mail" /></div>
        <div class="col-md-6"><label for="url_comercio">Url comercio</label><input type="text" class="form-control" name="url_comercio" placeholder="http://" /></div>
</div>
<div class="row mb-3">
    <div class="col-md-3"><label for="facebook_comercio">Facebook</label><input type="text" class="form-control" name="facebook_comercio" placeholder="Facebook" /></div>
    <div class="col-md-3"><label for="twitter_comercio">Twitter</label><input type="text" class="form-control" name="twitter_comercio" placeholder="Twitter" /></div>
    <div class="col-md-3"><label for="instagram_comercio">Instagram</label><input type="text" class="form-control" name="instagram_comercio" placeholder="Instagram" /></div>
    <div class="col-md-3"><label for="youtube_comercio">Youtube</label><input type="text" class="form-control" name="youtube_comercio" placeholder="Youtube" /></div>
</div>

<div class="row mb-3">
  <div class="col-md-12"><input type="checkbox" name="ccomercio_destacado"> <label for="ccomercio_destacado">Comercio Destacado</label></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="metadatos">Meta Data</label><textarea class="form-control f1" name="metadatos" placeholder="Metadatos"></textarea></div>
</div>
<div class="row mb-3">
    <div class="col-md-12"><label for="metas">Meta tags</label><textarea class="form-control f1" name="metas" placeholder="Meta tags"></textarea></div>
</div>
<div class="row mb-3">
    <div class="col-md-12 text-center"><input type="submit" class="btn btn-primary" name="" value="Crear nuevo" /></div>
</div>
</form>	
                           
                            </div> 
			</div>			
		</div>
	</div>
</div>
                
                
           {$exitoOperacion}     
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
    <script src="js/front.js"></script>

    <script>
        {literal}
    //bloqueo modal
    $(document).ready(function(){
        $('#modal-container-329132').modal({show: false,backdrop: 'static', keyboard: false});

        $('#modal-container-329132').on('hidden.bs.modal', function () {
         location.reload();
        })
    });

    //AJAX combo poblacion segun provincia
                $("#provincia").on('change', function () {
                    $("#provincia option:selected").each(function () {
                        var id_prov = $(this).val();
                        var rootdir = "{$ruta}";
                        $.post(rootdir+"/workers/poblacion.php", { id_prov: id_prov }, function(data) {
                            $("#poblacion").html(data);
                        });			
                    });
               });
 
          {/literal}  
    </script>
  </body>
</html>