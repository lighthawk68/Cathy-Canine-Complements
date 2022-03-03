<?php
$db_host = "mysql";
$db_username = "admin";
$db_pass = "P@ssw0rd";
$db_name = "petstore";

mysql_connect("$db_host", "$db_username", "$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");
?>