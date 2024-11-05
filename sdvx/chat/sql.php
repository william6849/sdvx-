<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sql = "..com";
$database_sql = "";
$username_sql = "";
$password_sql = "";
$sql = mysql_pconnect($hostname_sql, $username_sql, $password_sql) or trigger_error(mysql_error(),E_USER_ERROR); 
?>