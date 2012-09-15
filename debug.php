<?php
# Define function to print (or log) debug messages 
# environment variable is level greater than specified.
#
# To set debug active for levels over 2 use in main:
# define('DEBUG',2);

function pc_debug($message, $level = 0) {
	if (defined('DEBUG') && ($level > DEBUG)) {
		echo "<p class='debug'>".$message."</p>";
	}
}
?>