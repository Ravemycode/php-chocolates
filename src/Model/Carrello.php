<?php
namespace MvLabs\Chocosite\Model;

// Prodotto non è nel namespace!!! ===> USE
use MvLabs\Chocosite\Entity\Prodotto;

class Carrello {
    private $utente;
    private $righeCarrello = [];

    public function aggiungiRigaCarrello(Prodotto $prodotto, $quantita) {
      // aggiungere prodotto alla proprietà prodotti con la relativa quantità
      $rigaCarrello = [
        'prodotto' => $prodotto,
        'quantita' => $quantita
      ];

      $this->$righeCarrello[] = $rigaCarrello;
    }

    public function getRigheCarrello() {
      return $this->$righeCarrello;
    }

    public function getTotali() {

      foreach ($this->$righeCarrello as $rigaCarrello) {
        // rigaCarrello = array che contiene Oggetti prodotto quantita
        $totale += $rigaCarrello['prodotto']->prezzo() * $rigaCarrello['quantita'];
        $quantita += $rigaCarrello['quantita'];
      }

      return [
        'totale' => $totale,
        'pezzi' => $quantita
      ];
    }


}
