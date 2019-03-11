<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 11:16 PM
 */
session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=test;host=127.0.0.1', 'root', '1qaz@WSX3edc$RFV');


//Used for demo purposes
if(!isset($_SESSION['user_id'])){
    die('You are not a valid user');
}