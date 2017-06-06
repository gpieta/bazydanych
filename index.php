<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Articles';

$connect = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname,$connect);



if(isset($_GET['author']) and isset($_GET['content']))
{
    $author = $_GET['author'];
    $content = $_GET ['content'];

    mysql_query("INSERT INTO Article VALUES (null,'$author', '$content')");
}
?>


<form method="GET">
    <input type="text" name='author'>
    <input type="text" name='content'>
    <input type="submit" value='dodaj do bazy danych'>
</form>
