<?php 
	foreach ($customers->result_array() as $row) {
		echo "$row[name], $row[phone], $row[address]";
		echo "<br/>";
	}
?>