<?php

require("nucleo/cargarmodelo.php");
require("nucleo/conexion.php");
require("nucleo/config.php");
require("nucleo/controlador.php");
require("nucleo/vistas.php");

/*require("nucleo/config.php");
spl_autoload_register(function($nombreclase){

   require("nucleo/".$nombreclase.'.php');

});*/
// por si la url existe 
if($_GET && isset($_GET["controller"])){
   $default_controller=$_GET["controller"];
   if(file_exists("controlador/".$default_controller.".php")){
     require("controlador/".$default_controller.".php");
   } else{
     die(" controlador no encontrado");
   }
}
// esto es por si no vine nada por la Url pone las rutas por defercto
else{ 
    if(file_exists("controlador/".$default_controller.".php"))
    require("controlador/".$default_controller.".php");
   else
      die("Controlador no encontrado");
}

$Codestack= new $default_controller();