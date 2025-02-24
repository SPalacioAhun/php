<?php
//commillas dobles y simples
echo "Hello";
print 'Hello';
?>

<br>

<h3>¿Comillas dobles o simples?</h3>
<p>Las cadenas entre comillas dobles realizan acciones sobre caracteres especiales.</p>
<?php
$x = "Joaco";
echo "Hola $x";
?>

<br>

<p>Las cadenas entre comillas simples no realizan tales acciones, devuelven la cadena tal como fue escrita, con el nombre de la variable</p>
<?php
$x = "Joaco";
echo 'Hola $x';
?>

<br>

<h3>Longitud string</h3>
<p>La función strlen() PHP devuelve la longitud de una cadena.</p>
<?php
echo strlen("Hola Mundo!");
?>



