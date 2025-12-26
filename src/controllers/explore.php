<?php

$books = [];

$array_of_books = Helpers::get_books($data);
if($array_of_books != null){
    foreach($array_of_books as $d_book){
        $book = new Book($d_book['id'],$d_book['title'],$d_book['author'],$d_book['year'],$d_book['status'],$d_book['genre']);
        array_push($books,$book);
    }
}

require __DIR__ . '/../views/explore.view.php';
