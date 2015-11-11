<div class="container">
<div class="row">
	<div class="col-md-8">
		<?php foreach ($pages as $k => $v) : ?>
			<h1><?php echo $v->title; ?></h1>
			<p><?php echo $this->getLines($v->content, 320); ?></p>
		<?php  endforeach ?>
	</div>
</div>

</div>