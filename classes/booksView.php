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

    public function getTitles(){
        $titles = new Books();
        $results = $titles->getTitles();

        return $results;
    }

    public function getFilteredBooks($authorFilter, $titleFilter){
        $books = new Books();

        if ($authorFilter == '*' && $titleFilter == '*'){
            $results = $books->getBooks();
        } else {
            if ($authorFilter != '*' && $titleFilter != '*'){
                $results = $books->getBothFilteredBooks($authorFilter, $titleFilter);
            } elseif ($authorFilter != '*' && $titleFilter =='*'){
                $results = $books->getAuthorFilteredBooks($authorFilter);
            } elseif ($authorFilter == '*' && $titleFilter != '*'){
                $results = $books->getTitleFilteredBooks($titleFilter);
            }
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

    public  function showSingleTitle($title, $i){
        echo $title[$i];
    }
}