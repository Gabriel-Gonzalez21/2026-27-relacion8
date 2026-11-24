<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

//Color texto (por defecto negro)
if (isset($_COOKIE["colorTexto"])) {
    $colorTexto = $_COOKIE["colorTexto"];
}else {
    $colorTexto = "black";
}

//Color fondo (por defecto blanco)
if (isset($_COOKIE["colorFondo"])) {
    $colorFondo = $_COOKIE["colorFondo"];
}else {
    $colorFondo = "white";
}


//Contador visitas
if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"];
}else {
    $contador = 0;
}
$contador++;
//guardar contador en la cookie y caduca dentro de un año
setcookie("contador", $contador, time() + 365 * 24 * 60 * 60);




//dibuja la plantilla de la vista
inicioCabecera("Relación 8: Sesiones, seguridad");
cabecera($colorTexto, $colorFondo);
finCabecera();
inicioCuerpo("Relación 8: Sesiones, seguridad");
cuerpo($contador);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera($colorTexto, $colorFondo)
{
?>
<style>

#documento {
    color: <?= $colorTexto ?>;
    background-color: <?= $colorFondo ?>;
}

</style>
<?php
}



//vista
function cuerpo($contador)
{
?>
    <h1>Página personalizada</h1>
    <br><br>
    <p>Numero de visitas: <?= $contador ?></p>

    <a href="personalizar.php">Acceso a personalizar</a><br>
<?php
}
