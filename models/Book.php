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
    public function editBook($title, $image, $date, $author, $publisher, $id)
    {
        if (isset($image)) {
            $query = "UPDATE books SET title = '$title', cover_image = '$image', date = '$date', publisher = '$publisher', author = '$author' WHERE id = $id";
        } else {
            $query = "UPDATE books SET title = '$title', date = '$date', publisher = '$publisher', author = '$author' WHERE id = $id";
        }
        echo $query;

        if ($this->db->exec($query)) {
            return true;
        }
    }

    public function getBookById($id)
    {
        $query = "SELECT * FROM books WHERE id = $id";
        $results = $this->db->query($query)->fetch();
        return $results;
    }
    public function deleteBook($id)
    {
        $sql = "DELETE FROM books WHERE id = $id";
        $this->db->exec($sql);
        header("Location:./index.php");
    }
}
