<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../block/head.php'; ?>
</head>
<body>
    <div id="wrapper">
        <?php include '../block/sidemenu.php'; ?>
        <div class="panel panel-default">
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User info</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <?php  
                                            echo "<tr>";
                                            echo "<td>id</td>";
                                            echo "<td>first_name</td>";
                                            echo "<td>last_name</td>";
                                            echo "<td>username</td>";
                                            echo "<td>avatar</td>";
                                            echo "<td>birthday</td>";
                                            echo "<td>gender</td>";
                                            echo "<td>email</td>";
                                            echo "<td>phone</td>";
                                            echo "<td>created</td>";
                                            echo "<td>modified</td>";
                                            echo "</tr>";
                                        ?>
                                    </thead>
                                    <tbody>
                                            <?php  
                                                include '../../connect_db.php';

                                                $sql = " SELECT * FROM users";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows >0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>".$row["id"]."</td>";
                                                        echo "<td>".$row["first_name"]."</td>";
                                                        echo "<td>".$row["last_name"]."</td>";
                                                        echo "<td>".$row["username"]."</td>";
                                                        echo "<td>".$row["avatar"]."</td>";
                                                        echo "<td>".date("d-m-Y",$row["birthday"])."</td>";
                                                        if ($row["gender"]==1) {
                                                            echo "<td>Nam</td>";
                                                        } else {
                                                            echo "<td>Nữ</td>";
                                                        }
                                                        
                                                        echo "<td>".$row["email"]."</td>";
                                                        echo "<td>".$row["phone"]."</td>";
                                                        echo "<td>".date("h:i:s d-m-Y",$row["created"])."</td>";
                                                        echo "<td>".date("h:i:s d-m-Y",$row["modified"])."</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                $conn->close();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php include '../block/script.php'; ?>
</body>
</html>