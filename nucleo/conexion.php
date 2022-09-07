<?php 
class conexion{

    protected $conexion;
  
    public function __construct(){
    try{
        $this->conexion = new PDO("mysql:host=localhost;dbname=login-prueba","root","");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexion->exec("SET CHARACTER SET utf8");
  
      }catch(Exeption $e){
  
      die("Error:" . $e->GetMessage());
  
      }
  
     }
    }


?>