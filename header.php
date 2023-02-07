<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Jeff Fabiny">

	<?php wp_head(); ?>
</head>

<body <?php if (is_front_page()) : ?> class="home" <?php endif; ?>>

	<?php if (is_front_page()) : ?>
		<div class="background"></div>
	<?php endif; ?>

	<div class="masthead">
		<div class="container">
			<i class="hamburger fas fa-bars"></i>
			<nav class="nav">
				<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
			</nav>
		</div>
	</div>

	<div class="wrapper">