<?php 

class usuariosmodelo extends conexion{

    public function __construct(){
        parent::__construct();
    }

    public function verifica_usuario(){

  
        if((isset($_GET["user"])) && (isset($_GET["password"]))){
  
         $query = "SELECT * FROM login WHERE  USUARIO = :USU AND CONTRASENIA = :CONTRA";
  
         $consulta = $this->conexion->prepare($query);
  
         $consulta->execute(array(":USU"=>$_GET["user"],":CONTRA"=>$_GET["password"]));
  
         if($consulta->rowCount() != 0){
            return true;
         }else{
            return false;
      }
  
  }
  
  
  }
}



?>