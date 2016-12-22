<?php
	include 'connect_db.php';  
	if(isset($_POST['register'])){
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
			} else {
				echo "file is not an image";
			}
			
			$birthday= strtotime($_REQUEST["birthday"]);
			
			$gender= $_REQUEST["gender"];
			
			$created= strtotime(date('Y/m/d h:i:s'));
			if (empty($gender)) {
				$gender=1;
			}
			
			$email= $_REQUEST["email"];
			
			$phone= $_REQUEST["phone"];
			
			$sql = "INSERT INTO users (first_name, last_name, username, password, avatar, birthday, gender, email, phone,created,modified) VALUES ('$first_name','$last_name', '$username', '$password', '$avatar', '$birthday', '$gender', '$email', '$phone', '$created', '$created')";
			if ($conn->query($sql)===TRUE) {
				echo "success";
			}

	}	
?>