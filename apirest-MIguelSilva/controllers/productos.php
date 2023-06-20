<?php
header("Content-Type: application/json");

require_once("../config/Conectar.php");
require_once("../models/Producto.php");

$producto = new Producto();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'getAll':
        $datos = $producto->get_producto();
        echo json_encode($datos);
        break;
}

?>