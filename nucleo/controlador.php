<?php
class controlador{


    function __construct()
    {
        if($_GET && isset($_GET["action"])){
            $action=$_GET["action"];
            if(method_exists($this,$action)){
                $this->$action();
            }
            else{
                die("Sitio no encontrado");
            }
        }else if($_GET && isset($_GET["actionvp"])){
            //para cuando se requieren varios parametros para ejecutar la funcion
            $action=$_GET["actionvp"];
            if(method_exists($this,$action)){
                $this->$action($_GET["param1"],$_GET["param2"]);
            }
            else{
                die("Sitio no encontrado");
            }

        }
        else{
            if(method_exists($this,"index")){
                $this->index();
            }
           
         else{
            die("Index no encontrado");
           } 

    
         }
    }

} 




?>