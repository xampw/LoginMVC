<?php 
class usuarioscontrolador extends controlador{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $vista = new vistas("pagina_login");

    }

    public function verificar_usuario(){
        $cargamodelo = new cargamodelo("usuariosmodelo");
        $usuariosmodelo = new usuariosmodelo();
        $datosvista = $usuariosmodelo->verifica_usuario();
        $vista = new vistas("pagina_login",$datosvista);

    }
}



?>