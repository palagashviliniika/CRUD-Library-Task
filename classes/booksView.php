<?php

require_once "books.class.php";

class BooksView {
    public function getBooks(){
        $books = new Books();
        $results = $books->getBooks();

        return $results;
    }

    public function getBook($id){
        $book = new Books();
        $result = $book->getBook($id);

        return $result;
    }

    public function getAuthors(){
        $authors = new Books();
        $results = $authors->getAuthors();

        return $results;
    }

    public function getFilteredBooks($filter){
        $books = new Books();

        if ($filter == '*'){
            $results = $books->getBooks();
        } else {
            $results = $books->getFilteredBooks($filter);
        }

        return $results;
    }

    public function showID($book){
        echo htmlspecialchars($book['id']);
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

    public function showError($errors, $field){
        echo htmlspecialchars($errors[$field]);
    }

    public  function showSingleAuthor($author, $i){
        echo $author[$i];
    }
}