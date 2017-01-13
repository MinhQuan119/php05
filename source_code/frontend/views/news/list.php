<div class="row product-list">
	<?php if (empty($news)) : ?>
	<h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
	<?php endif; ?>
	<?php foreach($news as $new): ?>
	<div class="col-lg-4 col-sm-6">
		<div class="thumbnail">
			<p><?php echo $new['id']?></p>
			<p><?php echo $new['title']?></p>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<div class="text-center">
	<?php echo $pagination; ?>
</div>
	