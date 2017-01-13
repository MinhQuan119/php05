<?php
//load model

//data
$nid = intval($_GET['nid']);
$new = get_a_record('posts', $nid);

if (!$new) {
	show_404();
}

$title = $new['name'];
$post_categories = get_all('post_categories', array(
	'select' => 'id, name',
	'order_by' => 'position ASC'
));

//load view
require('frontend/views/news/view.php');