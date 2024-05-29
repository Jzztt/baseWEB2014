<?php
include './models/Book.php';
class BookController
{
    public $BookModel;
    public function __construct()
    {
        $this->BookModel = new Book();
    }
    public function home()
    {
        $books = $this->BookModel->getBooks();
        return $books;
    }
}