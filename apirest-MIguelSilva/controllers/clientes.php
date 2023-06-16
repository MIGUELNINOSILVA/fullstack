<?php
header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/Cliente.php");

$cliente = new Cliente();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['op']) {
    case 'getAll':
        $datos = $cliente->get_cliente();
        echo json_encode($datos);
        break;
    case 'getId':
        $datos = $cliente->get_cliente_id($body['id_cliente']);
        echo json_encode($datos);
        break;
    case 'insert':
        $datos = $cliente->insert_cliente($body['id_cliente'],$body['constructora_id'],$body['nombre'],$body['direccion'], $body['telefono']);
        echo json_encode("Insertado correctamente.");
        break;
    case 'update':
        $datos = $cliente->update_cliente($body['id_cliente'], $body['nombre'], $body['direccion'], $body['telefono']);
        echo json_encode("Actualizado correctamente.");
        break;
    case 'delete':
        $datos = $cliente->delete_cliente($body['id_cliente']);
        echo json_encode("Cliente eliminado correctamente.");
        break;
    default:
        break;
}

?>