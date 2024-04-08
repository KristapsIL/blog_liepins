<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1> Edit post </h1>

    <form method="POST">
    <input name="id" value="<?= $post["id"] ?>" type="hidden">
    <label >
        <input name="title" value="<?= $_POST["title"] ?? $post["title"] ?>">
        <?php if(isset($errors["title"])) {?>
        <p class="error"><?= $errors["title"]?></p>
        <?php } ?>
    </label>
    <label>
        <select name="category_id" >
            <option value="1" <?= ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : "" ?>>Sport</option>
            <option value="2" <?= ($_POST["category_id"] ?? $post["category_id"]) == 2 ? "selected" : "" ?>>music</option>
            <option value="3" <?= ($_POST["category_id"] ?? $post["category_id"]) == 3 ? "selected" : "" ?>>food</option>
        </select>
        <?php if(isset($errors["category_id"])) {?>
            <p class="error"><?= $errors["category_id"]?></p>
        <?php } ?>
    </label>
    <button>Submit</button>
    </form>

<?php require "views/components/footer.php" ?>