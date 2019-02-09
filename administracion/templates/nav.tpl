 <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{$ruta}/administracion/img/logo-helping-city.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Helping City</h2><span>Gestión</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>H</strong><strong class="text-primary">C</strong></a></div>
        </div>
        
        
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
       
            <li><a href="#ComerciosDrop" {if $seccionactual eq "comercios" or $seccionactual eq "categorias"}aria-expanded="true" class=""{else}aria-expanded="false" {/if} data-toggle="collapse"> <i class="icon-interface-windows"></i>Comercios </a>
              <ul id="ComerciosDrop" class="collapse list-unstyled {if $seccionactual eq "comercios"  or $seccionactual eq "categorias"}show{/if}">
                <li {if $paginaActual eq "lista_comercios"}class="active"{/if}><a href="{$ruta}/administracion/lista_comercios.php">Comercios</a></li>
                <li {if $paginaActual eq "lista_categorias"}class="active"{/if}><a href="{$ruta}/administracion/lista_categorias.php">Categorias</a></li>
                <li {if $paginaActual eq "sectores_comercio"}class="active"{/if}><a href="{$ruta}/administracion/sectores_comercio.php">Sectores</a></li>
                <li {if $paginaActual eq "servicios_comercio"}class="active"{/if}><a href="{$ruta}/administracion/servicios_comercio.php">Servicios</a></li>
              </ul>
            </li>
          <li><a href="#AnunciosDrop" {if $seccionactual eq "anuncios"}aria-expanded="true" class=""{else}aria-expanded="false" {/if} data-toggle="collapse"> <i class="icon-interface-windows"></i>Anunciantes </a>
              <ul id="AnunciosDrop" class="collapse list-unstyled  {if $seccionactual eq "anuncios"}show{/if}">
                <li {if $paginaActual eq "lista_anuncios"}class="active"{/if}><a href="{$ruta}/administracion/lista_anuncios.php">Anuncios</a></li>
                <li {if $paginaActual eq "tipos_anuncios"}class="active"{/if}><a href="{$ruta}/administracion/tipos_anuncios.php">Tipos de anuncios</a></li>
              </ul>
            </li>
            <li {if $paginaActual eq "lista_ofertas"}class="active"{/if}><a href="{$ruta}/administracion/lista_ofertas.php"> <i class="icon-interface-windows"></i>Ofertas</a></li>
            
            <li><a href="#EventosDrop"  {if $seccionactual eq "eventos"}aria-expanded="true" class=""{else}aria-expanded="false" {/if}  data-toggle="collapse"> <i class="icon-interface-windows"></i>Eventos </a>
              <ul id="EventosDrop" class="collapse list-unstyled  {if $seccionactual eq "eventos"}show{/if}">
                <li {if $paginaActual eq "lista_eventos"}class="active"{/if}><a href="{$ruta}/administracion/lista_eventos.php">Lista de eventos</a></li>
                <li {if $paginaActual eq "categorias_eventos"}class="active"{/if}><a href="{$ruta}/administracion/categorias_eventos.php">Categorias de eventos</a></li>
              </ul>
            </li>
            <li><a href="#NoticiasDrop"  {if $seccionactual eq "noticias"}aria-expanded="true" class=""{else}aria-expanded="false" {/if}  data-toggle="collapse"> <i class="icon-interface-windows"></i>Actualidad </a>
              <ul id="NoticiasDrop" class="collapse list-unstyled  {if $seccionactual eq "noticias"}show{/if}">
                <li {if $paginaActual eq "lista_noticias"}class="active"{/if}><a href="{$ruta}/administracion/lista_noticias.php">Noticias</a></li>
                <li {if $paginaActual eq "categorias_noticias"}class="active"{/if}><a href="{$ruta}/administracion/categorias_noticias.php">Categorias de noticias</a></li>
              </ul>
            </li>
            <li {if $paginaActual eq "comentarios"}class="active"{/if}><a href="{$ruta}/administracion/comentarios.php"> <i class="icon-interface-windows"></i>Comentarios</a></li>
            <li {if $paginaActual eq "solicitudes"}class="active"{/if}><a href="{$ruta}/administracion/solicitudes.php"> <i class="icon-interface-windows"></i>Solicitudes</a></li>

            
          
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Settings</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li {if $paginaActual eq "login"}class="active"{/if}><a href="{$ruta}/administracion/login.php"> <i class="icon-interface-windows"></i>Login page </a></li>
            <li {if $paginaActual eq "usuarios"}class="active"{/if}> <a href="{$ruta}/administracion/usuarios.php"> <i class="icon-flask"> </i>Usuarios</a></li>
            <li {if $paginaActual eq "configuracion"}class="active"{/if}> <a href="{$ruta}/administracion/configuracion.php"> <i class="icon-screen"> </i>Configuracion</a></li>
          </ul>
        </div>
      </div>
    </nav>