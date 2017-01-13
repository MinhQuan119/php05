<?php
//load model

//data
$nid = intval($_GET['nid']);
$post_category = get_a_record('post_categories', $nid);
if (!$post_category) {
	show_404();
}

$title = $post_category['name'];

$post_categories = get_all('post_categories', array(
	'select' => 'id, name'
));

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'post_category_id='.$nid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'index.php?controller=news';
$total_rows = get_total('posts', $options);
$total = ceil($total_rows/$limit);

$news = get_all('posts', $options);
$pagination = pagination($url, $page, $total);

//load view
require('frontend/views/post_category/index.php');