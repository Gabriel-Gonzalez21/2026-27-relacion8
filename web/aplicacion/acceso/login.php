<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

$barraUbi = [
    [
        "TEXTO" => "Inicio",
        "LINK"  => "/index.php"
    ],
    [
        "TEXTO" => "inicio",
        "LINK"  => ""
    ]
];

$errores = [];

//Al pulsar en guardar
if(isset($_POST["login"])){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($usuario == ""){
        $errores["usuario"] = "El campo usuario no puede estar vacío";
    }

    if ($password == ""){
        $errores["password"] = "El campo contraseña no puede estar vacío";
    }

    $login = $_POST["password"];
}


//dibuja la plantilla de la vista
inicioCabecera("Relación 8: Sesiones, seguridad");
cabecera();
finCabecera();
inicioCuerpo("Relación 8: Sesiones, seguridad");
cuerpo($errores);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){

}


//vista
function cuerpo($errores)
{
?>
    
    <h1>Login</h1>

    <form action="" method="post">
        <label for="">Usuario:</label>
        <input type="text" name="usuario">
            <?php 
            if (count($errores) > 0){
            ?>    
                <?= $errores["usuario"] ?>
            <?php 
            }
            ?>

        <br>
        <br>

        <label for="">Contraseña:</label>
        <input type="password" name="password">
            <?php 
            if (count($errores) > 0){
            ?>    
                <?= $errores["password"] ?>
            <?php 
            }
            ?>
        <br>
        <br>

        <button type="submit" name="login">Loguearse</button>
    </form>



<?php
}
