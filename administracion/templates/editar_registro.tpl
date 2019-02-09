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
    <div class="col-6 text-right">
        Comercios > <a href="{$ruta}/administracion/lista_comercios.php">Listado de comercios</a>
    </div>
</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 CLASS="fotoseste">FOTOS DE ESTE COMERCIO</H5>

                     <div class="row">
                            <div class="col-md-12">                         
                            <form method='post' action='' enctype='multipart/form-data'>
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

                            </form>                       
                        </div>
                      </div>
                       <div class="row">
                             <div class="col-md-12 overfll">
                               <div class="row">{$bucleTodasFotosAdmin}</div>
                              </div>
                        </div>
                        </div>
               <div class="col-md-9 formmodi introdatos">      
                   
   
<form  action=""  method="POST" enctype="multipart/form-data" id="register" action="javascript:void(0)">
<input type="hidden" name="id_come" value="{$getId_come}" />
<input type="hidden" name="pagina" value="{$reciboPagina}" />
<input type="hidden" name="sector" value="{$reciboSector}" />

<div class="row mb-3">
  <div class="col-md-12"><label for="id_cate">Categoría</label><select class="form-control f1" name="id_cate" id="id_cate"><option value="{$getId_cate}">{$getCategoriaNombre}</option>{$bucleCategoriasSelect}</select></div>
</div>
<div class="row  mb-3">
    <div class="col-md-3"><label for="id_provincia">Provincia</label><select class="form-control" id="provincia" name="id_provincia"><option value="{$getId_prov}">{$getNombreProvincia}</option>{$bucleProvinciasSelectporId}</select></div>
    <div class="col-md-3"><label for="id_poble">Población</label><select class="form-control"  id="poblacion" name="id_pobl"><option value="{$getId_pobl}">{$getNombrePoblacion}</option>{$buclePoblacionSelect}</select></div>
    <div class="col-md-3"><label for="id_sect">Sector</label><select class="form-control" name="id_sect"><option value="{$getId_sect}">{$getNombreSector}</option>{$bucleSectorSelect}</select></div>
    <div class="col-md-3"><label for="id_tico">Tipo comercio</label><select class="form-control" name="id_tico"><option value="{$getId_tico}">{$getTicoNombre}</option>{$bucleTicoSelect}</select></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="nombre_comercio">Nombre comercio</label><input type="text" class="form-control" name="nombre_comercio" placeholder="Nombre del comercio" value="{$comerTitulo}"/></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="breve_comercio">Breve comercio</label><textarea class="form-control" name="breve_comercio" placeholder="Texto resumen">{$getBreve_comercio}</textarea></div>
</div>
<div class="row mb-3">
  <div class="col-md-12"><label for="descripcion_comercio">Descripción comercio</label><textarea class="form-control" name="descripcion_comercio" rows="7" placeholder="Descripción">{$getDescripcion_comercio}</textarea></div>
</div>

<div class="row mb-3">
        <div class="col-md-3"><label for="direccion_comercio">Dirección comercio</label><input type="text" class="form-control" name="direccion_comercio" value="{$getDireccion_comercio}" placeholder="Dirección" /></div>
        <div class="col-md-3"><label for="codigo_postal">Código postal</label><input type="text" class="form-control" name="codigo_postal" value="{$getCodigo_postal}" placeholder="Codigo Postal" /></div>
        <div class="col-md-3"><label for="telefono_comercio">Teléfono comercio</label><input type="text" class="form-control" value="{$getTelefono_comercio}" name="telefono_comercio" placeholder="Teléfono" /></div>
        <div class="col-md-3"><label for="fax_comercio">Fax comercio</label><input type="text" class="form-control" value="{$getFax_comercio}" name="fax_comercio" placeholder="Fax" /></div>
</div>

<div class="row mb-3">
        <div class="col-md-6"><label for="email_comercio">E-mail comercio</label><input type="email" class="form-control" name="email_comercio" value="{$getEmail_comercio}" placeholder="E-mail" /></div>
        <div class="col-md-6"><label for="url_comercio">Url comercio</label><input type="text" class="form-control" value="{$getUrl_comercio}" name="url_comercio" placeholder="http://" /></div>
