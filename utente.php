<?php 

include_once __DIR__ .  "/cartaDiCredito.php";
include_once __DIR__ .  "/ordine.php";

class utente{
    protected $nome;
    protected $email;
    protected $carteCredito = [];
    protected $sconto = 0;

    public function creazioneOrdine(cartaDiCredito $cartaDiCredito, $listaProdotto){
        $ordine = new ordine ($this, $cartaDiCredito, $listaProdotto, $this->sconto);

        return $ordine;
    }
}

?>