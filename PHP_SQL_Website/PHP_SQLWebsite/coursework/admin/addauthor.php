<?php
if(isset($_POST['name'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertAuthor($pdo, $_POST['name']);
        header('location: authors.php');
    }catch (PDOEception $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new author';
    $Authors = allAuthors($pdo);
    ob_start();
    include '../templates/addauthor.html.php';
    $output = ob_get_clean();
}


include '../templates/admin_layout.html.php';
