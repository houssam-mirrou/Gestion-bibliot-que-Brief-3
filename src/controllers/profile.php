<?php

$current_user = $_SESSION['user'];
$loans = []; // This will hold our list of loans

// 1. Get the data from the helper
$raw_data = Helpers::get_borrowed_books_by_user($data, $_SESSION['user_id']);

if ($raw_data) {
    foreach ($raw_data as $row) {
        
        // 2. Create the Borrow Object
        // Notice we use $row['borrow_id'] because that's what we named it in SQL
        $borrow_obj = new Borrow(
            $row['borrow_id'],   
            $row['readerId'],
            $row['bookId'],
            $row['borrowDate'],
            $row['returnDate'],
            $row['returned']
        );

        // 3. Create the Book Object
        // We use $row['bookId'] for the ID, and the other book columns we joined
        $book_obj = new Book(
            $row['bookId'],  
            $row['title'],
            $row['author'],
            $row['year'],
            $row['status'],
            $row['genre']
        );

        // 4. Group them together
        $loans[] = [
            'borrow' => $borrow_obj,
            'book'   => $book_obj
        ];
    }
}

// Load the view
require __DIR__ . '/../views/profile.view.php';