<?php
/*
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

class Member
{
    private $username="";
    private $loggedIn=false;
    public function setUsername()
    {
     $this->username='shannelle';
    }

    public function login()
    {
        $this->loggedIn=true;
    }
    public function logout()
    {
        $this->loggedIn = false;
    }
    public function isLoggedIn()
    {
        return $this->loggedIn;
    }
    public function getUsername()
    {
        echo 'username:$this->>username';
    }
}
class Administrator extends Member
{

    public function createForum( $forumName )
    {
        echo "$this->username created a new forum: $forumName<br>";
    }

    public function banMember( $member )
    {
	        echo "$this->username banned the member: $member->username<br>";
    }

}
// Create a new member and log them in

	$member = new Member();
	//$member->username = "Masud Alam";
    $member->setUsername();
	$member->login();

	//echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
    $member->getUsernane();

	// Create a new administrator and log them in

	$admin = new Administrator();
	$admin->setUsername();
	//$admin->username = "Farhan";
	//$admin->login();

	echo $admin->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

	// Displays "Mary created a new forum: W3programmers"

	$admin->createForum( "W3programmers" );

	// Displays "Farhan banned the member: Masud Alam"

	$admin->banMember( $member );
	*/
class Car
{
     public function hello()
    {
        echo 'beep!open the gate';
    }
}
class SportCar extends Car
{
    final public function hello()
    {
       echo'beep!i am the derived class';
    }
}
$SportCar = new SportCar();
$SportCar->hello();
//echo $SportCar->hello();
?>
