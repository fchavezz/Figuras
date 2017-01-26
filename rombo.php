<!DOCTYPE html>
<html>
<title>Rombo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<form class="w3-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
    <label for="">Introduce todos los datos que se solicitan</label><br>
    Ingrese diagonal menor (cm) <label>
        <input  type='number' step='0.01' placeholder='0.00' name="dmenor" class="w3-input" required>
    </label>
    <br />
    Ingrese diagonal mayor (cm) <label>
        <input type='number' step='0.01' placeholder='0.00' name="dmayor" class="w3-input" required>
    </label>
    <br />
    Ingrese el lado (cm) <label>
        <input type='number' step='0.01' placeholder='0.00' name="lado" class="w3-input" required>
    </label>
    <br />
    <input class="w3-btn w3-blue-grey" type="submit" value="Calcular">

</form>
</body>
</html>

<?php
/**
 * Created by Team FWSS.
 * Date: 1/24/2017
 * Time: 11:29 AM
 */



if($_SERVER["REQUEST_METHOD"]=="POST") {
    include("clases/Figura.php");
    include("clases/Rombo.php");
    $dmenor=filter_var($_POST['dmenor'], FILTER_SANITIZE_NUMBER_FLOAT);
    $dmayor=filter_var($_POST['dmayor'], FILTER_SANITIZE_NUMBER_FLOAT);
    $lados=filter_var($_POST['lado'], FILTER_SANITIZE_NUMBER_FLOAT);

    $rombo=new Rombo($dmenor,$dmayor,$lados);
    $rombo->calcularArea();
    $rombo->calcularPerimetro();
    $rombo->show();

}


?>