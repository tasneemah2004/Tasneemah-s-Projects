<?php
if(isset($_POST['moduleName'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertModule($pdo, $_POST['moduleName']);
        header('location: modules.php');
    }catch (PDOEception $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new module';
    $modules = allModules($pdo);
    ob_start();
    include '../templates/addmodule.html.php';
    $output = ob_get_clean();
}


include '../templates/admin_layout.html.php';
