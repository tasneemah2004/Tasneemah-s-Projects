<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try{
    if(isset($_POST['questiontext'])){
        updateQuestion($pdo, $_POST['questionid'], $_POST['questiontext']);
        header('location: questions.php');
    }else{
       // $sql = 'SELECT * FROM joke WHERE id = :id';
       // $stmt = $pdo->prepare($sql);
       // $stmt->bindValue(':id', $_GET['id']);
       // $stmt->execute();
        $question = getQuestion($pdo, $_GET['id']);
        $title = 'Edit question';

        ob_start();
        include '../templates/editquestion.html.php';
        $output = ob_get_clean();

    }

}catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing question: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';


