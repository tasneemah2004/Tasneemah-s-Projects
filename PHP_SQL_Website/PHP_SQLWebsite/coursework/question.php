<?php
if(isset($_POST[])){
    try{
        include 'includes/DatabaseConnection.php';

        $sql = 'INSERT INTO joke SET
        questiontext = :questiontext,
        questiondate = CURDATE()';
        $stmt = $pdo->prepare($sql);
        $stmt ->bindValue(':questiontext', $POST['questiontext']);
        $stmt->execute();
        header('location: questions.php');
    }catch (PDOException $e){
        $title = 'An error has occurred;'
        $output = 'Database error: ' - $e->getMessage();
    }
}else{
    $title = 'Add a new question';
    ob_start();
    include 'templates/addquestion.html.php';
    $output = ob_get_clean();
}
    include 'templates/layout.html.php';
    
}