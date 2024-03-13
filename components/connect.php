<?php
$host = 'hrishimysqlserver.mysql.database.azure.com';
$dbb_name = 'food_db';
$db_name ="mysql:host=$host;dbname=$dbb_name";
$user_name = 'hrishi@hrishimysqlserver';
$user_password = 'YourStrongPassword!';

$conn = new PDO($db_name, $user_name, $user_password);
echo "connected";
?>


