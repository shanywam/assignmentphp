<?php
class Fruits
{
    public   $name="";
    private $ripe=false;


    public function isRipe()
    {
        $this->ripe=true;
    }
    public function notRipe()
    {
        $this->ripe = false;
    }
    public function isRipen()
    {
        return $this->ripe;
    }
    public function color()
    {
        echo 'fruits have different colors but some have the same';
    }


}
class Mango extends Fruits
{

    public function color()
    {
        echo "$this->fruits but this fruit has the color yellow<br><br>";
    }

}

$fruits = new Fruits();
$fruits->name = "watermelon";
$fruits->isRipe();


echo $fruits->name . " is " . ( $fruits->isRipen() ? "ripe" : "notripe" ) . "<br><br>";


$fruit = new Mango();
$fruit->name = "mango";
$fruit->isRipe();


echo $fruit->name . " is " . ( $fruit->isRipen() ? "ripe" : "notripe" ) . "<br><br>";
$fruit->color();

