<?php
    require_once __DIR__."/../app_clases/Fotos.php";

    class Foto_driver{
        
        public function index(){
            include __DIR__."/../pages/index.php";
        }
        public function galeria(){
            $foto = Fotos::leer();
            include __DIR__. "/../pages/Galeria.php";
        }
        public function acerca(){
            include __DIR__."/../pages/Acerca.php";
        }
        public function contactos(){
            include __DIR__."/../pages/contactos.php";
        }
        public function admin() {
            if(empty($_SESSION["id_u"])){
                include __DIR__."/../pages_user/login.php";
            }else{
                $foto = Fotos::leer();
                include __DIR__ . "/../pages/Admin.php";
            }
        }
        public function edit(){
            $id = $_GET['id'];
            $foto_u = Fotos::leer_uno($id);
            include __DIR__ . "/../pages/edit.php";
        }

        public function subir(){
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            if (!isset($_SESSION['id_u'])) {
                header("Location: index.php?action=loginv");
                exit();
            }

            $nombre = $_POST['nombre'];
            $img = '';
            
            if(isset($_FILES['img']) && $_FILES['img']['error'] == 0){
                $arch = time().'_'.basename($_FILES['img']['name']);
                $upload = __DIR__. '/../views/upload/' .$arch;

                if(move_uploaded_file($_FILES['img']['tmp_name'], $upload)){
                    $img = 'views/upload/'. $arch;
                }
            }
            $foto = new Fotos(null, $nombre, $img,  $_SESSION['id_u']);
            $foto -> subir();
            echo '<script>alert("Foto guardada con exito."); window.location.href = "index.php?action=admin";</script>';
            exit;
        }

        public function actualizar() {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];

            $fotoData = Fotos::leer_uno($id); 
            $img = $fotoData['img']; 

            if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
                $arch = time() . '_' . basename($_FILES['img']['name']);
                $upload = __DIR__ . '/../views/upload/' . $arch;

                if (move_uploaded_file($_FILES['img']['tmp_name'], $upload)) {
                    $img = 'views/upload/'. $arch;
                }else{
                    echo '<script>alert("Error al aplicar cambios")</script>';
                }
            }
            $foto = new Fotos($id, $nombre, $img);
            $foto->actualizar();
            header("Location: index.php?action=admin");
            exit;
        }


        public function eliminar(){
            $id = $_GET['id'];
            $foto = new Fotos($id);
            $foto->eliminar();
            header("Location: index.php?action=admin");
            exit;
        }





    }