<?php
class Producto extends Conectar{
    public function get_producto(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM producto");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>