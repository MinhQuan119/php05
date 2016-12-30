<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../block/head.php'; ?>
</head>

<body>
    <?php include '../../connect_db.php'; 
    function encrypt_pasword($password){
        $enc_password = md5($password);
        return $enc_password;
    }
    function check_empty($check){
        if (empty($check)) {
            return true;
        }else{
            return false;
        }
    }
    function check_birth($birthday){
        if (check_empty($birthday)) {//empty => $birthday=0 => now-birthday>18
            return true;
        }elseif (date('Y')-date('Y',$birthday)>=18) {
            return false;
        }else{
            return true;
        }
        
    }
    ?>
    <div id="wrapper">
		<?php include '../block/sidemenu.php'; ?>
   		<div class="panel panel-default">
            <div id="page-wrapper">
                <!-- <div class="container-fluid"> -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add user</h1>
                            <div class="col-md-4">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-body">
                                        <form  name="insertform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label>First name:</label>
                                                    <input class="form-control" placeholder="First name" id="first_name" name="first_name" type="text" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label>Last name:</label>
                                                    <input class="form-control" placeholder="Last name" id="last_name" name="last_name" type="text" >
                                                </div>
                                                <div class="form-group">
                                                    <label>User name:</label>
                                                    <input class="form-control" placeholder="Username" id="username" name="username" type="text" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Password:</label>
                                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Personal image</label>
                                                    <input  id="avatar" name="avatar" type="file">
                                                </div>
                                                <div class="form-group">
                                                    <label>Birthday:</label>
                                                    <input class="form-control" placeholder="Birthday" id="birthday" name="birthday" type="date" >
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label>Birthday</label>
                                                    <div class='input-group date' id='birthday'>
                                                        <input type='text' name="birthday" class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div> -->
                                                <div class="form-group">
                                                    <label>Gender:</label>
                                                    <br>
                                                    <input type = "radio" value='1' id="gender" name="gender"> Male
                                                    <br>
                                                    <input type = "radio" value='2' id="gender" name="gender"> Female
                                                </div>
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input class="form-control" placeholder="Email" id="email" name="email" type="email" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone:</label>
                                                    <input class="form-control" placeholder="Phone" id="phone" name="phone" type="text" >
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg" name="register">Register</button>
                                            </fieldset>
                                        </form>
                                        <?php 
                                            if(isset($_POST['register'])){
                                                    $first_name= $_REQUEST["first_name"];
                                                    
                                                    $last_name= $_REQUEST["last_name"];
                                                    
                                                    $username= $_REQUEST["username"];
                                                    
                                                    $password= $_REQUEST["password"];
                                                    
                                                    $avatar= $_FILES["avatar"]["name"];
                                                    $target_dir="../../upload/avatar";
                                                    $target_file = $target_dir.basename($_FILES["avatar"]["name"]);
                                                    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
                                                    if ($check !== false) {
                                                        move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file);
                                                    } else {
                                                        echo "file is not an image";
                                                    }
                                                    
                                                    $birthday= strtotime($_REQUEST["birthday"]);
                                                    if(check_birth($birthday)){
                                                        echo "Please insert birthday";
                                                        exit();
                                                    } 
                                                    $gender= $_REQUEST["gender"];
                                                    
                                                    $created= strtotime(date('Y/m/d h:i:s'));
                                                    if (empty($gender)) {
                                                        $gender=1;
                                                    }
                                                    
                                                    $email= $_REQUEST["email"];
                                                    
                                                    $phone= $_REQUEST["phone"];
                                                    
                                                    $sql = "INSERT INTO users (first_name, last_name, username, password, avatar, birthday, gender, email, phone,created,modified) VALUES ('$first_name','$last_name', '$username', '$password', '$avatar', '$birthday', '$gender', '$email', '$phone', '$created', '$created')";
                                                    $run = $conn->query($sql);
                                                    if ($run===TRUE) {
                                                        echo "success";
                                                    }

                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
        <!-- /#page-wrapper -->
    </div>
	<?php  
        include '../block/script.php'; 
    ?>
</body>

</html>
