<?php

include './includes/connect_db.php';
class Book
{
    public $db;
    public function __construct()
    {
        $this->db = connectDB();
    }

    public function getBooks()
    {
        $query = "SELECT * FROM books";
        $results = $this->db->query($query)->fetchAll();
        return $results;
    }
    public function insertBook($title, $image, $date, $publisher, $author)
    {
        $query = "INSERT INTO books (title,cover_image,date,publisher,author) VALUES ('$title','$image','$date','$publisher','$author')";
        if ($this->db->exec($query)) {
            return true;
        }
    }
}
