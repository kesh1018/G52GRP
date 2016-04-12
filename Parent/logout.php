<?php
	session_start();
	
	// Logs Out
	if(session_destroy())
	{
		header("Location: index.php");
	}
?>