<?php
class Helpers
{
    //books methods
    public static function add_book($title, $author, $genre, $year, $data)
    {
        $query = 'INSERT into books (title,author,genre,year)
                  values (:title,:author,:genre,:year)';
        $params = [
            'title' => $title,
            'author' => $author,
            'genre' => $genre,
            'year' => $year
        ];
        $result = $data->query($query, $params);
        if ($result) {
            return true;
        }
        return false;
    }
    public static function get_books($data)
    {
        $query = 'SELECT * from books;';
        $result = $data->query($query);
        if ($result == []) {
            return null;
        }
        return $result;
    }

    public static function verify_title($title)
    {
        $title = trim($title);
        if ($title === null) {
            return false;
        }
        $regex = "/^[A-Za-z ]{3,}$/";
        if (preg_match($regex, $title)) {
            return true;
        }
        return false;
    }
    public static function verify_author($author)
    {
        $author = trim($author);
        if ($author === null) {
            return false;
        }
        $regex = "/^[A-Za-z ]{3,}$/";
        if (preg_match($regex, $author)) {
            return true;
        }
        return false;
    }
    public static function verify_genre($genre)
    {
        $genres = ['Fiction', 'Science', 'History', 'Biography', 'Fantasy'];
        if (in_array($genre, $genres)) {
            return true;
        }
        return false;
    }
    public static function verify_date($date)
    {
        $current_year = (int)date('Y');
        if ($date > $current_year) {
            return false;
        }
        return true;
    }

    public static function verify_all_book_fields($title, $author, $genre, $date)
    {
        $errors = [];
        if (!static::verify_author($author)) {
            $errors['author'] = 'You should give a valid author name';
        }
        if (!static::verify_date($date)) {
            $errors['date'] = 'You should give a valid date';
        }
        if (!static::verify_genre($genre)) {
            $errors['genre'] = 'You should give a genre';
        }
        if (!static::verify_title($title)) {
            $errors['title'] = 'You should give a valid title';
        }
        if (empty($errors)) {
            return true;
        }
        return $errors;
    }
    public static function get_book_by_id($data, $id)
    {
        $query = 'SELECT * from books where id = :id;';
        $params = [
            'id' => $id
        ];
        $result = $data->query($query, $params);
        if ($result == []) {
            return null;
        }
        return $result[0];
    }
    public static function borrow_book($data, $id_user, $id_book)
    {
        $query = 'INSERT into borrows (readerId,bookId,borrowDate)
                  values (:id_user,:id_book,:borrow_date)';
        $params = [
            'id_user' => $id_user,
            'id_book' => $id_book,
            'borrow_date' => date('Y-m-d')
        ];
        $result = $data->query($query, $params);
        if ($result) {
            $update_query = 'UPDATE books set status = :status where id = :id_book;';
            $update_params = [
                'status' => 'borrowed',
                'id_book' => $id_book
            ];
            $data->query($update_query, $update_params);
            return true;
        }
        return false;
    }
    public static function update_book_status($data, $id_book, $status)
    {
        $query = 'UPDATE books set status = :status where id = :id_book;';
        $params = [
            'status' => $status,
            'id_book' => $id_book
        ];
        $result = $data->query($query, $params);
        if ($result) {
            return true;
        }
        return false;
    }
    public static function get_borrowed_books_by_user($data, $id_user)
    {
        $query = 'SELECT 
                br.id as borrow_id,   
                br.readerId,
                br.bookId,
                br.borrowDate,
                br.returnDate,
                br.returned,
                b.title,
                b.author,
                b.year,
                b.status,
                b.genre
              FROM borrows br
              JOIN books b ON b.id = br.bookId
              WHERE br.readerId = :id_user
              ORDER BY br.borrowDate DESC';

        $params = ['id_user' => $id_user];
        $result = $data->query($query, $params);

        return $result ? $result : [];
    }

    public static function count_borrowed_books_by_user($data,$id_user)
    {
        $query = 'SELECT COUNT(*) as count FROM borrows WHERE returned = 0 and readerId = :id_user;';
        $result = $data->query($query,['id_user' => $id_user]);
        if ($result) {
            return (int)$result[0]['count'];
        }
        return 0;
    }
    public static function get_number_of_borrowed_books_history_by_user($data,$id_user)
    {
        $query = 'SELECT COUNT(*) as count FROM borrows WHERE readerId = :id_user;';
        $result = $data->query($query,['id_user' => $id_user]);
        if ($result) {
            return (int)$result[0]['count'];
        }
        return 0;
    }
    public static function get_borrowed_books_and_users($data)
    {
        $query = 'SELECT 
                br.id as borrow_id,   
                br.readerId,
                br.bookId,
                br.borrowDate,
                br.returnDate,
                br.returned,
                b.title,
                b.author,
                b.year,
                b.status,
                b.genre,
                u.firstName as user_firstName,
                u.lastName as user_lastName,
                u.email as user_email
              FROM borrows br
              JOIN books b ON b.id = br.bookId
              JOIN users u on u.id= br.readerId
              ORDER BY br.borrowDate DESC';

        $result = $data->query($query);

        return $result ? $result : [];
    }
}
