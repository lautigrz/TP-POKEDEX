
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoginAdmin</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background-image: url("imagenes/background-image/pokemon-wallpapers-22.jpg");
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
        }
        form{
            display: grid;
            text-align: center;
            gap: 10px;
            padding: 40px;

        }
        .contenedor-formulario-iniciar-sesion{
            background-color: rgba(76, 175, 80, 0.97);
            display: flex;
            border-radius: 20px;
            margin: 150px;
        }
        label{
            color: white;
            font-size: 20px;
        }
        input{
            color:white;
            border-radius: 10px;
            border-style: solid;
            border-color: white;
            background-color: transparent;

            width: 200px;
            height: 30px;
        }
        button {
            margin-top: 20px;
            padding: 5px;
            font-size: 17px;
            transition: 0.3s;
            background-color: rgba(255, 255, 255, 0.68);
            color:black;
            border-radius: 10px;
            border-style: solid;

        }
        button:hover{
            transition: 0.3s;
            background-color: #4CAF50;
            scale:1.1;
        }
    </style>
</head>
<body>
    <div class="contenedor-formulario-iniciar-sesion">
    <form action="validar-usuario-admin.php" method="post">
        <label for="admin">Usuario</label>
        <input type="text" id="usuario" name="usuario">
        <label for="admin">Password</label>
        <input type="password" id="password" name="password">
        <button type="submit">INICIAR SESION</button>
    </form>
    </div>
</body>
</html>

