<?php
abstract class Student
{
    public $fullName;
    public $displayUnit;

    abstract public function displayUnit($name);

}

class ClassRep extends Student
{


    public function displayName ()
    {

        echo "shannelle wamaitha njeru <br><br>";
    }

    public function displayUnit($name)
    {
        $this->displayUnit= "Data communications";
        echo "The class rep takes this unit as well $this->displayUnit</br></br>";
    }
}
class DepartmentRep extends Student
{
    public function displayName ()
    {

        echo "shawn njeru ndwiga<br><br>";
    }

    public function  displayUnit($name)
    {
        $this->displayUnit= "Data communications";
        echo "He is the department representative for $this->displayUnit</br></br>";
    }
}
$classRep = new ClassRep();
 $classRep->displayName();
 $classRep->displayUnit();
$departmentRep = new DepartmentRep();
 $departmentRep->displayName();
$departmentRep->displayUnit();
?>