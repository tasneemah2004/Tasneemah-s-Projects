<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try{
    if(isset($_POST['moduleName'])){
        updateModule($pdo, $_POST['moduleid'], $_POST['moduleName']);
        header('location: modules.php');
    }else{
       // $sql = 'SELECT * FROM joke WHERE id = :id';
       // $stmt = $pdo->prepare($sql);
       // $stmt->bindValue(':id', $_GET['id']);
       // $stmt->execute();
        $modules = getModule($pdo, $_GET['id']);
        $title = 'Edit module';

        ob_start();
        include '../templates/editmodule.html.php';
        $output = ob_get_clean();

    }

}catch(PDOException $e){
    $title = 'error has occured';
    $output = 'Error editing module: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';


