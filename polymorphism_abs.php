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