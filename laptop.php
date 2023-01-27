<?php
class  Laptop extends Computador {
   public $Pantalla;
   public $Camara;
   public $Bateria;
   
   public function ConsultaResolucion($pantalla){

    $this -> resolucion = $Pantalla;
   }
   
   public function RevizarCamara($Camara){

    $this -> pixel = $Camara;
   }
   
   protected function VerificarBateria($Bateria){

    $this -> Carga = $Bateria;
   }
   

}