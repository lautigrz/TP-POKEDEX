<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<style>

    *{
        margin: 0;
        padding: 0;
    }

    nav{

        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }

    .titulo{
        text-align: center;
        font-size:30px
    }

    form{

        display: flex;
        justify-content:center;

    }
    .buscador{
        padding: 0.3em;
        width:80%;
        height:6vh
    }
    .boton{
        width: 16%;
        font-weight:600;
        background-color: white;
        cursor:pointer;
    }
    .boton:hover{
        background-color:rgb(243, 241, 241 );
    }
    #header{
        border:1px solid black;
        border-radius:10px
    }


    .cerrarSesion a{
        text-decoration: none;
        padding: 10px;
        color: white;
        border-radius: 20px;
        background-color: #9a1010;
        transition: 0.3s;
    }
    .cerrarSesion a:hover{
        color: grey;
        transition: 0.3s;

    }
</style>

<body>

<nav>
    <div class="logo">
        <img src="imagenes/icon/images.png" alt="pokeball" style="width: 60px; height: 60px;">
    </div>
    <h3 class="titulo">Pokedex</h3>

    <div class="cerrarSesion">
        <a href="index.php">Cerrar Sesion</a>
    </div>
</nav>

<form action="" method="get">
    <input type="text" name="buscado" placeholder="Ingrese nombre, tipo o numero de pokemon" class="buscador" id="header">

    <input type="submit" value="Que pokemon es?" class="boton" id="header">
</form>
</body>
</html>