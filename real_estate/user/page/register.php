<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../block/head.php' ?>
</head>

<body>
    <?php include '../../connect_db.php' ?>
    <?php include '../block/topmenu.php' ?>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Vui lòng nhập</h3>
                </div>
                <div class="panel-body">
                    <form  name="reg" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label>Họ:</label>
                                <input class="form-control" placeholder="Họ" id="first_name" name="first_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Tên:</label>
                                <input class="form-control" placeholder="Tên" id="last_name" name="last_name" type="text" value="">
                            </div>
                            <div class="form-group">
                                <label>Tên đăng nhập:</label>
                                <input class="form-control" placeholder="Tên đăng nhập" id="username" name="username" type="text" value="">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu:</label>
                                <input class="form-control" placeholder="Mật khẩu" id="password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input  id="avatar" name="avatar" type="file">
                            </div>
                            <div class="form-group">
                                <label>Ngày tháng năm sinh:</label>
                                <input class="form-control" id="birthday" name="birthday" type="date" value="">
                            </div>
                            <div class="form-group">
                                <label>Giới tính:</label>
                                <br>
                                <input type = "radio" value='1' id="gender" name="gender"> Nam
                                <br>
                                <input type = "radio" value='2' id="gender" name="gender"> Nữ
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" placeholder="Email" id="email" name="email" type="email" value="">
                            </div>
                            <div class="form-group">
                                <label>Điện thoại:</label>
                                <input class="form-control" placeholder="Điện thoại" id="phone" name="phone" type="text" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <!-- <input type="submit" id="Submit" name="register" value="Submit the form"> -->
                            <button type="submit" class="btn btn-primary btn-lg" name="register">Đăng ký</button>
                        </fieldset>
                    </form>
                    <?php  
                        if(isset($_POST['register'])){
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
    <?php include '../block/footer.php' ?>
</body>

</html>
