<?php

class Book {

    private string $title;
    private string $author;
    private string $year;
    private string $status;
    private string $genre;

    public function __construct($title,$author,$year,$status,$genre){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->status = $status;
        $this->genre = $genre;
    }
    public function get_title(){
        return $this->title;
    }
    public function get_author(){
        return $this->author;
    }
    public function get_year(){
        return $this->year;
    }
    public function get_status(){
        return $this->status;
    }
    public function get_genre(){
        return $this->genre;
    }

}