<form action="" method="post">
    <input type="hidden" name="authorid" value="<?=$author['id'];?>">
    <label for='name'>Edit your author here</label>
    <textarea name="name" rows="3" cols="40">
    <?=$authors['name']?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>