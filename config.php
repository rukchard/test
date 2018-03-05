<?php

		$server="localhost";
		$user="root";
		$pass="hctr77hd";
		$db="hydro";

		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}

		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );
        mysql_query("use $db");
        mysql_query("SET NAMES UTF8");
?>
