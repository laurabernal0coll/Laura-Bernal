<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Gatitos 🐾</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            background-color: #ffe4e1; /* Rosa muy claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        /* Contenedor del Login */
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(255, 105, 180, 0.3);
            text-align: center;
            width: 320px;
            position: relative;
            z-index: 2;
        }

        h2 {
            color: #ff69b4; /* Rosa fuerte */
            margin-bottom: 20px;
        }

        /* Campos de texto */
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ffc0cb;
            border-radius: 25px;
            box-sizing: border-box;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #ff69b4;
            box-shadow: 0 0 8px rgba(255, 105, 180, 0.2);
        }

        /* Botón */
        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s, background 0.3s;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #ff1493;
            transform: scale(1.05);
        }

        /* GATITOS DECORATIVOS */
        .cat-corner {
            position: absolute;
            width: 100px;
            z-index: 1;
        }
        
        .cat-top { top: 10px; right: 10px; transform: rotate(15deg); }
        .cat-bottom { bottom: 10px; left: 10px; transform: rotate(-15deg); }

        /* Imagen de gatito arriba del formulario */
        .profile-cat {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #ff69b4;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <img src="https://placekitten.com/200/200" class="cat-corner cat-top" alt="gatito">
    <img src="https://placekitten.com/201/201" class="cat-corner cat-bottom" alt="gatito">

    <div class="login-card">
        <img src="https://placekitten.com/100/100" class="profile-cat" alt="logo gatito">
        
        <h2>¡Hola, Humano! 🐾</h2>
        
        <form action="validar.php" method="POST">
            <input type="text" name="usuario" placeholder="Tu nombre miau-suario" required>
            <input type="password" name="password" placeholder="Clave secreta" required>
            <button type="submit">Entrar al Club 🐱</button>
        </form>
    </div>

</body>
</html>