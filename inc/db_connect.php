<?php

	session_start();
	$link = mysql_connect('127.0.0.1', 'phpland', 'x');
	if (!$link) {
	    die('Not connected : ' . mysql_error());
	}

	// make poll the current db
	$db_selected = mysql_select_db('poll', $link);
	if (!$db_selected) {
	    die ('Can\'t use poll : ' . mysql_error());
	}
?>
