<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>

    <h1><?= htmlspecialchars($posts["title"]) ?></h1>
    <label>
        <form class="delete-form" method="POST" action="/delete">
            <Button name="id" value=" <?= $_GET['id'] ?>">Delete</Button>
        </form>
        <form class="edit-form" action="/edit">
            <Button name="id" value=" <?= $_GET['id'] ?>">edit</Button>
        </form>
    </label>

    

<?php require "views/components/footer.php" ?>