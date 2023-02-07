<div class="col-sm-4">
	<h4>Categories</h4>
	<a href="/video-library">view all</a> - <a href="#" class="toggle-categories">toggle categories <i class="fas fa-chevron-down"></i></a>
	<ul class="video-list">
		<?php wp_list_categories(array(
			'orderby'    => 'name',
			'show_count' => true,
		)); ?>
	</ul>
</div>