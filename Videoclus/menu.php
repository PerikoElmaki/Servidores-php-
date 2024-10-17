<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .principal {
            display: flex;
            flex-direction: row;
            justify-content: center;
            background-color: white;
        }
    </style>
</head>

<body>
    <nav>
        <h1>Menú de tus cosicas</h1>
    </nav>

    <div class="principal">
       <?php include 'listar.php'; 
       session_start();
       if (isset($_SESSION['id'])) {
           echo "<h2>Bienvenido ".$_SESSION['id']."</h2>";
          
       }
       ?>
    
    </div>
</body>

</html>