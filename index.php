<?php 
class prodottiECommerce{
    protected $nome;
    protected $prezzo;
    protected $quantità;
    protected $marca;


    public function __construct($_nome, $_prezzo, $_quantità, $_marca){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->quantità = $_quantità;
        $this->marca = $_marca;
    }

    /*
    public function disponibilità(string $_disponibilità){
        if ($_disponibilità === "maggio" || $_disponibilità === "giugno" || $_disponibilità === "luglio" || $_disponibilità === "agosto"){
            return "L'antiparassitario è disponibile";
        } else{
            return "L'antiparassitario non è disponibile";
        }
    }
    */
}
?>
 