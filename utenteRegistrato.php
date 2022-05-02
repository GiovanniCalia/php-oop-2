<?php

include_once __DIR__ . "/index.php";

class utenteRegistrato extends prodottiECommerce{
    private $sconto;
    protected $prezzo;
    protected $pagamento;


    public function getSconto()
    {
        return $this->sconto;
    }

    public function setSconto($_sconto)
    {
        $this->sconto = $_sconto;

        return $this;

    }

    public function scontoRegistrazione(){
        return $this->prezzo - ($this->prezzo * $this->sconto) / 100;
    }


    public function prezzoFinale(){
        return "Prezzo del prodotto: " . $this->prezzo . "€. Con lo sconto del ". $this->sconto . "%, il prezzo finale sarà: " . $this->scontoRegistrazione() . "€.";
    }

    

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;

        return $this;

    }
}

$registrato = new utenteRegistrato();
$registrato->setPrezzo(120);
$registrato->setSconto(20);
var_dump($registrato);
echo $registrato->prezzoFinale()
?>

