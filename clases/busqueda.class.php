<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');
//---------------------------------------------------
//
// BUSQUEDAS
// Clase que gestiona las acciones de bucle
// version 1.0
// 5 febrero 2019
//  
//--------------------------------------------------
 
 class Busqueda {
 	


                    public function getNombre_comercio     (){$this->nombre_comercio;}
                    public function getDescripcion_comercio(){$this->descripcion_comercio;}
                    public function getTitulo_evento       (){$this->titulo_evento;}
                    public function getDescripcion_evento  (){$this->descripcion_evento;}
                    public function getTitulo_noticia      (){$this->titulo_noticia;}
                    public function getDescripcion_noticia (){$this->descripcion_noticia;}
                    public function getTitulo_destacado    (){$this->titulo_destacado;}
                    public function getResumen_destacado   (){$this->resumen_destacado;}
                    public function getId_come             (){$this->id_come;}
                    public function getId_even             (){$this->id_even;}
                    public function getId_noti             (){$this->id_noti;}
                    public function getId_ofer             (){$this->id_ofer;}		

                    public function setNombre_comercio     (){$this->nombre_comercio=$nombre_comercio;}
                    public function setDescripcion_comercio(){$this->descripcion_comercio=$descripcion_comercio;}
                    public function setTitulo_evento       (){$this->titulo_evento=$titulo_evento;}
                    public function setDescripcion_evento  (){$this->descripcion_evento=$descripcion_evento;}
                    public function setTitulo_noticia      (){$this->titulo_noticia=$titulo_noticia;}
                    public function setDescripcion_noticia (){$this->descripcion_noticia=$descripcion_noticia;}
                    public function setTitulo_destacado    (){$this->titulo_destacado=$titulo_destacado;}
                    public function setResumen_destacado   (){$this->resumen_destacado=$resumen_destacado;}
                    public function setId_come             (){$this->id_come=$id_come;}
                    public function setId_even             (){$this->id_even=$id_even;}
                    public function setId_noti             (){$this->id_noti=$id_noti;}
                    public function setId_ofer             (){$this->id_ofer=$id_ofer;}
                       
	    //constructor
	    public function __construct($nombre_comercio,$descripcion_comercio,$titulo_evento,$descripcion_evento,$titulo_noticia,$descripcion_noticia,$titulo_destacado,$resumen_destacado,$id_come,$id_even,$id_noti,$id_ofer)
	    {
                    $this->nombre_comercio=     $nombre_comercio;  
                    $this->descripcion_comercio=$descripcion_comercio;
                    $this->titulo_evento=       $titulo_evento;    
                    $this->descripcion_evento=  $descripcion_evento;
                    $this->titulo_noticia=      $titulo_noticia;   
                    $this->descripcion_noticia= $descripcion_noticia;
                    $this->titulo_destacado=    $titulo_destacado; 
                    $this->resumen_destacado=   $resumen_destacado;
                    $this->id_come=   $id_come;
                    $this->id_even=   $id_even;
                    $this->id_noti=   $id_noti;
                    $this->id_ofer=   $id_ofer;
                   
	    }
	      
	    //**
	    // MUESTRA RESULTADOS con solo a cadena de busqeuda
	    // con paginador
	    //**
            public static function consultaBusqSoloCadena($resultadoBusqueda){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 5;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;

                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("
 
                    SELECT  come.id_come AS identificador, come.guia AS guia, come.nombre_comercio AS nombre_busqueda,come.descripcion_comercio AS descripcion_busqueda
                    FROM hc_come_comercio_cliente come
                    WHERE come.nombre_comercio LIKE :palabrabuscar OR come.descripcion_comercio LIKE :palabrabuscar 

                    UNION

                    SELECT  even.id_even, even.guia, even.titulo_evento,even.descripcion_evento 
                    FROM hc_even_eventos even
                    WHERE even.titulo_evento LIKE :palabrabuscar OR even.descripcion_evento LIKE :palabrabuscar 

                    UNION

                    SELECT  noti.id_noti, noti.guia, noti.titulo_noticia,noti.descripcion_noticia
                    FROM hc_noti_noticias noti
                    WHERE noti.titulo_noticia LIKE :palabrabuscar OR noti.descripcion_noticia LIKE :palabrabuscar 

                    UNION

                    SELECT  ofer.id_ofer, ofer.guia, ofer.titulo_destacado,ofer.resumen_destacado
                    FROM hc_ofer_ofertas_cliente ofer
                    WHERE ofer.titulo_destacado LIKE :palabrabuscar OR ofer.resumen_destacado LIKE :palabrabuscar 

                    LIMIT {$inicio},{$porPagina}

                                  ");//uso la constante TABLA
                    $resulBusqueda ="%".$resultadoBusqueda."%";
                    $consulta->bindParam(':palabrabuscar', $resulBusqueda);
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 

                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  $paGinas = ceil($total / $porPagina);

                  return [ $registros, $paGinas, $porPagina, $pagina ];
            }
            
            //**
	    // MUESTRA RESULTADOS con la cadena de busqeuda y la provincia
	    // con paginador
	    //**
            public static function consultaBusqCadenaProvincia($resultadoConProvincia,$resultadoBusqueda){  
                  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                  $porPagina = isset($_GET['por-pagina']) && $_GET['por-pagina'] <= 50 ? (int)$_GET['por-pagina'] : 5;
                  $inicio = ($pagina > 1) ? ($pagina * $porPagina) - $porPagina : 0;

                  $conexion = new conexion();//objeto conexion
                  $conexion->exec("SET NAMES 'utf8'");
                  $consulta = $conexion->prepare("
 
                    SELECT  come.id_come AS identificador, come.guia AS guia, come.nombre_comercio AS nombre_busqueda,come.descripcion_comercio AS descripcion_busqueda
                    FROM hc_come_comercio_cliente come
                    WHERE 
                    come.nombre_comercio LIKE :palabrabuscar AND come.alias_provincia LIKE :provinciabuscar OR
                    come.descripcion_comercio LIKE :palabrabuscar AND come.alias_provincia LIKE :provinciabuscar
                    UNION

                    SELECT  even.id_even, even.guia, even.titulo_evento,even.descripcion_evento 
                    FROM hc_even_eventos even WHERE
                    even.titulo_evento LIKE :palabrabuscar AND even.alias_provincia LIKE :provinciabuscar OR
                    even.descripcion_evento LIKE :palabrabuscar AND even.alias_provincia LIKE :provinciabuscar

                    UNION

                    SELECT  noti.id_noti, noti.guia, noti.titulo_noticia,noti.descripcion_noticia
                    FROM hc_noti_noticias noti WHERE
                    noti.titulo_noticia LIKE :palabrabuscar AND noti.alias_provincia LIKE :provinciabuscar OR
                    noti.descripcion_noticia LIKE :palabrabuscar AND noti.alias_provincia LIKE :provinciabuscar

                    UNION

                    SELECT  ofer.id_ofer, ofer.guia, ofer.titulo_destacado,ofer.resumen_destacado
                    FROM hc_ofer_ofertas_cliente ofer WHERE
                    ofer.titulo_destacado LIKE :palabrabuscar AND ofer.alias_provincia LIKE :provinciabuscar OR
                    ofer.resumen_destacado LIKE :palabrabuscar AND ofer.alias_provincia LIKE :provinciabuscar


                  
                    LIMIT {$inicio},{$porPagina}

                                  ");//uso la constante TABLA
                    
                  $resulBusqueda ="%".$resultadoBusqueda."%";
                  $consulta->bindParam(':palabrabuscar', $resulBusqueda);

                  $resulProvBusqueda ="%".$resultadoConProvincia."%";
                  $consulta->bindParam(':provinciabuscar', $resulProvBusqueda);
                  
                  $consulta->execute();
                  $registros = $consulta->fetchAll(PDO::FETCH_ASSOC); 

                  $total = $conexion->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                  $paGinas = ceil($total / $porPagina);

                  return [ $registros, $paGinas, $porPagina, $pagina ];
            }
     


}
 

