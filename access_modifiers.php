<?php
class Library
{
    public $name;
    public $location;
    private $libraryFee;
    protected $libraryCard;

    public function setName($name)
    {
       $this->name= $name;
       return $this;
    }
    public function setLocation($location)
    {
        $this->location= $location;
       return $this;
    }
    public function setLibraryFee($libraryFee)
    {
        $this->libraryFee= $libraryFee;
       return $this;
    }
    public function setLibraryCard($libraryCard)
    {
        $this->libraryCard= $libraryCard;
       return $this;
    }
    public function getInformation()
    {
        echo "Name:$this->name Location:$this->location LibraryFee:$this->libraryFee LibraryCard:$this->libraryCard";
    }

}
$library=new Library();
$library->setName('McMillan Memorial Library<br><br>')->setLocation('Nairobi,Kenya Banda.st<br><br>')->setLibraryFee('1000 per year<br><br>')->setLibraryCard('5550100<br><br>')->getInformation();
?>