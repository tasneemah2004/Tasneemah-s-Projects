<?php
require "login/Check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    
    $authors = allAuthors($pdo);
    $title = 'Authors List';
    $totalAuthors = totalAuthors($pdo);

    ob_start();
    include '../templates/authors.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';