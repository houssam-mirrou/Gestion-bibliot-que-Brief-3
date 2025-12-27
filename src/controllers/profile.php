<?php

$current_user = $_SESSION['user'];
$loans = [];
$number_of_borrowed_books = Helpers::count_borrowed_books_by_user($data,$_SESSION['user_id']);
$number_of_borrowed_books_history = Helpers::get_number_of_borrowed_books_history_by_user($data,$_SESSION['user_id']);
$raw_data = Helpers::get_borrowed_books_by_user($data, $_SESSION['user_id']);

if ($raw_data) {
    foreach ($raw_data as $row) {
        
        $borrow_obj = new Borrow(
            $row['borrow_id'],   
            $row['readerId'],
            $row['bookId'],
            $row['borrowDate'],
            $row['returnDate'],
            $row['returned']
        );

        $book_obj = new Book(
            $row['bookId'],  
            $row['title'],
            $row['author'],
            $row['year'],
            $row['status'],
            $row['genre']
        );

        $loans[] = [
            'borrow' => $borrow_obj,
            'book'   => $book_obj
        ];
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['borrow_id']) && isset($_POST['book_id'])) {
    $borrow_id = $_POST['borrow_id'];
    $book_id = $_POST['book_id'];

    $update_borrow_query = 'UPDATE borrows set returnDate = :return_date, returned = 1 where id = :borrow_id;';
    $update_borrow_params = [
        'return_date' => date('Y-m-d'),
        'borrow_id' => $borrow_id
    ];
    $data->query($update_borrow_query, $update_borrow_params);

    Helpers::update_book_status($data, $book_id, 'available');

    header('Location: /profile');
    exit();
}  

require __DIR__ . '/../views/profile.view.php';