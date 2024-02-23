<b><?=$totalQuestions?> questions have been submitted to the Student stackflow.</b> 

<?php 
foreach($questions as $question): ?>
    <blockquote>
    <?=htmlspecialchars($question['questiontext'],ENT_QUOTES,'UTF-8')?>
    <br /><?=htmlspecialchars($question['moduleName'],ENT_QUOTES,'UTF-8')?>

    (by <a href="mailto:<?=htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8' );?>">
    <?=htmlspecialchars($question['name'], ENT_QUOTES, 'UTF-8'); ?></a>)

    <!-- <a href="editjoke.php?id=<?=$question['id']?>">Edit</a> 
    
    <form action="deletejoke.php" method="post">
        <input type="hidden" name="id" value="<?=$question['id']?>">
        <input type="submit" value="Delete">  -->

    </form>
    </blockquote>
    <?php endforeach;?>