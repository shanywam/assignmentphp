<?php
abstract class User
{
    public $noOfArticles= 20;
    abstract public function calcScores();

}
class Author extends User
{
    public $noOfAuthors;

    public function calcScores()
    {
        echo " this are the scores  <br><br>" . ($this->noOfArticles * 5);
       ;
    }
}
class Editor extends User
{
    public $noOfEditors= 2;
     public $noOfAuthors=5;

    public function calcScores()
    {
        echo "scores are  <br><br>". ($this->noOfArticles * $this->noOfAuthors * $this->noOfEditors);
        ;
    }


}
$author = new Author();
$author->calcScores();
$editor= new Editor();
$editor->calcScores();

?>

<?php

// implementation of polymorphism using interface



 interface Student
{

    public function calcScores();

}
class Pupil implements Student
{
    public $scores;
    public $assignment;
    public $exam;

    public function __construct($assignment,$exam)
    {

        $this -> assignment = $assignment;
        $this -> exam = $exam;

    }

    public function calcScores()
    {
        $this->scores= $this -> assignment + $this -> exam;
        echo "<br><br>sean's scores were $this->scores</br></br>";
    }
}
class Scholar implements Student
{
    public $scores;
    public $assignment;
    public $exam;

    public function __construct($assignment,$exam)
    {

        $this -> assignment = $assignment;
        $this -> exam = $exam;

    }

    public function calcScores()
    {
        $this->scores= $this -> assignment + $this -> exam;
        echo "jean's scores were $this->scores</br></br>";
    }
}

$pupil = new Pupil('20', '70');
$pupil->calcScores();

$scholar = new Scholar('10', '50');
$scholar->calcScores();


?>