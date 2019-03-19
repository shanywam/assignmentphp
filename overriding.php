<?php
class Fruits
{
    public $colorFruit;
    protected $origin;

    public function color()
    {
        echo 'fruits have different colors but some have the same';
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    public function getDetails()
    {
        echo "origin:$this->origin";
    }
}

class Mango extends Fruits
{
    public function color()
    {
        echo 'But this fruit has the color yellow';
    }
}

$mango = new Mango();
echo $mango->color();
?>