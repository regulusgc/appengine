<?php
/**
 * Created by PhpStorm.
 * User: Regulus
 * Date: 26/08/2018
 * Time: 6:58 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Operadores Aritmeticos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: #080d11">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="text-center">
<h1 style="color: white">Calculadora</h1>
<form action="resultado.php" method="post" style="background-color: white" >
<div class="text-center">
    <select name="operador">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select><br />
    Ingresa tu primer numero:<br />
    <input type="text" name="valor1"><br />
    Ingresa tu segundo valor:<br />
    <input type="text" name="valor2"><br>
    <input type="reset" value="Borrar">
    <input type="submit" value="Enviar">
</div>

</form>
</div>
</body>
</html>
