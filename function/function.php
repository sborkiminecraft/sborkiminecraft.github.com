<?php
	$mysqli = false;
	function connectDB() {
		GLOBAL $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "test1");
		$mysqli->query("set names 'UTF-8'")
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}
?>