<?php 
define("RUTABASE", dirname(__FILE__));
//define("MODO_TRABAJO","produccion"); //en "produccion o en desarrollo
define("MODO_TRABAJO","desarrollo"); //en "produccion o en desarrollo

if (MODO_TRABAJO=="produccion")
    error_reporting(0);
    else 
        error_reporting(E_ALL);  

spl_autoload_register(function ($clase){
    $ruta=RUTABASE."/aplicacion/clases/curso2026/";
    $fichero=$ruta."$clase.php";
    
    if (file_exists($fichero))
        {
            require_once($fichero);
        }
      else
        {
            throw new Exception("La clase $clase no se ha encontrado.");
        }
});

include(RUTABASE."/aplicacion/plantilla/plantilla.php");
include_once(RUTABASE."/scripts/librerias/validacion.php");

//Sesion creada para usarla en diferentes paginas
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


//creo todos los objetos que necesita mi aplicación



/*Estas constantes contienen un array de los colores posibles para
el texto y el fondo*/

// Colores para el texto
const COLORESTEXTO = [
    "black" => "black",
    "blue" => "blue",
    "white" => "white",
    "red" => "red"
];

// Colores para el fondo
const COLORESFONDO = [
    "white" => "white",
    "red" => "red",
    "green" => "green",
    "yellow" => "yellow",
    "pink" => "pink"
];