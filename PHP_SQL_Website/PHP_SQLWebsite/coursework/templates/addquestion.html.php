<form action="" method="post">
    <label for='questiontext'>Type your question here</label>
    <textarea name="questiontext" rows="3" cols="40"></textarea>

    <select name="authors">
        <option value="">select an author</option>
        <?php foreach ($authors as $author):?>
            <option value="<?=htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
            <?php endforeach;?>
</select>

    <select name="modules"> 
    <option value="">select a module</option>
    <?php foreach ($modules as $module):?>
        <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
            <?php endforeach;?>
</select>
    <input type="submit" name="submit" value="Add">
</form>