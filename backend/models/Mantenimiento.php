<?php
class Mantenimiento {
    private $conn;
    private $tabla = "mantenimientos";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM $this->tabla";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
