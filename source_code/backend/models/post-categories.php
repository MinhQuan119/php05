<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function post_categories_delete($id) {
    $id = intval($id);

    //xóa sản phẩm
    require_once('backend/models/news.php');

    $options = array(
    	'select' => 'id',
    	'where' => 'news_category_id='.$id
    );
    $news = get_all('posts', $options);
    foreach ($news as $n) {
        news_delete($n['id']);
    }

    //xóa danh mục
    $sql = "DELETE FROM post_categories WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}