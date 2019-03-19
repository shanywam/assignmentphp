<?php
class Library
{
    public $name;
    public $location;
    private $libraryFee;
    protected$libraryCard;

    public function __construct($name, $location, $libraryFee, $libraryCardNumber)
    {
        $this->name = $name;
        $this->location = $location;
        $this->libraryFee=$libraryFee;
        $this->libraryCardNumber=$libraryCardNumber;
    }

    public function getLibraryName()
    {
        return 'Library name is: ' . $this->name;

    }
    public function getLibraryLocation()
    {
        return 'It is Located in: ' . $this->location;
    }

    public function getLibraryFee()
    {
        return 'Fee Payable is: ' . $this->libraryFee;
    }
    public function getLibraryCardNumber()
    {
        return 'And Card Number is: ' . $this->libraryCardNumber;
    }
}
$library1=new Library('McMillan Memorial Library<br><br>','Nairobi,Kenya Banda.st<br><br>','1000 per year<br><br>','5550100<br><br>');
echo $library1->getLibraryName();
echo $library1->getLibraryLocation();
echo $library1->getLibraryFee();
echo $library1->getLibraryCardNumber();
?>