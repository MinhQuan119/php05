<?php 
	function get_all($table){
		$sql="SELECT * FROM $table";
		$query=mysql_query($sql) or die(mysql_error());
		$data=array();
		if (mysql_num_rows($query)>0) {
			while ($row = mysql_fetch_assoc($query)) {
				$data[] = $row;
			}
			mysql_free_result($query);
		}
		return $data;
	}
 ?>