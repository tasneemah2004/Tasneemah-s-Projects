<p><?=$totalModules?> modules have been submitted to the Student stackflow.</p>

<?php 
foreach($modules as $module): ?>
    <blockquote>
    <br /><?=htmlspecialchars($module['moduleName'],ENT_QUOTES,'UTF-8')?>


    <a href="editmodule.php?id=<?=$module['id']?>">Edit</a>
    
    <form action="deletemodule.php" method="post">
        <input type="hidden" name="id" value="<?=$module['id']?>">
        <input type="submit" value="Delete">
    </form>
    </blockquote>
    <?php endforeach;?>