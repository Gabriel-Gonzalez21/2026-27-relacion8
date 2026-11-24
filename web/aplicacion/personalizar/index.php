<?php
include_once(dirname(__FILE__) . "/cabecera.php");
//controlador






//dibuja la plantilla de la vista
inicioCabecera("TIENDA");
cabecera();
finCabecera();
inicioCuerpo("TIENDA");
cuerpo();  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}



//vista
function cuerpo()
{
?>
    <h1>Index personalizar</h1>
    <br><br>
    <a href="./aplicacion/principal/pruebas.php">Acceso a pruebas</a><br>
<?php
}
