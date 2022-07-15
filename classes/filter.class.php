<?php

class Filter {
    private $elements;

    public function __construct($elements){
        $this->elements=$elements;
    }

    public function setElements($elements){
        $this->elements=$elements;
    }

    public function getElements(){
        return $this->elements;
    }

    public function filterAuthors(){
        //converting authors assoc two-dimensional array into string
        $str = implode(', ', array_map(function ($entry) {

            return $entry['author'];

        }, $this->elements));

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

    public function filterTitles(){
        //converting titles assoc two-dimensional array into string
        $str = implode(', ', array_map(function ($entry) {

            return $entry['title'];

        }, $this->elements));

        //turning titles string into one dimensional array
        $arr = explode(",",$str);

        //getting rid of white spaces in the array
        $trimmed = array_map('trim', $arr);

        //getting rid of duplicate titles in the array
        $uniques = array_unique($trimmed);

        //reindexing array from 0
        $uniqReindexed = array_values($uniques);

        return $uniqReindexed;
    }
}