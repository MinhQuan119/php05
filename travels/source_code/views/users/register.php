<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>
    
    <!-- core CSS -->
    <link href="../../webroot/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../webroot/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../webroot/frontend/css/prettyPhoto.css" rel="stylesheet">
    <link href="../../webroot/frontend/css/animate.min.css" rel="stylesheet">
    <link href="../../webroot/frontend/css/main.css" rel="stylesheet">
    <link href="../../webroot/frontend/css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="../../webroot/frontend/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li class="active"><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Register</h2>
            </div> 
            <?php //include '../../connect_db.php'; 
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
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-body">
                                <form  name="insertform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" placeholder="Name" id="Name" name="name" type="text" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" placeholder="Email" id="email" name="email" type="email" >
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input class="form-control" placeholder="Password" id="password" name="password" type="password" >
                                        </div>
                                        <div class="form-group">
                                            <label>Phone:</label>
                                            <input class="form-control" placeholder="Phone" id="phone" name="phone" type="text" >
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" placeholder="Address" id="add" name="add" type="text" >
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" name="city_id" >
                                                <?php  
                                                        //include '../../connect_db.php';

                                                        // $sql = " SELECT name FROM city";
                                                        // $result = $conn->query($sql);
                                                        // if ($result->num_rows >0) {
                                                        //     while ($row = $result->fetch_assoc()) {
                                                        //         $id = $row['id'];
                                                        //         $name = $row['name'];
                                                        //         echo "<option value='$id'>$name</option>";
                                                        //     }
                                                        // }
                                                        // $conn->close();
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Personal image</label>
                                            <input  id="avatar" name="avatar" type="file">
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
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="../../webroot/frontend/js/jquery.js"></script>
    <script src="../../webroot/frontend/js/bootstrap.min.js"></script>
    <script src="../../webroot/frontend/js/jquery.prettyPhoto.js"></script>
    <script src="../../webroot/frontend/js/jquery.isotope.min.js"></script>
    <script src="../../webroot/frontend/js/main.js"></script>
    <script src="../../webroot/frontend/js/wow.min.js"></script>
</body>
</html>