<?php 

class cartaDiCredito{
    private $name;
    Private $number;
    private $expire;


    public function __construct($_name, $_number, $_expire){
        $this->name = $_name;
        $this->number = $_number;
        $this->expire = $_expire;
    }
}

$cartaCredito = new cartaDiCredito("ordine", 5706, 20, 20);
var_dump($cartaCredito)
?>