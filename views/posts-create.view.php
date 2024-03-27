<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>Create posts</h1>
<form method="POST">
    <label>
        Title:
        <input name="title"/>
    </label>
    <label>
        Category ID:
        <select name="category_id">
            <option value="1">Sport</option>
            <option value="2">music</option>
            <option value="3">food</option>
        </select>
    </label>
    <button>Save</button>
</form>
<ul>
    <li>1-sport</li>
    <li>2-music</li>
    <li>3-food</li>
</ul>
<?php require "components/footer.php" ?>