</div>
<div class="row mb-3">
    <div class="col-md-3"><label for="facebook_comercio">Facebook</label><input type="text" value="{$getFacebook_comercio}" class="form-control" name="facebook_comercio" placeholder="Facebook" /></div>
    <div class="col-md-3"><label for="twitter_comercio">Twitter</label><input type="text" value="{$getTwitter_comercio}" class="form-control" name="twitter_comercio" placeholder="Twitter" /></div>
    <div class="col-md-3"><label for="instagram_comercio">Instagram</label><input type="text" class="form-control" value="{$getInstagram_comercio}" name="instagram_comercio" placeholder="Instagram" /></div>
    <div class="col-md-3"><label for="youtube_comercio">Youtube</label><input type="text" class="form-control" value="{$getYoutube_comercio}"  name="youtube_comercio" placeholder="Youtube" /></div>
</div>

<div class="row mb-3">
  <div class="col-md-12"><input type="checkbox" name="ccomercio_destacado"  {if $getCcomercio_destacado == "S"}value="S" checked{else} value="N"{/if}> <label for="ccomercio_destacado">Comercio Destacado</label></div>
</div>

<div class="row mb-3">
    <div class="col-md-12"><label for="metas">Meta tags</label><textarea class="form-control f1" name="metas" placeholder="Meta tags">{$comerMetaTags}</textarea></div>
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

        
$(document).ready(function(){      

        tinymce.init({
 selector: 'textarea#codigador',
  height: 500,
  menubar: 'tools',
  plugins:     ['advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'],
  toolbar: false,
  setup: function(editor) {
           
                tinymce.triggerSave();
        }
 
 }) });
 
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
                
 
<script>
{literal}
$("#file_input").withDropZone("#drop_zone", {
  action: {
    name: "image",
    params: {
      preview: true,
    }
  },
  
  multiUploading: true,
  ifWrongFile: "show",
  maxFileSize: 2e+6,
  autoUpload: false,
  fileNameMatcher: /.*/,
  fileMimeTypeMatcher: /.*/,
  wrapperForInvalidFile: function(fileIndex) {
    return "<p>\"" + this.files[fileIndex].name + "\" no se puede subir, sobrepasa las 2Mb o no es el tipo correcto</p>'";
  }
  
  
  
  
});


$(document).ready(
    function(){
        $('#file_input').change(
            function(){
                if ($(this).val()) {
                    $('#upload_images').attr('disabled',false);
                    // or, as has been pointed out elsewhere:
                    // $('input:submit').removeAttr('disabled'); 
                } 
            }
            );
    });
    

    
    
{/literal}
</script>
<script>{literal}
       $(document).ready(function() {
            $('#register').submit(function(e) {
            e.preventDefault();
        }).validate({
                debug: false,
            rules: {
                "id_cate": {required: true,number:true},
                "id_provincia": {required: true,number:true},
                "id_pobl": {required: true,number:true},
                "email_comercio": {required: true,email: true},
                "id_sect": {required: true,number:true},
                "id_tico": {required: true,number:true},
                "codigo_postal": {required: true,number:true,minlength: 5,maxlength: 5},
                "nombre_comercio": {required: true},
                "breve_comercio": {required: true,minlength: 50},
                "descripcion_comercio": {required: true,minlength: 50},
                "direccion_comercio": {required: true},
                "telefono_comercio": {required: true,number:true,minlength: 9,maxlength: 9},
                "metas": {required: true,minlength: 70}

        },
            messages: {

                "id_cate": {required: "Escoge una categoría."},
                "id_prov": {required: "Escoge una provincia."},
                "id_pobl": {required: "Escoge una población."},
                "email_comercio": {required: "Introduce un correo válido.",email: ""},
                "id_sect": {required: "Escoge un sector."},
                "id_tico": {required: "Escoge un tipo de comercio."},
                "codigo_postal": {required: "Introduce tu código postal.",number: "Introduce un código postal válido.",maxlength: "Debe contener 5 dígitos.",minlength: "Debe contener 5 dígitos."},
                "nombre_comercio": {required: "Escribe un nombre para comercio."},
                "breve_comercio": {required: "Introduce una breve descripción.",minlength: "Debe contener 50 carácteres como mínimo."},
                "descripcion_comercio": {required: "Introduce una descripción.",minlength: "Debe contener 50 carácteres como mínimo."},
                "direccion_comercio": {required: "Es necesaria una direccion."},
                "telefono_comercio": {required: "Introduce un teléfono.",number: "Introduce un teléfono válido.",maxlength: "Debe contener 9 dígitos.",minlength: "Debe contener 9 dígitos."},
                "metas": {required: "Introduce una meta descripción.",minlength: "Debe contener 70 carácteres como mínimo."}

            }

        });
});{/literal}
  </script>
  </body>
</html>