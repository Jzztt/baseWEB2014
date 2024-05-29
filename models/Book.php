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
}
?>