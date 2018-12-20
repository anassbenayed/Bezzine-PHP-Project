<?php
/* Definitions, used as shortcuts */ 
$SETTINGS["mysql_database"] = 'bezzine';
$SETTINGS["USERS"] = 'users_login';

/* Connect to MySQL Bezzine*/
$connection = mysqli_connect("localhost","root","", "bezzine") or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
$db = mysqli_select_db($connection, $SETTINGS["mysql_database"]) or die ('request "Unable to select database."');
?>