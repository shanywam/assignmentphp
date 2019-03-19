<?php
class FileUtil{

    private $handle;
    private $filename;


    public function __construct($filename,$mode){
        $this->filename = $filename;
        $this->handle = fopen($filename, $mode);
    }


    public function __destruct(){
        if($this->handle){
            fclose($this->handle);
        }
    }

    public function display(){
        echo fread($this->handle, filesize($this->filename));
    }
}

$fu = new FileUtil('./shan.txt', 'doc');
$fu->display();
?>


<?php
class Person
{
    private $firstName;

    public function __get($propertyName)
    {
        echo "attempted to read non-existing property: $propertyName<br><br>";
    }
    public function __set($propertyName, $propertyValue)
    {
        echo "attempted to write to non-existing property: $propertyName <br><br>";
    }

}

$persons= new Person();

$persons->firstName= 'shany';
    echo $persons->shany;
$persons->lastName= 'wam';
    echo $persons->wam;
?>