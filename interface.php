<?php
interface Flower
{
    public function flowers();
}
interface Color
{
     public function colors();
}
class Type
{
    public function  varieties()
    {
        echo 'varieties of flowers';
    }
}

class Rose extends Type implements Color,Flower
{
    public function flowers()
    {
        $combine=(1+1+1);
        echo "<br>flower white rose has $combine colors in it   <br>";
    }


    public function colors()
    {
        $color=['red'=>'poppy','white'=>'lily'];
        unset ($color['white']);
        var_dump($color, isset($color['red']));
        print_r( $color);
    }
    //public function varieties()
    //{
      //  echo 'There are different varieties of flowers';
   // }


}
$rose = new Rose();
$rose->colors();
$rose->flowers();
$type= new Type();
$type->varieties();
?>