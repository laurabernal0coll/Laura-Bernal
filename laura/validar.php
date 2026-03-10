<?php
session_start();

$usuario_correcto = "admin";
$password_correcta = "12345";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    if ($user === $usuario_correcto && $pass === $password_correcta) {
        $_SESSION['logueado'] = true;
        header("Location: panel.php"); 
    } else {
        echo "<body style='background:#ffe4e1; font-family:sans-serif; text-align:center; padding-top:50px;'>";
        echo "<h2 style='color:#ff69b4;'>Miau... ¡Esa no es la clave! 🙀</h2>";
        echo "<a href='index.php' style='color:hotpink;'>Intentar de nuevo</a>";
        echo "</body>";
    }
}
?>