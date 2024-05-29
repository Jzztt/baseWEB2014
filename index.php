<?php
include './controllers/BookController.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// $action = $_GET['action'] ?? 'index';
$bookController = new BookController();
switch ($action) {
    case 'index':
        $books = $bookController->home();
        include './views/index.php';
        break;
    default:
        echo "action not found";
        break;
}