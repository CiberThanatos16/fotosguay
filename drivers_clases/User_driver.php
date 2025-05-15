<?php
require_once __DIR__ . '/../app_clases/User.php';

class User_driver {

    public function loginv() {
        include __DIR__ . '/../pages_user/login.php';
    }

    public function registerv() {
        include __DIR__ . '/../pages_user/register.php';
    }

    public function subir_user() {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        $nombre = str_replace(["/", "(", ")", ";", "==", ">", "<"], " ", $nombre);
        $email = str_replace(["/", "(", ")", ";", "==", ">", "<"], " ",  $email);
        $pass = str_replace(["/", "(", ")", ";", "==", ">", "<"], " ",  $pass);

        if (empty($nombre) || empty($email) || empty($pass) || empty($pass2)) {
            echo '<script>alert("Todos los campos son obligatorios."); window.location.href = "index.php?action=registerv";</script>';
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("El correo electrónico no es válido.");
        }

        if ($pass !== $pass2) {
            echo '<script>alert("Las contraseñas no coinciden, favor de verificar sus contraseñas"); window.location.href = "index.php?action=registerv";</script>';
            exit;
        }

        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        $user = new User(null, $nombre, $email, $hashed_password);
        $user->subir_user();
        header("Location: index.php");
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $email = trim($_POST["email"]);
            $pass = $_POST["pass"];

            $user = new User();
            if ($user->login($email, $pass)) {
                session_regenerate_id(true);
                $_SESSION["id_u"] = $user->id_u;
                $_SESSION["nombre"] = $user->nombre;
                header("Location: index.php?action=admin");
                exit();
            } else {
                echo '<script>alert("Correo o contraseña incorrectos."); window.location.href = "index.php?action=loginv";</script>';
                exit();
            }
        } else {
            echo "No se recibió la petición POST.";
        }
    }

    public function logout(){  
        session_start();
        session_destroy();
        header('Location:index.php');
        exit();
    }


}
