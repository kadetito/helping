<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador - Helping City</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{$ruta}/administracion/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{$ruta}/administracion/css/fontastic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="{$ruta}/administracion/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="{$ruta}/administracion/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="{$ruta}/administracion/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="{$ruta}/administracion/css/custom.css">
    <link rel="shortcut icon" href="{$ruta}/administracion/img/favicon.ico">
     <script src="{$ruta}/administracion/vendor/jquery/jquery.min.js"></script>
     <script src="{$ruta}/administracion/js/sweetalert2.all.min.js"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mklhjrnfcgz2tpvuzlqsz1xjtdi6s2yx92b1row5igthwoe0"></script>
<link rel="stylesheet" type="text/css" href="{$ruta}/css/colorbox.css">
<link rel="stylesheet" type="text/css" href="{$ruta}/administracion/css/upload.css">
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
            <li class="breadcrumb-item active">Lista de Categorías</li>
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
    <div class="col-6"><h4>Lista de Categorías</h4></div>
    <div class="col-6 text-right">
        Comercios > <a href="{$ruta}/administracion/lista_categorias.php">Listado de categorías</a>
    </div>
</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 CLASS="fotoseste">FOTOS DE ESTA CATEGORÍA</H5>

                     <div class="row">
                            <div class="col-md-12">  
                                <em>Las fotos de categoría están desactivadas</em>
{*                            <form method='post' action='' enctype='multipart/form-data'>
                            <input type="hidden" class="form-control" name="id_comefotos" value="{$getId_come}" />
                            <input type="hidden" name="fecha_foto" value="{$SetfechaHoy}" />
                            <input type="hidden" name="pagina" value="{$reciboPagina}" />
                            <input type="hidden" name="sector" value="{$reciboSector}" />
                            <input  class="form-control"  id="file_input"  accept="image/*" type='file' name='files[]' multiple />

                              <div id="drop_zone" class="drop-zone">
                                <p class="title">Arrastre aquí las imágenes</p>
                                <p><small>o bien pulse en este área</small></p>
                                <div class="preview-container"></div>
                              </div>
                              <div id="result_images" class="result-images"></div>
                              <p class="text-center"><input id="upload_images" class="btn btn-primary"  type='submit'  disabled value='Subir fotos' name='submitFotos' /></p>

                            </form>   *}                    
                        </div>
                      </div>
                       <div class="row">
                             <div class="col-md-12 overfll">
                               <div class="row">{$bucleTodasFotosAdmin}</div>
                              </div>
                        </div>
                        </div>
               <div class="col-md-9 formmodi introdatos">      

   
<form  action=""  method="POST" enctype="multipart/form-data" id="registroform" action="javascript:void(0)">
<input type="hidden" name="id_cate" value="{$getId_cateGoria}" />
<input type="hidden" name="pagina" value="{$reciboPagina}" />
<input type="hidden" name="sector" value="{$reciboSector}" />
<input type="hidden" name="alias_categoria" value="{$getAliasCateg}" />

<div class="row mb-3">
  <div class="col-md-12"><label for="nombre_categoria">Nombre categoría</label>
  <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" placeholder="Nombre de la categoría" value="{$getNombreCateg}" /></div>
</div>

<div class="row mb-3">
    <div class="col-md-12 text-center"><input type="submit" class="btn btn-primary" name="editar" value="Modificar registro" /></div>
</div>
</form>	           
                    
                    
                    
                    
                    
                    </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
   
              
                
                
   
                
           {$exitoOperacion}     
      {include file="templates/footer.tpl"}
    </div>
    <!-- JavaScript files-->
   
    <script src="{$ruta}/administracion/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{$ruta}/administracion/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="{$ruta}/administracion/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="{$ruta}/administracion/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{$ruta}/administracion/vendor/chart.js/Chart.min.js"></script>
    <script src="{$ruta}/administracion/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{$ruta}/administracion/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="{$ruta}/administracion/js/front.js"></script>
<script src="{$ruta}/js/jquery.colorbox-min.js"></script>
               <script src="{$ruta}/administracion/js/jquery.smartuploader.js"></script>
    <script>

 
        {literal}

 
    //bloqueo modal
    $(document).ready(function(){
        $('#modal-container-329132').modal({show: false,backdrop: 'static', keyboard: false});

        $('#modal-container-329132').on('hidden.bs.modal', function () {
         location.reload();
        })
    });


 
      tinymce.init({
 selector: 'textarea#codigador',
  height: 200,
  menubar: 'tools',
  plugins: 'advcode  ',
 
   toolbar: false

 
 });



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
                
 
{*<script>
{literal}
//$("#file_input").withDropZone("#drop_zone", {
//  action: {
//    name: "image",
//    params: {
//      preview: true,
//    }
//  },
//  
//  multiUploading: true,
//  ifWrongFile: "show",
//  maxFileSize: 2e+6,
//  autoUpload: false,
//  fileNameMatcher: /.*/,
//  fileMimeTypeMatcher: /.*/,
//  wrapperForInvalidFile: function(fileIndex) {
//    return "<p>\"" + this.files[fileIndex].name + "\" no se puede subir, sobrepasa las 2Mb o no es el tipo correcto</p>'";
//  }
///
//});


//$(document).ready(
//    function(){
//        $('#file_input').change(
//            function(){
 //               if ($(this).val()) {
 //                   $('#upload_images').attr('disabled',false);
 //                   // or, as has been pointed out elsewhere:
 //                   // $('input:submit').removeAttr('disabled'); 
 //               } 
 //           }
 //           );
 //   });
    

    
    
{/literal}
</script>*}

  </body>
</html>