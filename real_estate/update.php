<?php
	include 'connect_db.php';  
	if(isset($_POST['update'])){
			$id= $_REQUEST["id"];
			$first_name= $_REQUEST["first_name"];
			$last_name= $_REQUEST["last_name"];
			$username= $_REQUEST["username"];
			$password= $_REQUEST["password"];
			$avatar= $_FILES["avatar"]["name"];
			$target_dir="upload/";
			$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
			if ($check !== false) {
				move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file);
			}
			$birthday= strtotime($_REQUEST["birthday"]);
			$gender= $_REQUEST["gender"];
			if (empty($gender)) {
				$gender=1;
			}
			$email= $_REQUEST["email"];
			$phone= $_REQUEST["phone"];
			$modified=strtotime(date('Y/m/d h:i:s'));
			$sql = "UPDATE users SET first_name=('$first_name'), last_name=('$last_name'), username=('$username'), password=('$password'), avatar=('$avatar'), birthday=('$birthday'), gender=('$gender'), email=('$email'), phone=('$phone'), modified=('$modified') WHERE users.id=('$id')";
			if ($conn->query($sql)===TRUE) {
				echo "success";
			}

	}		
?>