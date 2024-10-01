<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <div class="principalContainer">
        <h1>FORMULARIO</h1>
        <form class="formulario">
            <div class="nombrePassword">
                <input type="text" class="inputText" placeholder="Nombre completo">
                <input type="password" class="inputText" placeholder="Contraseña" required>
            </div>
            <div class="radioCheck">
                <p>Marca si no tienes ni puta idea </p>
                <input type="checkbox" class="radioInput" id="css">
                <label for="css">CSS</label>
                <input type="checkbox" class="radioInput" id="HTML">
                <label for="HTML">HTML</label>
                <form>
                <p>Cual prefieres</p>
                <input type="radio" class="radioInput" id="radio1">
                <label for="radio1">HTML</label>
                <input type="radio" class="radioInput" id="radio2">
                <label for="radio2">CSS</label>
                <input type="radio" class="radioInput" id="radio3">
                <label for="radio3">Wordpress<b>(soy un cagao)</b></label>
            </form>
            </div>
        </form>
    </div>
</body>
</html>