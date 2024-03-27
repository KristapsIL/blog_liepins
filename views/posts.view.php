<?php require "components/head.php" ?>
    <?php require "components/navbar.php" ?>
    <form>
        <input name='id' value='<?= ($_GET["id"] ?? "") ?>'/>
        <button >Submit</button>
    </form>

    <p>categories</p>

    <form>
        <input name='name' value='<?= ($_GET["name"] ?? "") ?>'/>
        <button >Submit</button>
    </form>

    <h1> POSTS </h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= htmlspecialchars($post["title"]) ?></li>
    <?php } ?>
    </ul>
<?php require "components/footer.php" ?>

