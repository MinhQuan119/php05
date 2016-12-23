<!DOCTYPE html>
<html lang="en">

<head>
    <?php include'../block/head.php' ?>
</head>

<body>
    <?php include '../../connect_db.php' ?>
    <?php  include '../block/topmenu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vui lòng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label>Tên đăng nhập:</label>
                                    <input class="form-control" placeholder="Tên đăng nhập" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu:</label>
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Lưu đăng nhập
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="button" class="btn btn-primary btn-lg">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../block/footer.php' ?>
</body>

</html>
