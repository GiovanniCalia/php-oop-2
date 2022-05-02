<?php 

include_once __DIR__ . "/index.php";

class utenteNonRegistrato extends prodottiECommerce{
    protected $prezzo;

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

$nonRegistrato = new utenteNonRegistrato();
var_dump($nonRegistrato)
?>