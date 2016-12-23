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
                        <h1 class="page-header">Delete user</h1>
                        <div class="col-md-4">
                            <div class="login-panel panel panel-default">
                                <div class="panel-body">
                                    <form  name="deleteform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                                <label>ID:</label>
                                                <input class="form-control" placeholder="id" id="id" name="id" type="number" autofocus>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg" name="delete">Delete</button>
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
    if(isset($_POST['delete'])){
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM users WHERE id = ('$id')";
            if ($conn->query($sql)===TRUE) {
                echo "success";
            }

    } 
    include '../block/script.php'; 
    ?>
</body>

</html>
