<?php
	function logged_in () {
		if (isset($_SESSION['email']) && isset($_SESSION['uid'])) {
			return true;
		} else {
			return false;
		}
	}
 
	function redirect_to ($url) {
		header("Location: {$url}");
	}
?>