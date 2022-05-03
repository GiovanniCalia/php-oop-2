<?php 

include_once __DIR__ . "/index.php";

class cibo extends prodottiECommerce{
    private $animal;

    public function __construct($_nome, $_prezzo, $_quantità, $_marca, $_animal){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->quantità = $_quantità;
        $this->marca = $_marca;
        $this->animal = $_animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal()
    {
        return $this->animal;
    }
}

$food = new cibo("cibo", 15, 200, "monge", "cane");
var_dump($food);
?>