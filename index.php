<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 9:23 PM
 */

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
        <ul class="items">
            <li>
                <span class="item done">Look around</span>
                <a href="#" class="done-btn">Done</a>
            </li>
            <li>
                <span class="item">Learn PHP</span>
            </li>
        </ul>

        <form action="add.php" method="post" class="item-add">
            <input type="text" name="item-to-add" placeholder="Enter new item here." class="input1" autocomplete="off">

            <input type="submit" value="Add" class="submit">
        </form>

    </div>
</body>
</html>
