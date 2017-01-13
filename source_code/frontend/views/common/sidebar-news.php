<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            Danh mục
            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
        </h3>
    </div>
    <div class="list-group hidden-xs">
        <?php foreach ($post_categories as $post_category) {
            echo '<a href="index.php?controller=post_category&amp;nid='.$post_category['id'].'" class="list-group-item">'.$post_category['name'].'</a>';
        } ?>
    </div>
</div>