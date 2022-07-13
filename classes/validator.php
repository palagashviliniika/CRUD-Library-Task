<?php

class Validator{
    private $data;
    private $errors =[];

    public function __construct($postData){
        $this->data = $postData;
    }

    public function validateForm(){

        $this->validateTitle();
        $this->validateRelDate();
        $this->validateStatus();
        $this->validateAuthor();

        return $this->errors;
    }

    private function validateTitle(){
        $val = trim($this->data['title']);

        if (empty($val)){
            $this->addError('title','Please enter the Title');
        }
    }

    private function validateRelDate(){
        $val = trim($this->data['year']);

        if (empty($val)){
            $this->addError('year','Please enter the Release Year');
        } else{
            if (!preg_match('/[0-9]+/i', $val)){
                $this->addError('year', 'Please enter valid year');
            }
        }
    }

    private function validateStatus(){
        $val = trim($this->data['status']);

        if (empty($val)){
            $this->addError('status', 'Please enter the status');
        }
    }

    private function validateAuthor(){
        $val = trim($this->data['author']);

        if (empty($val)){
            $this->addError('author', 'Please enter the author');
        }
    }

    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}