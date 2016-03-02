<?php
namespace MvLabs\Chcocosite\Model;

include 'libs/db.php';

class ArchivioUtenti {

  public function salva(Utente $utente) {

    // Creo connessione PDO al db
    $db = creaConnessionePDO();

    try {

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $db->beginTransaction();

      // Inserisco i dati in tabella clienti
      $stmt = $db->prepare("INSERT INTO clienti (nome, cognome, email, indirizzo, citta, cap, provincia, note)
                            VALUES (:nome, :cognome, :email, :indirizzo, :citta, :cap, :provincia)");

      $stmt->bindParam(':nome', $utente['nome'], PDO::PARAM_STR);
      $stmt->bindParam(':cognome', $utente['cognome'], PDO::PARAM_STR);
      $stmt->bindParam(':email', $utente['email'], PDO::PARAM_STR);
      $stmt->bindParam(':indirizzo', $utente['indirizzo'], PDO::PARAM_STR);
      $stmt->bindParam(':citta', $utente['citta'], PDO::PARAM_STR);
      $stmt->bindParam(':cap', $utente['cap'], PDO::PARAM_STR);
      $stmt->bindParam(':provincia', $utente['provincia'], PDO::PARAM_STR);
      $stmt->bindParam(':note', $utente['note'], PDO::PARAM_STR);

      $stmt->execute();

      $idCliente = $db->lastInsertId();

      $stmt->bindParam(':cliente_id', $idCliente, PDO::PARAM_INT);

      $db->commit();

    } catch (Exception $e) {
        $db->rollBack();
        echo "Si è verificato un errore: " . $e->getMessage();
    }

  }
}
