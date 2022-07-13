<?php
require_once "books.class.php";

class BooksController{
    private $postData;

    public function __construct($postData)
    {
        $this->postData = $postData;
    }

    public function setData($postData){
        $this->postData = $postData;
    }

    public function getData(){
        return $this->postData;
    }

    public function saveBook(){
        $book = new Books();
        $book->setBooks($this->postData);
    }
}