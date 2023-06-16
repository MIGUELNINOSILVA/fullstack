<?php
header("Content-Type: application/json");

require_once("../config/Conectar.php");
require_once("../models/Empleado.php");

$empleado = new Empleado();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'getAll':
        $datos = $empleado->get_empleado();
        echo json_encode($datos);
        break;
    case 'getId':
        $datos = $empleado->get_empleado_id($body['empleado_id']);
        echo json_encode($datos);
        break;
    case 'insert':
        $datos = $empleado->insert_empleado($body['empleado_id'], $body['usuario'], $body['password']);
        echo json_encode("Datos insertados exitosamente.");
        break;
    case 'update':
        $datos = $empleado->update_empleado($body['empleado_id'], $body['usuario'], $body['password']);
        echo json_encode("Datos actualizados satisfactoriamente.");
        break;
    case 'delete':
        $datos = $empleado->delete_empleado($body['empleado_id']);
        echo json_encode("Datos eliminados satisfactoriamente.");
    default:
        break;
}

?>