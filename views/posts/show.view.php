<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1> POSTS </h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><a href="/?id=<?= $post['id'] ?> ">
        <?= htmlspecialchars($post["title"]) ?></a>
        <label>
        <form class="delete-form" method="POST" action="/delete">
            <Button name="id" value=" <?= $post['id'] ?>">Delete</Button>
        </form>
        <form class="edit-form" action="/edit">
            <Button name="id" value=" <?= $post['id'] ?>">eidut</Button>
        </form>
        </label>
    </li>
    <?php } ?>
    </ul>
<?php require "views/components/footer.php" ?>