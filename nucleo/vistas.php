<?php
class vistas{

    public function __construct($nombrevista,$datos=NULL){
        if(file_exists("vista/$nombrevista" . ".php")){
            require("vista/$nombrevista" . ".php");
        }else{
            echo "Vista  no encontrda.";
        }
    }
}



?>