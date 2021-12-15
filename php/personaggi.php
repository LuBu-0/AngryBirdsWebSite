<?php
require_once "db.php";
use DB\DBAccess;

//prendere il risultato dal DB

//impaginarlo


$paginaHTML = file_get_contents("protagonisti_php.html");

$listaPersonaggi = ;

echo str_replace("<listaPersonaggi/>", $listaPersonaggi, $paginaHTML);


?>