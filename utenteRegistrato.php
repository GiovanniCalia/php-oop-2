<?php

include_once __DIR__ . "/index.php";
include_once __DIR__ . "/utente.php";


class utenteRegistrato extends utente{
    protected $nomeUtente;
    protected $sconto = 20;
    protected $prezzo;
    protected $password;


    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
        return $this;
    }

    public function scontoRegistrazione(){
        return $this->prezzo - ($this->prezzo * $this->sconto) / 100;
    }

    public function prezzoFinale(){
        return "Prezzo del prodotto: " . $this->prezzo . "€. Con lo sconto del ". $this->sconto . "%, il prezzo finale sarà: " . $this->scontoRegistrazione() . "€.";
    }


    public function getSconto()
    {
        return $this->sconto;
    }
}

$registrato = new utenteRegistrato();
$registrato->setPrezzo(120);
var_dump($registrato);
echo $registrato->prezzoFinale();
?>

