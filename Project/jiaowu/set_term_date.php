<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/9
 * Time: 9:18
 */

require_once '../database.php';

$conn = new database();

session_start();
$term_id = $_SESSION['term_id'];

$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

$sql = "update terms set start_date = '$start_date',end_date = '$end_date' where id = $term_id";

$conn->database_do($sql);