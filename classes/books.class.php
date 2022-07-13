<?php

require_once "dbh.class.php";

class Books extends Dbh {
    public function getBooks(){
        $sql = "SELECT id, title, relDate, status, author FROM books";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function setBooks(){

    }

}