<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1> Change title </h1>

    <form method="POST">
    <label >
        <input name="title" value="<?= $_POST["title"] ?? "" ?>">
    </label>
    <label>
        <select name="category_id">
            <option value="1">Sport</option>
            <option value="2">music</option>
            <option value="3">food</option>
        </select>
    </label>
    <button>Submit</button>
    </form>

<?php require "views/components/footer.php" ?>