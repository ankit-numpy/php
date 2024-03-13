<?php

$db_name = 'mysql:host=hrishimysqlserver.mysql.database.azure.com:3306;dbname=food_db';
$user_name = 'hrishi@hrishimysqlserver';
$user_password = 'YourStrongPassword!';

$conn = new PDO($db_name, $user_name, $user_password);

?>


String jdbcURL = "jdbc:mysql://hrishimysqlserver.mysql.database.azure.com:3306/food_db";
