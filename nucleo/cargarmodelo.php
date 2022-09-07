<?php

class cargamodelo{
    public function __construct($nombremodelo){

        if(file_exists("modelo/$nombremodelo" . ".php")){
            require("modelo/$nombremodelo" . ".php");
        }else{
            echo "Modelo no encontrdo.";
        }

    }
} 

?>