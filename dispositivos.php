
<?php
class dispositivos {
    $marca: string;
    $modelo: string;
    protected $imei: int;
    $procesador: string;
    $ram: float;
    $almacenamiento: string;

public function consulta_modelo($modelo){
$this -> modelo = $modelo;
}
public function checarImei($imei){
    $this -> Imei = $imei;
}
public function checarAlmacen($almacenamiento){
    $this -> Almacen = $almacenamiento;
}

}
?>
