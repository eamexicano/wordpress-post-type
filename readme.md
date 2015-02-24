incrustacion.php
================

Ejemplo de referencia  para generar un tipo de entrada en wordpress.  
Este tipo de entrada recibe un URL completo - http://example.com - para incluirlo como entrada de wordpress.  
Únicamente utilizar URLs en los cuáles se tenga permiso para embeber - para incluir el contenido del URL en tu sitio -.  
Se incluyen dos plantillas archive-incrustacion.php / single-incrustacion.php que se utilizan para visualizar el contenido  
de las entradas de tipo de incrustación.  
Se incluye un archivo template.php para que hagas tus tipos de entradas.  
El uso es con fines recreativos y didácticos.   

Uso
===

Incluir el archivo incrustacion.php en la carpeta de plugins - wp-content/plugins -.  
Incluir las plantillas en la carpeta de tu tema.  

Ajustes
=======

En el archivo template.php modificar los comentarios para que describan tu tipo de entrada:  

- Plugin Name: Nombre del tipo de publicación  
- Plugin URI: www.example.com  
- Description: Descripción del tipo de publicación  
- Version: 0.1.0  
- Author:  Tu nombre  
- Author URI: www.example.org  
- License: MIT  

Cambiar los {} por el nombre que le quieras dar a tus entradas.  
Referencia <http://blog.eamexicano.com/wordpress/entradas-personalizadas-en-wordpress/>
