<?php
include './controllers/BookController.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
echo $action;
// $action = $_GET['action'] ?? 'index';
$bookController = new BookController();
switch ($action) {
    case 'index':
        $books = $bookController->home();
        break;
    case 'add':
        $books = $bookController->add();
        break;
    case 'create':
        $books = $bookController->create();
        break;
    case 'delete':
        $id = $_GET['id'];
        $books = $bookController->delete($id);
        break;
    default:
        echo "action not found";
        break;
}
