<?php 
class prodottiECommerce{
    private $cibo;
    private $gioco;
    private $cuccia;
    private $lettiera;
    private $antiparassitario;
    

    public function disponibilità(string $_disponibilità){
        if ($_disponibilità === "maggio" || $_disponibilità === "giugno" || $_disponibilità === "luglio" || $_disponibilità === "agosto"){
            return "L'antiparassitario è disponibile";
        } else{
            return "L'antiparassitario non è disponibile";
        }
    }

    public function getAntiparassitario()
    {
        return $this->antiparassitario;
    }


    public function setAntiparassitario($antiparassitario)
    {
        $this->antiparassitario = $antiparassitario;
        
        return $this;
    }
}


$eCommerce = new prodottiECommerce();
var_dump($eCommerce);
echo $eCommerce->disponibilità("luglio");

?>
 