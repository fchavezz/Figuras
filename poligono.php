<!DOCTYPE html>
<html>
<title>Poligono</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
    <label for="">Introduce todos los datos que se solicitan</label><br>
    Ingrese cantidad de lado <input  type='number' step='0' placeholder='0' name="clados" class="w3-input" required>
    <br />
    Ingrese el tamaño del lado <input  type='number' step='0.01' placeholder='0.00' name="cmlados" class="w3-input" required>
    <br />
    <input class="w3-btn w3-blue-grey" type="submit" value="Calcular">

</form>

<?php
/**
 * Created by Team FWSS.
 * Date: 1/24/2017
 * Time: 11:25 AM
 */
if($_SERVER["REQUEST_METHOD"]=="POST") {
    include("clases/Figura.php");
    include("clases/Poligono.php");
    $clados=filter_var($_POST['clados'], FILTER_SANITIZE_NUMBER_INT);
    $cmlados=filter_var($_POST['cmlados'], FILTER_SANITIZE_NUMBER_FLOAT);
    $poligono=new Poligono($clados,$cmlados);
    $poligono->calcularPerimetro();
    $poligono->calcularArea();
    $poligono->show();
}

?>
