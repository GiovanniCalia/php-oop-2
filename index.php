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
    

    /*
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
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


    public function getQuantità()
    {
        return $this->quantità;
    }


    public function setQuantità($quantità)
    {
        $this->quantità = $quantità;

        return $this;
    }


    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
    */
}
?>
 