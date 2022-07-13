<?php

require_once "books.class.php";

class BooksView {
    public function getBooks(){
        $books = new Books();
        $results = $books->getBooks();

        return $results;
    }
}