<?php
//load model

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'index.php?controller=news';
$total_rows = get_total('posts', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'News page';
$news = get_all('posts', $options);
$pagination = pagination($url, $page, $total);
$post_categories = get_all('post_categories', array(
	'select' => 'id, name'
));

//load view
require('frontend/views/news/index.php');