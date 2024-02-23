<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../admin.css">
    <title>Student Stackflow</title>
</head>
<body>
    <header id="admin">
    <h1>Student Stackflow Admin Area</h1>
        <br/>
    <h1>Manage Questions, modules and authors</h1></header>
    <nav>
        <ul>
            <!-- <li><a href="index.php">Home</a></li> -->
            <li><a href="questions.php">Questions List</a></li
            <li><a href="addquestion.php">Add a new question</a></li>
            <li><a href="addmodule.php">Add a new module</a></li>
            <li><a href="authors.php">Authors List</a></li>
            <li><a href="addauthor.php">Add a new author</a></li>
            <li><a href="modules.php">Module List</a></li>
            <li><a href="login/Logout.php">Public Site/Logout</a></li> 
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; IJDV 2023</footer>
    
</body>
</html>