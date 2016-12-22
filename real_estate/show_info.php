<!DOCTYPE html>
<html lang="en">
<body>
	<?php
	//chưa xong
		include 'connect_db.php';
			
			if (empty($first_name)) {
				echo "First name is blank";
			}
			else{
				echo "First name: $first_name";
			}
			echo "<br>";
			
			if (empty($last_name)) {
				echo "Last name is blank";
			}
			else{
				echo "Last name: $last_name";
			}
			echo "<br>";
			
			if (empty($username)) {
				echo "User name is blank";
			}
			else{
				echo "User name: $username";
			}
			echo "<br>";
			
			if (empty($password)) {
				echo "Password is blank";
			}
			else{
				echo "Password: $password";
			}
			echo "<br>";
			$target_dir="upload/";
			$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
			if (isset($_POST["register"])) {
				
				$check = getimagesize($_FILES["avatar"]["tmp_name"]);
				if ($check !== false) {
					move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file);
				} else {
					echo "file is not an image";
				}
			}
			if (empty($avatar)) {
				echo "Avatar is blank";
			}
			else{
				echo "Your avatar: <br>
				<img src='upload/$avatar' alt='avatar'>";
				
			}
			echo "<br>";

			if (empty($birthday)) {
				echo "Birthday is blank";
			}
			else{
				echo "Birthday: $birthday";
			}
			echo "<br>";
			
			if (!isset($gender)) {
				echo "Gender is blank";
			}
			else{
				echo "Giới tính: $gender";
			}
			echo "<br>";
			

			if (empty($email)) {
				echo "Email is blank";
			}
			else{
				echo "Email: $email";
			}
			echo "<br>";

			if (empty($phone)) {
				echo "Phone is blank";
			}
			else{
				echo "Phone: $phone";
			}
		}
	?>
</body>
</html>