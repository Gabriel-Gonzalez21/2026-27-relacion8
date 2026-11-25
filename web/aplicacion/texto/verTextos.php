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

$textos = [];

//Al inicio del script verTextos.php se recogerán los textos que tengamos en la sesión y se guardan en el array $textos. 
if (isset($_SESSION["textos"])) {
    $textos = $_SESSION["textos"];
}


//Al pulsar en registrar
if (isset($_POST["registrar"])){

    $texto = trim($_POST["texto"]);

    if ($texto != ""){

        $nuevoRegistroTexto = new RegistroTexto($texto);

        array_push($textos, $nuevoRegistroTexto);

        //Guardar en sesion
        $_SESSION["textos"] = $textos;
    }
}

//Al pulsar en limpiar
if (isset($_POST["limpiar"])) {

    //vaciar el array textos
    $textos = [];

    $_SESSION["textos"] = $textos;
}


//dibuja la plantilla de la vista
inicioCabecera("Relación 8: Sesiones, seguridad");
cabecera();
finCabecera();
inicioCuerpo("Relación 8: Sesiones, seguridad");
cuerpo($textos);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){}



//vista
function cuerpo($textos)
{
?>

    <br><br>

    <form action="" method="post">

        <label for="">Escriba un texto</label>
        <input type="text" name="texto">

        <button type="submit" name="registrar">Registrar texto</button>
        <button type="submit" name="limpiar">Limpiar</button>

        <textarea rows="30" cols="60">
            <?php 
            foreach($textos as $registroTexto){
            
                echo $registroTexto->getCadena() ." - ". $registroTexto->getFechaHora()->format("d/m/Y H:i:s") . PHP_EOL;
            
            }
            ?>
            
        </textarea>


    </form>

<?php
}
