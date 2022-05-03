<?php 

class ordine{
    protected $listaOrdini = [];
    protected $utente;
    protected $cartaDiCredito ;

    public function __construct($_listaOrdini, $_utente, $_cartaDiCredito){
        $this->listaOrdini = $_listaOrdini;
        $this->utente = $_utente;
        $this->cartaDiCredito = $_cartaDiCredito;
    }
}

?>