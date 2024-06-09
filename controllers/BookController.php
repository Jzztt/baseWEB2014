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
        include './views/add.php';
    }
    public function create()
    {
        // $_POST = [
        //     "add" => true,
        //     "TITLE " => 'GHC',
        //     "DATE" => '2020-01-01',
        //     "Date" => "01/01/2024"
        //     "AUTHOR" => 'GHC',
        //     "PUBLISHER" => 'GHC',
        //     ]
        // $_FILES['image'] =[
        //     'name' => 'ghc.png',
        //     'tmp_name' => 'C:\Users\Asm\Desktop\asm\asm\public\img\ghc.png',
        //     "error" =>0,
        // ]
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
    public function delete($id)
    {
        $this->BookModel->deleteBook($id);
    }
    public function update($id)
    {
        $book = $this->BookModel->getBookById($id);
        include "./views/update.php";
    }

    public function edit($id)
    {
        if (isset($_POST['add'])) {
            $title = $_POST['title'];
            $date = $_POST['date'];
            $author = $_POST['author'];
            $publisher = $_POST['publisher'];
            $image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : null;
            if ($image) {
                move_uploaded_file($_FILES['image']['tmp_name'], './public/img/' . $image);
            }

            $success =  $this->BookModel->editBook($title, $image, $date, $author, $publisher, $id);
            if ($success) {
                header('location:./index.php');
            }
        }
    }
}