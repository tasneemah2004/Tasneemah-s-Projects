<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';
    
    $questions = allQuestions($pdo);
    $title = 'Question List';
    $totalQuestions = totalQuestions($pdo);

    ob_start();
    include 'templates/public_questions.html.php';
    $output = ob_get_clean();

}catch (PDOException $e){
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';