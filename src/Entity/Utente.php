<?php
namespace \MvLabs\Chocosite\Entity;


class Utente {
  private $id;
  private $nome;
  private $cognome;
  private $email;
  private $indirizzo;
  private $citta;
  private $cap;
  private $provincia;
  private $note;

  public function id() {
    return $this->id;
  }

  public function nome() {
    return $this->nome;
  }

  public function cognome() {
    return $this->cognome;
  }

  public function email() {
    return $this->email();
  }

  public function indirizzo() {
    return $this->indirizzo;
  }

  public function citta() {
    return $this->citta;
  }

  public function cap() {
    return $this->cap;
  }

  public function provincia() {
    return $this->provincia;
  }

  public function note() {
    return $this->note;
  }

}
