<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>Create posts</h1>
<form method="POST">
    <label>
        Title:
        <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
        <?php if(isset($errors["title"])) {?>
        <p class="error"><?= $errors["title"]?></p>
        <?php } ?>
    </label>
    <label>
        Category ID:
        <select name="category_id">
            <option value="1">Sport</option>
            <option value="2">music</option>
            <option value="3">food</option>
        </select>
        <?php if(isset($errors["category_id"])) {?>
            <p class="error"><?= $errors["category_id"]?></p>
        <?php } ?>
    </label>
    <button>Save</button>
</form>
<?php require "views/components/footer.php" ?>