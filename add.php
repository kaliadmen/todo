<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/11/2019
 * Time: 12:11 AM
 */

require_once 'app/init.php';

if(isset($_POST['item-to-add'])){
    $item = trim($_POST['item-to-add']);
    $user = $_SESSION['user_id'];

    if(!empty($item)){
        $addQuery = $db->prepare("
            INSERT INTO items (name, user, done, created)
            VALUES (:name, :user, 0, NOW())
        ");

        $addQuery->execute([
            'name' => $item,
            'user' => $user,
        ]);
    }
}

header('Location: index.php');