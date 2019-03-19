<?php
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
?>