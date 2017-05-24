<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Articles';

$connect = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname,$connect);

?>


<form action="GET">
    <input type="text" name='author'>
    <input type="text" name='content'>
    <input type="submit" value='dodaj do bazy danych'>
</form>
