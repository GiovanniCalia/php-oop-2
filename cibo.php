<?php 

include_once __DIR__ . "/index.php";

class cibo extends prodottiECommerce{
    protected $animal;
    protected $scadenza;

    public function __construct($_nome, $_prezzo, $_quantità, $_marca, $_animal, $_scadenza){
        parent::__construct($_nome,$_prezzo,$_quantità,$_marca);
        $this->animal = $_animal;
        $this->scadenza = $_scadenza;

    }
}

$food = new cibo("cibo", 15, 200, "monge", "cane", 2022);
var_dump($food);
?>