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
   		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add post</h1>
                        <div class="col-md-6">
                            <div class="login-panel panel panel-default">
                                <div class="panel-body">
                                    <form  name="insertform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                        <fieldset>
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
                                            <button type="submit" class="btn btn-primary btn-lg" name="add_post">Add Posts</button>
                                        </fieldset>
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
    if(isset($_POST['add_post'])){
            $title= $_REQUEST["title"];
            
            $description= $_REQUEST["description"];
            
            $price= $_REQUEST["price"];
            
            $address= $_REQUEST["address"];
            $city_id= $_REQUEST["city_id"];
            $image= $_FILES["image"]["name"];
            $target_dir="../../upload/image";
            $target_file = $target_dir.basename($_FILES["image"]["name"]);
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
            } else {
                echo "file is not an image";
            }
            
            $created= strtotime(date('Y/m/d h:i:s'));
            if (empty($gender)) {
                $gender=1;
            }
            
            
            $sql = "INSERT INTO posts (title, description, price, address, city_id, image, created, modified) VALUES ('$title','$description', '$price', '$address', '$city_id', '$image', '$created', '$created')";
            $run = $conn->query($sql);
            if ($run===TRUE) {
                echo "success";
            }

    }
    ?>
    <?php  
    include '../block/script.php'; 
    ?>
</body>

</html>
