<?php
if(isset($_POST['questiontext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertQuestion($pdo, $_POST['questiontext'], $_POST['authors'], $_POST['modules']);
        header('location: questions.php');
    }catch (PDOEception $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new question';
    $authors = allAuthors($pdo);
    $modules = allModules($pdo);
    ob_start();
    include '../templates/addquestion.html.php';
    $output = ob_get_clean();
}


include '../templates/admin_layout.html.php';
