<?php
//inizializzo la sessione
session_start();

// creo un array che contiene i dati del POST
$datiPost = $_POST;

// inserisco i dati del POST in sessione

$_SESSION['utente'] = $datiPost;

print_r($_SESSION);

// $_SESSION ora contiene due array: [carrello] & [utente]

// rimando a pagina riepilogo
header ('location: riepilogo.php');



?>
