<!DOCTYPE html>
<html>
<title>Trapecio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
    <label for="">Introduce todos los datos que se solicitan</label><br>
    Ingrese la Base Menor (cm) <input  type='number' step='0.01' placeholder='0.00' name="basemenor" class="w3-input" required>
    <br />
    Ingrese la Base Mayor (cm) <input  type='number' step='0.01' placeholder='0.00' name="basemayor" class="w3-input" required>
    <br />
    Ingrese la Altura (cm) <input  type='number' step='0.01' placeholder='0.00' name="altura" class="w3-input" required>
    <br />
    <input class="w3-btn w3-blue-grey" type="submit" value="Calcular">

</form>

</body>
</html>

<?php
/**
 * Created by Team FWSS.
 * Date: 1/24/2017
 * Time: 11:15 AM
 */



if($_SERVER["REQUEST_METHOD"]=="POST") {
    include("clases/Figura.php");
    include("clases/Trapecio.php");
    $bmenor=filter_var($_POST['basemenor'], FILTER_SANITIZE_NUMBER_FLOAT);
    $bmayor=filter_var($_POST['basemayor'], FILTER_SANITIZE_NUMBER_FLOAT);
    $altura=filter_var($_POST['altura'], FILTER_SANITIZE_NUMBER_FLOAT);

    $rombo=new Trapecio($bmenor,$bmayor,$altura);
    $rombo->calcularArea();
    $rombo->calcularPerimetro();
    $rombo->show();

}


?>