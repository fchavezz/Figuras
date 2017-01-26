<!DOCTYPE html>
<html>
<title>Calculo de figuras</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
<label>Elige el cuerpo geométrico</label>

    <label>
        <select class="w3-input" name="figura">
            <option value="" disabled selected>Selecciona una figura</option>
            <option value="trapecio">Trapecio</option>
            <option value="rombo">Rombo</option>
            <option value="poligono">Poligono</option>
        </select>
    </label>
    <p><button class="w3-btn w3-teal" type="submit" value="Buscar">Buscar</button></p>
    <br><br>
</form>
<?php
/**
 * Created by Team FWSS.
 * Date: 1/24/2017
 * Time: 11:24 AM
 */
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $figura=filter_var($_POST['figura'], FILTER_SANITIZE_STRING);
    switch ($figura){
        case "trapecio":
            header('Location: trapecio.php');
            break;
        case "rombo":
            header('Location: rombo.php');
            break;
        case "poligono":
            header('Location: poligono.php');
            break;
    }
}
?>
</body>
</html> 



