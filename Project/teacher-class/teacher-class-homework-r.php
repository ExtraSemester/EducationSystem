<Html>
<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/5
 * Time: 11:07
 */

    session_start();
    if(isset($_SESSION['user_id'])) {
        require_once '../database.php';
        $id = $_POST['id'];
        $kind = $_POST['title'];
        $content = $_POST['content'];
        $db = new database();

        
    }
    else {
        echo "用户未登录!";
    }


?>
</Html>