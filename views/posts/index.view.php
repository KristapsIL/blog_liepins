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
    <li><a class="posts" href="/show?id=<?= $post['id'] ?> ">
        <?= htmlspecialchars($post["title"]) ?></a>
        <form class="delete-form" method="POST" action="/delete">
            <Button name="id" value=" <?= $post['id'] ?>">Delete</Button>
        </form>
    </li>
    <?php } ?>
    </ul>
<?php require "views/components/footer.php" ?>

