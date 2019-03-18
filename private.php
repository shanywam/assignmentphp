<?php
/*
 class Student
 {
     public  $name;

     public function getName()
     {
         echo 'The student name is:'. $this->name;
     }
 }
   $student=new Student();
   $student->name='josephine';
   $student->getName();

class Student
{
    private $name;

    public function getName()
    {
        echo 'The student name is:'. $this->name;
    }
}
$student=new Student();
$student->name='josephine';
$student->getName();

class Student
{
    private $name;

    public function __construct(){  }
    {
        echo 'The student name is:'. $this->name;
    }
}
$student=new Student();
$student->name='josephine';
$student->getName();
*/
class Car
{
    private $model;
    private $version;
    private $manufacture;

    public function __construct($model, $version,$manufacture)
    {
        $this->model = $model;
        $this->version = $version;
        $this->manufacture=$manufacture;
    }

    public function getCarModel()
    {
        return 'The car model is: ' . $this->model;

    }

    public function getCarVersion()
    {
        return 'The car model version is: ' . $this->version;
    }

    public function getCarManufacture()
    {
        return 'The car model was manufacture in the year: ' . $this->manufacture;
    }
}
$car1=new car('mercedes <br>','c 200<br>','2011');
echo $car1->getCarModel();
echo $car1->getCarVersion();
echo $car1->getCarManufacture();
   ?>