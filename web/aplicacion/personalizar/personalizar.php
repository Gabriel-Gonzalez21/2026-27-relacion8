<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

$barraUbi = [
    [
        "TEXTO" => "Inicio",
        "LINK"  => "/index.php"
    ],
    [
        "TEXTO" => "perosnalizar",
        "LINK"  => ""
    ]
];

//Al pulsar en guardar
if (isset($_POST["guardar"])) {
    setcookie("colorTexto", $_POST["colorTexto"], time() + 365 * 24 * 60 * 60);

    setcookie("colorFondo", $_POST["colorFondo"], time() + 365 * 24 * 60 * 60);
    
    //recargar personalizar
    header("Location: personalizar.php");
    exit;
}


$colorTexto = $_COOKIE["colorTexto"] ?? "black";

$colorFondo =  $_COOKIE["colorFondo"] ?? "white";



//dibuja la plantilla de la vista
inicioCabecera("Relación 8: Sesiones, seguridad");
cabecera($colorTexto, $colorFondo);
finCabecera();
inicioCuerpo("Relación 8: Sesiones, seguridad");
cuerpo($colorTexto, $colorFondo);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera($colorTexto, $colorFondo){
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
function cuerpo($colorTexto, $colorFondo)
{
?>
    <h1>Personalizar</h1>
    <br><br>

    <form action="" method="post">

        <label for="colorTexto">Seleccione un color de texto:</label>
        <select name="colorTexto" id="colorTexto">
            <?php

                foreach (COLORESTEXTO as $clave => $valor) {    
                ?>
                    <option value="<?= $clave ?>" <?= $clave == $colorTexto ? "selected" : "" ?>>

                        <?= $valor ?>

                    </option>
                <?php
                }
            ?>

        </select>

        <br>

        <label for="colorFondo">Seleccione un color de fondo:</label>
        <select name="colorFondo" id="colorFondo">
            <?php

                foreach (COLORESFONDO as $clave => $valor) {    
                ?>
                    <option value="<?= $clave ?>" <?= $clave == $colorFondo ? "selected" : "" ?>>

                        <?= $valor ?>

                    </option>
                <?php
                }
            ?>

        </select>


        <button type="submit" name="guardar"> Guardar</button>

    </form>



<?php
}
