<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try{
    if(isset($_POST['name'])){
        updateAuthor($pdo, $_POST['authorid'], $_POST['name']);
        header('location: authors.php');
    }else{
       // $sql = 'SELECT * FROM joke WHERE id = :id';
       // $stmt = $pdo->prepare($sql);
       // $stmt->bindValue(':id', $_GET['id']);
       // $stmt->execute();
        $authors = getAuthor($pdo, $_GET['id']);
        $title = 'Edit author';

        ob_start();
        include '../templates/editauthor.html.php';
        $output = ob_get_clean();

    }

}catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing author: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';


