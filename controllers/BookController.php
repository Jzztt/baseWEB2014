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
        include './views/index.php';
    }

    public function add()
    {
        if (isset($_POST['add'])) {
            $title = $_POST['title'];
            $date = $_POST['date'];
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], './public/img/' . $image);
            $author = $_POST['author'];
            $publisher = $_POST['publisher'];
            $success =  $this->BookModel->insertBook($title, $image, $date, $author, $publisher);
            if ($success) {
                header('location:./index.php');
            }
        }
    }
}
