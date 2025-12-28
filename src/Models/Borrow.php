<?php

class Borrow {
    private int $id;
    private int $readerId;
    private int $bookId;
    private string $borrowDate;
    private ?string $returnDate;
    private bool $returned;
    public function __construct($id,$readerId,$bookId,$borrowDate,$returnDate = null,$returned = false){
        $this->id = $id;
        $this->readerId = $readerId;
        $this->bookId = $bookId;
        $this->borrowDate = $borrowDate;
        $this->returnDate = $returnDate;
        $this->returned = $returned;
    }
    public function get_id(){
        return $this->id;
    }
    public function get_readerId(){
        return $this->readerId;
    }
    public function get_bookId(){
        return $this->bookId;
    }
    public function get_borrowDate(){
        return $this->borrowDate;
    }
    public function get_returnDate(){
        return $this->returnDate;
    }
    public function is_returned(){
        return $this->returned;
    }
}