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

            <h4 class="video-list-title">All</h4>

            <?php
            $args = array(
                'post_type' => 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                while ($result->have_posts()) : $result->the_post(); ?>
                    <a class="video-link" href="<?php echo get_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
            <?php
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div> <!-- /.container -->

<?php get_footer(); ?>