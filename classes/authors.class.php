<?php

class Authors {
    private $authors;

    public function __construct($authors){
        $this->authors=$authors;
    }

    public function setAuthors($authors){
        $this->authors=$authors;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function filterAuthors(){
        //converting authors assoc two-dimensional array into string
        $str = implode(', ', array_map(function ($entry) {

            return $entry['author'];

        }, $this->authors));

        //turning authors string into one dimensional array
        $arr = explode(",",$str);

        //getting rid of white spaces in the array
        $trimmed = array_map('trim', $arr);

        //getting rid of duplicate authors in the array
        $uniques = array_unique($trimmed);

        //reindexing array from 0
        $uniqReindexed = array_values($uniques);

        return $uniqReindexed;
    }
}