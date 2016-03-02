<?php
namespace MvLabs\Chocosite\Model;

class ArchivioCarrelli
{
    public function salva(Carrello $carrello)
    {
        // Per vedere l'oggetto serializzato(formato testo con indicazione numero caratteri )
        //var_dump(serialize($carrello));die
        $_SESSION['carrello'] = serialize($carrello);
    }

    public function recupera()
    {
        if (!isset($_SESSION['carrello'])) {
            return new Carrello();
        }

        $carrello = unserialize($_SESSION['carrello']);

        // CONTROLLO PER ESSERE SICURO CHE SIA EFFETTIVAMENTE UN CARRELLO (per evitare pericoli - es: SQL injection)
        if ($carrello instanceof Carrello) {
            return $carrello;
        }

        return new Carrello();
    }
}
