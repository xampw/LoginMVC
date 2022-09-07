
<form action = "index.php" method = "GET">
    <h1>Sistema de Login</h1><br>
Ususario:<input type="text" name = "user" ><br>
Contrasenia:<input type= "password" name = "password"><br>
<input type="submit" name = "login" value = "Login">
<input type="hidden" name = "controlador" value = "usuariocontrolador">
<input type="hidden" name = "action" value = "verificar_usuario"><br>
</form>

<?php 
if(isset($_GET["login"])){
    if($datos == true){
        echo "Ususario logeado.";
    }else if($datos == false){
        echo "Usuario desconocido.";
    }
}


?>