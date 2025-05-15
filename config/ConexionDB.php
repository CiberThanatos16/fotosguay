<?php
require_once 'Config.php';

class ConexionDB{
    private static $instancia = null;
    private $pdo;

    public function __construct(){
        try {
            $this -> pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this -> pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("No hubo conexion". $e->getMessage());
        }
    }

    public static function getInstancia(){
        if(!self::$instancia){
            self::$instancia = new ConexionDB;
        }
        return self::$instancia;
    }

    public function getConexion(){
        return $this -> pdo;
    }
    
}