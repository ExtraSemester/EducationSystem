<html>
<meta charset="utf-8"/>
<?php
				$html_table_a = <<<HTML
				<table border="1"  WIDTH=500>
				<tr>
				<th WIDTH=20% HEIGHT=50>id</th>
				<th WIDTH=40% HEIGHT=50>name</th>
				<th WIDTH=40% HEIGHT=50>password</th>
				</tr>
HTML;
				$html_table_b = <<<HTML
				</table>
HTML;

require_once 'database.php';//============================数据库相关

echo "读取教务管理员信息<br/>";
echo $html_table_a;
$my_db = new database();//============================数据库相关
$result = $my_db->database_get("select * from admin");//============================数据库相关
for($i = 0;$i < count($result);$i++) 
{
	echo "<tr><td HEIGHT=36>" . $result[$i]['id'] . "</td><td>" . $result[$i]['name'] . "</td><td>" . $result[$i]['password'] . "</td></tr><br/>";
}
echo $html_table_b;



$username = 'hfkjhdhf';
$password = 'yn4dx884y587';
echo "添加教务管理员账户<br/>";
$my_db->database_do("insert into admin(name,password)values('$username','$password')");//============================数据库相关
?>
</html>
