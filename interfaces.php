<?php
interface Geometry
{
    public function rectangleArea(float $side, float $side1);
    
    public function squareArea(int $side);

    public function circleArea(float $radius);

    public function traingleArea(float $base, float $height);
}

class Areas implements Geometry
{
    public function rectangleArea(float $side, float $side1)
    {
        echo 'Area of rectangle is : '. ($side * $side1);
    }
    
    public function squareArea(int $side)
    {
        // 
        echo 'Area of Square is : '. pow($side, 2);
    }

    public function circleArea(float $radius)
    {
        // 
        echo  'Area of Circle is : '. (pi() * pow($radius, 2));
    }

    public function traingleArea(float $base, float $height)
    {
        // 
        echo 'Area of Traingle is : '. (0.5 * $base * $height);
    }
   
}

// 
$obj = new Areas();
$obj->rectangleArea(5, 6);
// var_dump($obj);
echo '<br>';
$obj->squareArea(10);
echo '<br>';

$obj->circleArea(5);