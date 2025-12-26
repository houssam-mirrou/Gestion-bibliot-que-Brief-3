<?php
if(isset($_GET['id'])){
    $query_book = Helpers::get_book_by_id($data,$_GET['id']);
    $book = new Book($query_book['id'],$query_book['title'],$query_book['author'],$query_book['year'],$query_book['status'],$query_book['genre']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['book_id']) && isset($_SESSION['user_id'])){
        $borrowed = Helpers::borrow_book($data,$_SESSION['user_id'],$_POST['book_id']);
        if($borrowed){
            Helpers::update_book_status($data,$_POST['book_id'],'borrowed');
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit(); 
        }else{
            $error = "Could not borrow the book. Please try again.";
        }
    }else{
        $error = "Invalid request. Please try again.";
    }
}

require __DIR__ . '/../views/book-details.view.php';
