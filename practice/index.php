<?php
@ob_start();
@session_start();

require_once('config/config.php');
require_once('frontend/model/post.php');

if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'post';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'post';

$file = 'frontend/controller/'.$controller.'/'.$action.'.php';
if (file_exists($file)) {
    require($file);
} else {
    echo "khong co file";
}

mysql_close($db);
@ob_end_flush();
