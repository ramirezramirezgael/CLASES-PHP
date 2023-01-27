<?php
class Celular extends Dispoditivos{
    public $camara;
    public $NumCel;
    public $Memoria;

    public function LimpiaMemoria($Memoria){

        $this ->  Lim  = $Memoria;
       }
       
       public function actuNumero($NumCel){
    
        $this -> NewNum = $NumCel;
       }
}
?>