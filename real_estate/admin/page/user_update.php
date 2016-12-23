<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '../block/head.php'; ?>
</head>

<body>
    <?php include '../../connect_db.php'; ?>
    <div id="wrapper">
		<?php include '../block/sidemenu.php'; ?>
   		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Update user</h1>
                        <div class="col-md-4">
                            <div class="login-panel panel panel-default">
                                <div class="panel-body">
                                    <form  name="updateform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                                <label>ID:</label>
                                                <input class="form-control" placeholder="id" id="id" name="id" type="number" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>First name:</label>
                                                <input class="form-control" placeholder="First name" id="first_name" name="first_name" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Last name:</label>
                                                <input class="form-control" placeholder="Last name" id="last_name" name="last_name" type="text">
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
                                            <button type="submit" class="btn btn-primary btn-lg" name="update">Update</button>
                                        </fieldset>
                                    </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
	<?php
    if(isset($_POST['update'])){
            $id= $_REQUEST["id"];
            $first_name= $_REQUEST["first_name"];
            $last_name= $_REQUEST["last_name"];
            $username= $_REQUEST["username"];
            $password= $_REQUEST["password"];
            $avatar= $_FILES["avatar"]["name"];
            $target_dir="../../upload/";
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
    include '../block/script.php'; ?>
</body>

</html>
