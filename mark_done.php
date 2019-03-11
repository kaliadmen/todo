<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/11/2019
 * Time: 5:14 PM
 */

require_once 'app/init.php';

if(isset($_GET['is'], $_GET['item'])){
    $is   = $_GET['is'];
    $item = $_GET['item'];
    $user = $_SESSION['user_id'];

    switch($is){
        case  'done':
            $markDoneQuery = $db->prepare("
                UPDATE items
                SET done = 1
                WHERE id = :item
                AND user = :user
            ");

            $markDoneQuery->execute([
                'item' => $item,
                'user' => $user,
            ]);
        break;

        case  'not-done':
            $markNotDoneQuery = $db->prepare("
                UPDATE items
                SET done = 0
                WHERE id = :item
                AND user = :user
            ");

            $markNotDoneQuery->execute([
                'item' => $item,
                'user' => $user,
            ]);
            break;
    }
}

header('Location: index.php');