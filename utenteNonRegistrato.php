<?php 

include_once __DIR__ . "/index.php";
include_once __DIR__ . "/utente.php";

class utenteNonRegistrato extends utente{

}

$nonRegistrato = new utenteNonRegistrato();
var_dump($nonRegistrato)
?>