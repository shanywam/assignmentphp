<?php
abstract class Student
{
    public $fullName;
    public $displayUnit;

    abstract public function displayUnit();

}

class ClassRep extends Student
{


    public function displayName ()
    {

        echo "shannelle wamaitha njeru <br><br>";
    }

    public function displayUnit()
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

    public function  displayUnit()
    {
        $this->displayUnit= "Data communications";
        echo "He is the department representative for $this->displayUnit</br></br>";
    }
}
$classRep = new ClassRep();
echo $classRep->displayName();
echo $classRep->displayUnit();
$departmentRep = new DepartmentRep();
echo $departmentRep->displayName();
echo $departmentRep->displayUnit();
?>