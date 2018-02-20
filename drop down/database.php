<?php

 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
 mysql_select_db($dbname);
 echo "<p>Connected to database</p>";

?>
