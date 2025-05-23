<?php
include_once '../../config/database.php';
include_once '../../models/Mantenimiento.php';
include_once '../../helpers/cors.php';

$db = (new Database())->conectar();
$mantenimiento = new Mantenimiento($db);

$resultado = $mantenimiento->obtenerTodos();
$registros = [];

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $registros[] = $fila;
}

echo json_encode($registros);
