<form action="" method="post">
    <input type="hidden" name="moduleid" value="<?=$module['id'];?>">
    <label for='moduleName'>Edit your module here</label>
    <textarea name="moduleName" rows="3" cols="40">
    <?=$modules['moduleName']?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>