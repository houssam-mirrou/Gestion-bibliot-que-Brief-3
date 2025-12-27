<?php

$current_user = $_SESSION['user'];
$errors;
$books = Helpers::get_books($data);
$borrowed_books_and_users = Helpers::get_borrowed_books_and_users($data);
$fields = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'])) {
    $title = $_POST['title'];
    $author = $_POST['author_name'];
    $date = $_POST['year'];
    $genre = $_POST['genre'];
    $errors = Helpers::verify_all_book_fields($title, $author, $genre, $date);

    if ($errors === true) {
        $result = Helpers::add_book($title, $author, $genre, $date, $data);
        if ($result === true) {
            header('Location: /admin');
            exit();
        }
    }
    else {
        $fields = [
            'title' => $title,
            'author' => $author,
            'date' => $date,
            'genre' => $genre,
        ];
    }

}


require __DIR__ . '/../views/admin.view.php';
