<?php
$mySQL_host = 'localhost';
$mySQL_user = 'root';
$mySQL_pass = '';
$mySQL_db = 'my_metakata';
$mySQL_db_table = 'pickominousers';

if(!@mysql_connect($mySQL_host,$mySQL_user,$mySQL_pass) || !@mysql_select_db($mySQL_db)){
	die(mysql_error());
}
?>