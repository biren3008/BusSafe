<?php

if (isset($_GET['delete'])){

	$multiple = $_GET['multiple'];
	
	$i = 0;
	$sql = "DELETE FROM showeasycabs";
	
	foreach ($multiple as $item_id) { $i ++;
	
		if ($i == 1) {
			
			$sql .= " WHERE id = " . mysql_real_escape_string($item_id) . "";	
		}
		else {
			
			 $sql .= " OR id = " . mysql_real_escape_string($item_id) . "";
			
		}
	
	}
	//echo $sql;
	mysql_query($sql) or die(mysql_error());
	
	header("location: " . $_SERVER['PHP_SELF']);
	
	exit();
}

?>