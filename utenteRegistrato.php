<?php

include_once __DIR__ . "/index.php";

class utenteRegistrato extends prodottiECommerce{
    protected $sconto;
    private $prezzo;

    public function getSconto()
    {
        return $this->sconto;
    }

    public function setSconto($_sconto)
    {
        $this->sconto = $_sconto;

    }

    public function scontoRegistrazione(){
        return $this->prezzo - ($this->prezzo * $this->sconto) / 100;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }
}

$registrato = new utenteRegistrato();
$registrato->setPrezzo(120);
$registrato->setSconto(20);
echo $registrato->scontoRegistrazione();
var_dump($registrato)
?>

