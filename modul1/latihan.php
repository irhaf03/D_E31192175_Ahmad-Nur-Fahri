<?php 
// Declare class
class Car{
public $comp;
public $color = 'beige';
public $hasSunRoof = true;

// method = hello
public function hello()
{
	return "beep";
}
}
// membuat instance 
$bmw = new Car ();
$mercedes = new Car ();
// get values
echo $bmw -> color; // beige
echo "<br/>";
echo $mercedes -> color; // beige
echo "<hr />";
// set values 
echo $bmw -> color = 'blue';
echo $bmw -> comp = "BMW";
echo $mercedes -> comp = 'Mercedes Benz';
// get values
echo $bmw -> color; // beige
echo "<br/>";
echo $mercedes -> color; // beige
echo "<hr />";
echo $bmw -> comp; // BMW
echo "<br/>";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";
// metode get a beep
echo $bmw -> hello (); //beep
echo"<br />";
echo $mercedes -> hello ();//beep
 ?>

