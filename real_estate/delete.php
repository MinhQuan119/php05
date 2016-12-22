<?php
	include 'connect_db.php';  
	if(isset($_POST['delete'])){
			$id = $_REQUEST["id"];
			$sql = "DELETE FROM users WHERE id = ('$id')";
			if ($conn->query($sql)===TRUE) {
				echo "success";
			}

	}
?>