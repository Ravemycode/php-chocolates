<?php
namespace MvLabs\Chocosite\Model;

class Carrello {
    private $utente;
    // $prodotti == righe carrello
    private $prodotti = [];
    private $quantita = 0;



    public function aggiungiProdotto(Prodotto $prodotto, $quantita) {
      // costruzione array che rappresenta riga carrello
      $rigaCarrello = [
        'prodotto' => $prodotto,
        'quantita' => $quantita
      ];

      $this->prodotti[] = $rigaCarrello;
    }

    public function getProdotti() {
      return $this->prodotti;
    }

    public function getTotali() {
      return [
        'totale' => $totale,
        'pezzi' => $quantita
      ];
    }


}
