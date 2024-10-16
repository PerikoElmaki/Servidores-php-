<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclus</title>
    <style>
        body {
            margin: 0 auto;
            font-family: Comic Sans, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        nav {
            color: white;
            width: 100%;
            margin-bottom: 10%;
            background-color: black;
        }

        .form {
            border: 1px solid black;
            border-radius: 8px;
            box-shadow: 6px 4px black;
            align-content: center;
            align-items: center;
            justify-content: center;
        }

        input {
            border: 1px solid black;
            border-radius: 6px;
        }

        .usu,
        .clav,
        .btn {
            padding: 20px;
            margin: 4px;
        }
    </style>
</head>

<body>
    <nav>
        <h1>VIdeoclus </h1>
        <h2>Peliculas robadas</h2>
    </nav>
    <div class="form">
        <form action="validar.php" method="post">
            <div class="usu">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" required>
            </div>
            <div class="clav">
                <label for="clave">Clave:</label>
                <input type="password" name="clave" id="clave" required>
            </div>
            <div class="btn">
                <input type="submit" value="Entrar">
            <div>
        </form>
        
    </div>
</body>

</html>