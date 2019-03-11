<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 9:23 PM
 */
require_once 'app/init.php';

$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user = :user
");

$itemsQuery->execute(
    ['user' => $_SESSION['user_id']]
);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Srisakdi" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Todo</title>
</head>
<body>
    <div class="list">
        <h1 class="header">To Do</h1>

        <?php if(!empty($items)) : ?>
        <ul class="items">
            <?php foreach ($items as $item):?>
                <li>
                    <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
                    <?php if(!$item['done']):?>
                    <a href="mark_done.php?is=done&item=<?php echo $item['id'] ?>" class="done-btn">Done</a>
                    <?php else: ?>
                        <a href="mark_done.php?is=not-done&item=<?php echo $item['id'] ?>" class="done-btn">Unmark</a>
                        <?php endif; ?>
                </li>

            <?php endforeach; ?>

        </ul>

        <?php else: ?>
            <p>No Items have been added yet.</p>
        <?php endif;?>

        <form action="add.php" method="post" class="item-add">
            <input type="text" name="item-to-add" placeholder="Enter new item here." class="input1" autocomplete="off">

            <input type="submit" value="Add" class="submit">
        </form>

    </div>
</body>
</html>
