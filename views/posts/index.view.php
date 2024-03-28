<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
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
    <li><?= htmlspecialchars($post["title"]) ?>
        <form class="delete-form" method="POST" action="/delete">
            <input type="hidden" name="id" value=" <?= $post['id'] ?>">
            <Button>Delete</Button>
        </form>
    </li>
    <?php } ?>
    </ul>
<?php require "views/components/footer.php" ?>

