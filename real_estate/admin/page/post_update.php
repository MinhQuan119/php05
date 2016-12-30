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
                                                <label>Title</label>
                                                <input class="form-control" placeholder="Title" id="title" name="title" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control" placeholder="Description" id="description" name="description" rows="7"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Price:</label>
                                                <input class="form-control" placeholder="Price" id="price" name="price" type="number" >
                                            </div>
                                            <div class="form-group">
                                                <label>Address:</label>
                                                <input class="form-control" placeholder="Address" id="address" name="address" type="text" >
                                            </div>
                                            <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control" name="city_id" >
                                                <?php  
                                                        include '../../connect_db.php';

                                                        $sql = " SELECT name FROM city";
                                                        $result = $conn->query($sql);
                                                        if ($result->num_rows >0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                echo "<option value='$id'>$name</option>";
                                                            }
                                                        }
                                                        $conn->close();
                                                    ?>
                                            </select>
                                        </div>
                                  
                                            <div class="form-group">
                                                <label>Post image</label>
                                                <input  id="image" name="image" type="file">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg" name="update_post">Update</button>
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
