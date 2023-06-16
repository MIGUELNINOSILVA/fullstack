<?php
class Cliente extends Conectar{

    public function get_cliente(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM cliente");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_cliente_id($id){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM cliente WHERE id_cliente = ?");
        $stm->bindvalue(1,$id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_cliente($id, $id_constructora, $nombre, $direccion, $telefono){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("INSERT INTO cliente(id_cliente, constructora_id, nombre, direccion, telefono) VALUES (?, ?, ?, ?, ?)");
        $stm->bindvalue(1, $id);
        $stm->bindvalue(2, $id_constructora);
        $stm->bindvalue(3, $nombre);
        $stm->bindvalue(4, $direccion);
        $stm->bindvalue(5, $telefono);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_cliente($id, $nombre, $direccion, $telefono){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("UPDATE cliente SET nombre = ?, direccion = ?, telefono = ? WHERE id_cliente = ?");
        $stm->bindvalue(1, $nombre);
        $stm->bindvalue(2, $direccion);
        $stm->bindvalue(3, $telefono);
        $stm->bindvalue(4, $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_cliente($id){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("DELETE FROM cliente WHERE id_cliente = ?");
        $stm->bindvalue(1, $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>