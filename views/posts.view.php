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

    <form>
        <select name='name'>
            <option value=''></option>
            <option value='sport'>sport</option>
            <option value='music'>music</option>
            <option value='food'>food</option>
        </select>
        <button >Submit</button>
    </form>

    <h1> POSTS </h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= $post["title"] ?></li>
    <?php } ?>
    </ul>
<?php require "components/footer.php" ?>

