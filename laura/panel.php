<?php
session_start();

// Si NO existe la sesión, lo mandamos de vuelta al login
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Control</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['nombre']; ?></h1>
    <p>Este es contenido privado que solo tú puedes ver.</p>
    <br>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>