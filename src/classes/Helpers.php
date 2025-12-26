<?php
class Helpers {
    //books methods
    public static function add_book($title,$author,$genre,$year,$data) {
        $query = 'INSERT into books (title,author,genre,year)
                  values (:title,:author,:genre,:year)';
        $params = [
            'title'=>$title,
            'author'=>$author,
            'genre'=>$genre,
            'year'=>$year
        ];
        $result = $data->query($query,$params);
        if($result){
            return true;
        }
        return false;
    }
    public static function get_books($data){
        $query = 'SELECT * from books;';
        $result = $data->query($query);
        if($result == []){
            return null;
        }
        return $result;
    }

    public static function verify_title ($title) {
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
    public static function verify_author($author){
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
    public static function verify_genre($genre){
        $genres = ['Fiction','Science','History','Biography','Fantasy'];
        if(in_array($genre,$genres)){
            return true;
        }
        return false;
    }
    public static function verify_date($date){
        $current_year = (int)date('Y');
        if($date>$current_year){
            return false;
        }
        return true;
    }

    public static function verify_all_book_fields($title,$author,$genre,$date){
        $errors = [];
        if(!static::verify_author($author)){
            $errors['author'] = 'You should give a valid author name';
        }
        if(!static::verify_date($date)){
            $errors['date'] = 'You should give a valid date';
        }
        if(!static::verify_genre($genre)){
            $errors['genre'] = 'You should give a genre';
        }
        if(!static::verify_title($title)){
            $errors['title'] = 'You should give a valid title';
        }
        if(empty($errors)){
            return true;
        }
        return $errors;
    }

}