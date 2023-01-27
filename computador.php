<?php
class Computador extends Dispositivos{
   public $tarjetaG;
   public $Puertos;
   public $SistemaOperativo;
   
   public function ConsultaGrafica($tarjetaG){

    $this -> grafica = $tarjetaG;
   }
   
   public function RevizarPuerto($Puertos){

    $this -> puerto = $Puertos;
   }
   
   protected function Verificarsistema($SistemaOperativo){

    $this -> Sistem = $SistemaOperativo;
   }
   

}
?>