/*
<?php
class Files{

    private $handle;
    private $filename;


    public function __construct($filename,$mode){
        $this->filename = $filename;
        $this->handle = fopen($filename, $mode);
    }


    public function __destruct()
    {
        if($this->handle)
        {
            fclose($this->handle);
        }
    }

    public function display()
    {
        echo fread($this->handle, filesize($this->filename));

    }
}

$file = new Files('/home/shantel/Projects/FIrstProject/shan.html', 'html');
$file->display();
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

<?php
class Shan
{
    public $fruits='mango';

    public function __construct($fruits)
       {
           $this->fruits=$fruits;
       }

    public function __isset($fruits)
    {
        echo 'The fruit is $fruits';
    }

}
$fruits-> new Shan('mango');

?>