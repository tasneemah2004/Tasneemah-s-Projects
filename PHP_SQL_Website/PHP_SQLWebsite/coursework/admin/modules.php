<?php
require "login/Check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    
    $modules = allModules($pdo);
    $title = 'Module List';
    $totalModules = totalModules($pdo);

    ob_start();
    include '../templates/modules.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';