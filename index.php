<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('circle 1', 3);
echo "circle area: " .$circle->calculateArea() ."<br>";
echo "circle perimeter: " .$circle->calculatePerimeter()."<br>";

$cylinder = new Cylinder("cylinder 1",3, 4);
echo "cylinder area: " .$cylinder->calculateArea()."<br>";
echo "cylinder perimeter: ".$cylinder->calculatePerimeter()."<br>";
echo "cylinder volume: ".$cylinder->calculateVolume()."<br>";

$rectangle = new Rectangle("rectangle 1", 3, 4);
echo "rectangle area: ".$rectangle->calculateArea()."<br>";
echo "rectangle perimeter: ".$rectangle->calculatePerimeter()."<br>";

$square = new Square("square 1", 4, 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';