<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/6
 * Time: 9:23
 */

unset($_SESSION['user_id']);
unset($_SESSION['class_id']);

echo "<script type='text/javascript'>location = '../login.html'</script>";