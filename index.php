<?php
include './controllers/BookController.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// $action = $_GET['action'] ?? 'index';
$bookController = new BookController();
switch ($action) {
    case 'index':
        $books = $bookController->home();
        break;

    case 'add':
        $books = $bookController->add();
        break;
    default:
        echo "action not found";
        break;
}
