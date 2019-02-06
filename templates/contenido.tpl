<!-- Info Boxes -->
	<div class="info mb-sm-3">
		<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 bganuncio d-none d-xl-block"  style="background:url('{$ruta}/img/{$bucleAnunciosLaterales}') ;"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-8 mb-5">
                          
 <!-------------------------------------------------------------------------------->                           


                            
{if     $paginaActual eq "categorias"}
    <div class="row"><div class="col-md-12 mb-5"><h2>{$tituloCategoria}</h2></div></div>
	{$bucleCategoriasEscog}
{elseif $paginaActual eq "detalle_oferta"}
	{$detalleOferta}
{elseif $paginaActual eq "detalle_evento"}
	{$detalleEvento}
{elseif $paginaActual eq "detalle_comercio"}
    
    <div class="row">
        <div class="col-md-8">
            <h2>{$comerTitulo}</h2>
            <div class="recortefotoprincipal"><a href="{$ruta}/img/{$imagenPrincipal}" class="ajax"><img src="{$ruta}/img/{$imagenPrincipal}" alt="{$comerTitulo}" /></a></div>
            <h4>{$getBreve_comercio}</h4>
            <p>{$getDescripcion_comercio}</p>
            <p>Imagenes: {$bucleTodasFotos}</p>
        </div>
        <div class="col-md-4">
            <h5>{$getAlias_provincia}</h5>
            <p>Destacado: {$getCcomercio_destacado}</p>
            <p><address>{$getDireccion_comercio} {$getCodigo_postal}</address></p>
            <p>Poblacion:{$getId_pobl}</p>
            <p>Sector: {$getId_sect}</p>
            <p>en Helping City desde: {$getFecha_alta}</p>
            <p>Tel: {$getTelefono_comercio}</p>
            <p>Fax: {$getFax_comercio}</p>
            <p>E-mail: {$getEmail_comercio}</p>
            <p>Web: {$getUrl_comercio}</p>
            <p>Facebook: {$getFacebook_comercio}</p>
            <p>Twitter: {$getTwitter_comercio}</p>
            <p>Instagram: {$getInstagram_comercio}</p>
            <p>Youtube: {$getYoutube_comercio}</p>
            <p>Yelp: {$getYelp_comercio}</p>
            <p>Fotolog: {$getFotolog_comercio}</p>
            <p>Twitter: {$getTwitter_comercio}</p>
            
        </div>
    </div>
{*{$getId_come}
{$getId_cate}
{$getId_prov}*}
{*{$getId_sevi}*}
{*{$getId_tico}*}




    
{elseif $paginaActual eq "detalle_noticia"}
	{$detalleNoticia}
{elseif $paginaActual eq "detalle_documentos"}
	{$detalleDocumento}
{elseif $paginaActual eq "documentos"}
	{$bucleDocumentos}
{elseif $paginaActual eq "perfil"}
	{$detalleUsuariopagina}
{elseif $paginaActual eq "resultado"}
	{$resultadosBus}
{else}
	Welcome, whatever you are.
{/if}                            
                            

                            
                            
                        
 <!-------------------------------------------------------------------------------->                          
                            
                               
                            
                            
                            
{include file="templates/anuncios.tpl"}

                        </div>




<div class="col-md-2 bganuncio2 d-none d-xl-block" style="background:url('{$ruta}/img/{$bucleAnunciosLaterales}') ;"></div>



                       </div>
		</div>
	</div>
