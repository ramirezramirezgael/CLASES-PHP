<?php
class Pc extends Computador{
    protected $Fuente;
    public $ModeloGabinete;
    public $Temperatura;

    public function CequeoTemperatura($Temperatura){

        $this ->  Tem  = $Temperatura;
       }
       
       public function ChecarWatt($Fuente){
    
        $this -> Watt = $Fuente;
       }
}
?>