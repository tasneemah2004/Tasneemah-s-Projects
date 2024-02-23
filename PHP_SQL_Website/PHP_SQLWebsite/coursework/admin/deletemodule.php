<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deleteModule($pdo, $_POST['id']);
  //  $sql = 'DELETE FROM joke WHERE id = :id';
  //  $stmt = $pdo->prepare($sql);
  //  $stmt->bindValue(':id', $_POST['id']);
  //  $stmt->execute();
    header('location: modules.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to delete module: ' .$e->getMessage();
}
include '../templates/admin_layout.html.php';