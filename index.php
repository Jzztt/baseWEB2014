<?php
include "controllers/Product.php";
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// $action = $_GET['action'] ?? 'index';
switch ($action) {
    case 'index':
        break;
    default:
        echo "action not found";
        break;
}