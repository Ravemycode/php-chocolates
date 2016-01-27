<?php

function inizializzaListaProdotti() {
  // lettura file esterno
  $listaProdotti = file_get_contents('data/prodotti.json');

  // conversione in array
  return json_decode($listaProdotti, true);
}

function estraiProdottoDaLista(array $listaProdotti, $codice /* SE param opzionale: $param = 0*/) {

  foreach($listaProdotti as $prodotto) {
    if ($prodotto['codice'] == $codice) {
      return $prodotto;
    }
  }

  return null;

}

function salvaOrdine($prodotti, $utente) {
  $ordine = [
    'prodotti' => $prodotti,
    'utente' => $utente,
    'data_ordine' => date('d-m-Y H:i:s')
  ];

  // conversione in json
  $ordineJson = json_encode($ordine);

  // salvataggio su disco
  $idOrdine = date('YmdHis');
  file_put_contents('data/ordine_' . $idOrdine, $ordineJson);

  // svuotamento variabili di sessione
  unset($_SESSION['utente']);
  unset($_SESSION['carrello']);
}
