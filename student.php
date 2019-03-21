<?php
/*
class Student
{
    public  $studentName="";
    public  $studentId="";
    private $present=false;

    public function inClass()
    {
        $this->present=true;
    }
    public function absent()
    {
        $this->present = false;
    }
    public function isPresent()
    {
        return $this->present;
    }

}
class Rep extends Student
{

    public function collectBooks( $books )
    {
        echo "$this->studentName collected  books for: $books<br><br>";
    }

    public function chasedStudent( $student )
    {
        echo "$this->studentName chased a student : $student->studentName<br><br>";
    }

}

$student = new Student();
$student->studentName = "peris wanja";
$student->studentId= 5555;
$student->inClass();

echo $student->studentName . " is " . ( $student->isPresent() ? "present" : "absent" ) . "<br><br>";


$prefect = new Rep();
$prefect->studentName = "rosemary njeru";
$prefect->studentId = 5151;
$prefect->inClass();

echo $prefect->studentName . " is " . ( $student->isPresent() ? "present" : "absent" ) . "<br><br>";
$prefect->collectBooks( "History from the staffroom" );
$prefect->chasedStudent( $student  );

abstract class Shape
{
    abstract public function calculateArea();
}

class Circle extends Shape
{
    public function calculateArea()
    {
        $calculate=(3.14*10^2);
        echo "area is   $calculate";
    }

    public function displayShape()
    {
        echo 'display shape';
    }
}
$circle = new Circle();
$circle->calculateArea();
$circle->$calculate();
*/
 interface Shape
{
    public function calculateArea();
}
interface color
{
    public function colors();
}

class square implements Shape, color
{
    public function calculateArea()
    {
        $calculate=(10*10);
        echo "area is   $calculate<br>";
    }
    public function colors()
    {
        $color=['red'=>'apple','yellow'=>'mango'];
       unset ($color['yellow']);
        var_dump($color, isset($color['red']));
        echo "color is   $color";
    }

    public function displayShape()
    {
        echo 'display shape';
    }
}
$square = new Square();
$square->calculateArea();
$square->colors();
