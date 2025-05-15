<?php

require_once __DIR__ . '/../config/ConexionDB.php';

class Fotos
{
    public $id;
    public $nombre;
    public $img;
    public $usuario_id;

    private $pdo;

    public function __construct($id = null, $nombre = "", $img = "", $usuario_id=null){

        $this->id = $id;
        $this->nombre = $nombre;
        $this->img = $img;
        $this->usuario_id = $usuario_id;

        $this->pdo = ConexionDB::getInstancia()->getConexion();
    }

    public function subir(){
        $stmt = $this->pdo->prepare("INSERT INTO img (nombre, img, usuario_id) VALUES (:nombre, :img, :usuario_id)");
        $stmt->execute([
            ':nombre' => $this->nombre,
            ':img' => $this->img,
            ':usuario_id'=>$this->usuario_id
        ]);
        $this->id = $this->pdo->lastInsertId();
        return $this->id;
    }

    public function actualizar()
    {
        $stmt = $this->pdo->prepare("UPDATE img SET nombre = :nombre, img = :img WHERE id = :id");
        return $stmt->execute([
            ':nombre' => $this->nombre,
            ':img' => $this->img,
            ':id' => $this->id 
        ]);
    }


    public function eliminar()
    {
        $stmt = $this->pdo->prepare("DELETE FROM img WHERE id = :id");
        return $stmt->execute([':id' => $this->id]);
    }

    public static function leer()
    {
        $pdo = ConexionDB::getInstancia()->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM img");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public static function leer_uno($id)
    {
        $pdo = ConexionDB::getInstancia()->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM img WHERE id =:id");
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
