<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1> Change title </h1>

    <form method="POST">
    <label >
        <input name="title" value="<?= $_POST["title"] ?? "" ?>">
        <button>Submit</button>
    </label>
    </form>

<?php require "views/components/footer.php" ?>