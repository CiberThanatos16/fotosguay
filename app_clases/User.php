<?php
require_once __DIR__.'/../config/ConexionDB.php';

class User {
    public $id_u;
    public $nombre;
    public $email;
    public $pass;

    private $pdo;

    public function __construct($id_u = null, $nombre = "", $email = "", $pass = "") {
        $this->id_u = $id_u;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->pass = $pass;
        $this->pdo = ConexionDB::getInstancia()->getConexion();
    }

    public function subir_user() {
        $stmt = $this->pdo->prepare("INSERT INTO usuario (nombre, email, pass) VALUES (:nombre, :email, :pass)");
        $stmt->execute([
            ':nombre' => $this->nombre,
            ':email' => $this->email,
            ':pass' => $this->pass
        ]);
        $this->id_u = $this->pdo->lastInsertId();
        return $this->id_u;
    }

    public function login($email, $pass) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($pass, $usuario['pass'])) {
            
            $this->id_u = $usuario['id_u'];
            $this->nombre = $usuario['nombre'];
            $this->email = $usuario['email'];
            $this->pass = $usuario['pass']; // hashed

            return true; 
        }

        return false; 
    }


    public static function leer_uno($id_u) {
        $pdo = ConexionDB::getInstancia()->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE id_u = :id_u");
        $stmt->execute([':id_u' => $id_u]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
