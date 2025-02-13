<?php
$name = "Malena";
$lastname = "Palacio";
echo "<h2>Nombre: $name $lastname</h2><br>";
echo "<h3>Edad: 25</h3>";
?>
<h1>Santiago</h1>
<h2><?= $name ?></h2>
<h2><?php echo $lastname ?></h2>
<h3>Edad: 25</h3>

<h2>Tipos de datos.</h2>
<?php
//integer
$x = 50;
var_dump($x);
?>

<br>

<?php 
//string 
$x = "Hola Mundo!";
$y = 'Hello World!';

var_dump($x);
echo "<br>";
var_dump($y);
?>

<br>

<?php
//float
$x = 10.365;
var_dump($x);
?>

<br>

<?php
//boolean
$x = true;
var_dump($x);
?>

<br>

<?php
#array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>

<br>

<?php
#object
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }  
}
$myCar = new Car("blue", "Ford");
var_dump($myCar);
?>

<br>

<?php
#null
$x = "Hola MUndo!";
$x = null;
var_dump($x);
?>

<br>

<h2>Camabiar el tipo de datos</h2>

<?php
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = "Hola que tal!";
var_dump($x);
?>

<br>

<?php
$x = 5;
$x = (array) $x;
var_dump($x);
?> 