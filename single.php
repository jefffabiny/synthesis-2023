<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('LOCATION:/members');
	die();
}
?>
<?php get_header(); ?>

<div class="container">
	<div class="row mt-5">
		<div class="col-md">
			<h1 class="pb-5">Member Video Library</h1>
		</div>
	</div>
	<div class="row">

		<?php get_sidebar(); ?>

		<div class="col-sm-8 blog-main">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<h4 class="video-list-title"><?php the_title(); ?></h4>
					<?php
					the_content();
					?>

				<?php endwhile; ?>


			<?php endif; ?>

		</div>
	</div>
</div> <!-- /.container -->

<?php get_footer(); ?>