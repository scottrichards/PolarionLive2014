<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_bcContent = "content-stag-db-vip.babycenter.com";
$database_bcContent = "content";
$username_bcContent = "db_browse";
$password_bcContent = "ewooRoo1";
$bcContent = mysql_pconnect($hostname_bcContent, $username_bcContent, $password_bcContent) or trigger_error(mysql_error(),E_USER_ERROR); 
?>