<?php

class Restaurant
{
    public $name;
    public $request;
    public $meal;
    public $drinks;
    public $price;
    public $bill;
    public $quantity;

    public function setName($name)
    {
        $this->name= $name;
        return $this;
    }

    public function setRequest($meal, $price)
    {
        $this->request = $meal . '='. $price;
        return $this;

    }
    public function setDrinks($drinks, $price)
    {
        $this->request = $drinks . '='. $price;
        return $this;

    }

    public function Bill($quantity, $price)
    {
        $this->bill = $quantity * $price;
        return $this;

    }

    public function getDetails()
    {
        echo "Name:$this->name Request:$this->request Drinks:$this->drinks Bill:$this->bill";
    }
}

$restaurant = new Restaurant();
$restaurant->setName('JAVA</br></br>')->setRequest('masala','Ksh 300</br></br>')->setDrinks('lemonade','Ksh 400</br></br>')->Bill('2','700')->getDetails();
?>
