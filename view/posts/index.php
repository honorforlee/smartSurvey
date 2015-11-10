<div class="container">

	<?php foreach ($posts as $k => $v) : ?>
		<h1><?php echo $v->title; ?></h1>
		<p><?php echo $v->content; ?></p>
	<?php  endforeach ?>
</div>