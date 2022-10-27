<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="punto.php" method="post">
        <h3>Digite masculino o femenino</h3>
        <label for="">Sexo</label>
        <select name="S" id="s" size="2" multiple>
            <option value="F"selected>Femenino</option>
            <option value="M"selected>Masculino</option>
        </select>
        <label for="">Edad</label><input type="text" name="E">
        <input type="submit" value="enviar">
    </form>
</body>
</html>