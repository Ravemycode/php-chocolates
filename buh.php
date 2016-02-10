<?php // inizializzo sessione
session_start();

// includo liberie
include 'libs/db.php';
/*include 'libs/libreria.php';*/
?>

<?php
$ordiniTotali = recuperaOrdiniTotali();
print_r($ordiniTotali);
?>
