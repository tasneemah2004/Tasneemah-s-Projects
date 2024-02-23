<p><?=$totalAuthors?> authors have been submitted to the Student stackflow.</p>

<?php 
foreach($authors as $author): ?>
    <blockquote>
    <br /><?=htmlspecialchars($author['name'],ENT_QUOTES,'UTF-8')?>


    <a href="editauthor.php?id=<?=$author['id']?>">Edit</a>
    
    <form action="deleteauthor.php" method="post">
        <input type="hidden" name="id" value="<?=$author['id']?>">
        <input type="submit" value="Delete">
    </form>
    </blockquote>
    <?php endforeach;?>