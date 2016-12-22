<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php include 'connect_db.php' ?>
    <div class="container">
        <div class="row">
            <!-- Insert -->
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Insert</h3>
                    </div>
                    <div class="panel-body">
                        <form  name="insertform" action="insert.php" method="post" enctype="multipart/form-data">
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
                    </div>
                </div>
            </div>

            <!-- Uppdate -->
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update</h3>
                    </div>
                    <div class="panel-body">
                    <?php 
                    // echo $_SERVER['PHP_SELF']; 
                    ?>
                        <form  name="updateform" action="update.php" method="post" enctype="multipart/form-data">
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

            <!-- Delete -->
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Delete</h3>
                    </div>
                    <div class="panel-body">
                        <form  name="reg" action="delete.php" method="post" enctype="multipart/form-data">
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
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
