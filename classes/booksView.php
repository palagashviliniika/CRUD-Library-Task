<?php

require_once "books.class.php";

class BooksView {
    public function getBooks(){
        $books = new Books();
        $results = $books->getBooks();

        return $results;
    }

    public function showTitle($book){
        echo htmlspecialchars($book['title']);
    }

    public function showRelDate($book){
        echo htmlspecialchars($book['relDate']);
    }

    public function showStatus($book){
        echo htmlspecialchars($book['status']);
    }

    public function showAuthor($book){
        echo htmlspecialchars($book['author']);
    }
}