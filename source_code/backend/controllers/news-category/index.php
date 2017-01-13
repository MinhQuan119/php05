<?php
//load model
require_once('backend/models/post-categories.php');

if (isset($_POST['cid'])) {
	foreach ($_POST['cid'] as $cid) {
		$cid = intval($cid);
		post_categories_delete($cid);
	}
}

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset
);

$url = 'admin.php?controller=news-category';
$total_rows = get_total('post_categories', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'Danh mục tin';
$user = $_SESSION['user'];
$post_categories = get_all('post_categories', $options);
$pagination = pagination($url, $page, $total);

//load view
require('backend/views/news-category/index.php');