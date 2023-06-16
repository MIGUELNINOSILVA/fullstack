<?php
class Empleado extends Conectar{
    
    public function get_empleado(){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM empleado");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_empleado_id($id){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM empleado WHERE empleado_id = ?");
        $stm->bindvalue(1, $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_empleado($id, $usuario, $pass){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("INSERT INTO empleado(empleado_id, usuario, password) VALUES (?, ?, ?)");
        $stm->bindvalue(1, $id);
        $stm->bindvalue(2, $usuario);
        $stm->bindvalue(3, $pass);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_empleado($id, $usuario, $pass){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("UPDATE empleado SET usuario = ?, password = ? WHERE empleado_id = ?");
        $stm->bindvalue(1, $usuario);
        $stm->bindvalue(2, $pass);
        $stm->bindvalue(3, $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_empleado($id){
        $conectar = parent::conexion();
        parent::set_name();
        $stm = $conectar->prepare("DELETE FROM empleado WHERE empleado_id = ?");
        $stm->bindvalue(1, $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>