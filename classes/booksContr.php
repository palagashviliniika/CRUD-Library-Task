<?php
require_once "books.class.php";

class BooksController {
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

    public function deleteBooks(){
        if (empty($this->postData['delete-checkbox'])){
            header('location: index.php');
        } else{
            $string = implode(', ', $this->postData['delete-checkbox']);

            $delete = new Books();
            $delete->deleteBooks($string);
            header('location: index.php');
        }
    }

    public function updateBook(){
        $book = new Books();
        $book->setBook($this->postData);
    }
}