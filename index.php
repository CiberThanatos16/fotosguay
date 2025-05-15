<?php
session_start();
require_once __DIR__ . "/drivers_clases/Foto_driver.php";
require_once __DIR__ . "/drivers_clases/User_driver.php";

include "Plantillas/head.php";
if (isset($_SESSION['id_u'])) {
    include 'plantillas/nav_admin.php';
    echo '<p class="text-light bg-black">Bienvenido ' . $_SESSION['nombre'] . '</p>';
}else{
    include "Plantillas/BarraNav.php";
}

$foto = new Foto_driver();
$user = new User_driver();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $foto->index();
        break;
    case 'galeria':
        $foto->galeria();
        break;
    case 'acerca':
        $foto->acerca();
        break;
    case 'contactos':
        $foto->contactos();
        break;
    case 'admin':
        $foto->admin();
        break;
    case 'edit':
        $foto->edit();
        break;
    case 'subir':
        $foto->subir();
        break;
    case 'actualizar':
        $foto->actualizar();
        break;
    case 'eliminar':
        $foto->eliminar();
        break;

    //------USUARIO-------//

    case 'loginv':
        $user->loginv();
        break;
    case 'registerv':
        $user->registerv();
        break;

    case 'subir_user':
        $user->subir_user();
        break;
    case 'login':
        $user -> login();
        break;

    case 'logout':
        $user->logout();
        break;

    default:
        echo "Acción no reconocida.";
        break;
}
