<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'site/topic/000001',
        'locale' => 'es_ES',
        'title' => 'Instalación',
        'toc' => 'site/toc/000000',
        'key' => 'site.installation',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>Open Journal Systems es una aplicación de código abierto que puede descargarse e instalarse de forma gratuita en casi cualquier equipo de escritorio o servidor.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Licencia',
      ),
      'value' => '<p>OJS se distribuye según las condiciones de la <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">Licencia Pública General de GNU</a>. Al descargar OJS, se incluye una copia de las condiciones de la licencia para la redistribución del código OJS, original o modificado.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Requisitos del sistema',
      ),
      'value' => '<p>Se recomienda un entorno de servidor que cumpla los siguientes requisitos:</p> <ul> <li><a href="http://www.php.net/" target="_blank">PHP</a> &gt;= 4.2.x</li> <li><a href="http://www.mysql.com/" target="_blank">MySQL</a> &gt;= 4.1 o <a href="http://www.postgresql.org/" target="_blank">PostgreSQL</a> &gt;= 7.1 (PostgreSQL 8.x incluido)</li> <li><a href="http://httpd.apache.org/" target="_blank">Apache</a> &gt;= 1.3.2x o &gt;= 2.0.4x o Microsoft IIS 6+</li> <li>Sistema operativo: Cualquier SO compatible con el software anterior, incluidos <a href="http://www.linux.org/" target="_blank">Linux</a>, <a href="http://www.bsd.org/" target="_blank">BSD</a>, <a href="http://www.sun.com/" target="_blank">Solaris</a>, <a href="http://www.apple.com/" target="_blank">Mac OS X</a> y <a href="http://www.microsoft.com/">Windows</a></li> </ul> <p>Actualmente, OJS sólo se probó en MySQL y PostgreSQL, aunque otros sistemas de gestión de bases de datos compatibles con <a href="http://adodb.sourceforge.net/" target="_blank">ADOdb</a> pueden funcionar, en su totalidad o parcialmente. Se aceptan los informes de compatibilidad o los parches de código para las DBMS alternativas.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Descargar',
      ),
      'value' => '<p>Se puede descargar OJS en el <a href="http://pkp.sfu.ca/ojs/" target="_blank">sitio web</a> de Public Knowledge Project.</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Instalación',
      ),
      'value' => '<p>OJS presenta un script de instalación basado en web que guía al administrador/a del sistema a través del proceso de instalación. Por otro lado, hay disponible una herramienta de instalación de línea de comandos.</p> <ol> <li> Descargue el archivo OJS. </li> <li> Descomprima el archivo OJS en su servidor web y seleccione la ubicación que desee en el árbol de documentos web:<br /> <tt>$ tar -zxf ojs-2.*.tar.gz<br /> $ mv ojs-* /var/www/myjournal</tt> </li> <li> Permita la escritura de los siguientes archivos y directorios (es decir, use chown o chmod):<br /> - config.inc.php (opcional)<br /> - public<br /> - cache<br /> - cache/t_cache<br /> - cache/t_config<br /> - cache/t_compile<br /> - cache/_db </li> <li> Abra un navegador web para la ubicación de la instalación de OJS (por ejemplo, http://www.mydomain.com/myjournal/) y siga las instrucciones en pantalla para completar la instalación. Vea docs/LÉAME para más información sobre el proceso de instalación. </li> </ol>',
    ),
  ),
); ?>