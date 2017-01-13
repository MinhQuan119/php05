<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function news_delete($id) {
    $id = intval($id);
    $news = get_a_record('posts', $id);
    $image = 'webroot/upload/news/'.$news['image'];
    if (is_file($image)) {
    	unlink($image);
    }
    $sql = "DELETE FROM posts WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}