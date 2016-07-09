<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/8
 * Time: 15:40
 */

require_once '../database.php';

$conn = new database();

$id = $_GET['id'];
$state = $_GET['state'];

$sql = "update terms set state=$state where id = $id";

$conn->database_do($sql);

if($state == 1){
    session_start();
    $_SESSION['term_id'] = $id;
    echo 1;
}else {
    echo 0;
}