<?php

class Book {

    private string $title;
    private string $author;
    private string $year;
    private string $status;
    private string $genre;
    private string $description;
    private int $id;

    public function __construct($id,$title,$author,$year,$status,$genre,$description = null){
        $this->description = 'hello';
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->status = $status;
        $this->genre = $genre;
    }
    public function get_id(){
        return $this->id;
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
    public function get_description(){
        return $this->description;
    }
}