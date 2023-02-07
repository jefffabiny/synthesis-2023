<?php
session_start();
$password_error = false;
// session_destroy();
if (isset($_SESSION['login'])) {
    header('LOCATION:/video-library');
    die();
}
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    if ($password === get_theme_mod('synthesis_members_password_text')) {
        $_SESSION['login'] = true;
        header('LOCATION:/video-library');
        die();
    } else {
        $password_error = true;
    }
}
?>

<?php get_header(); ?>

<div class="container">

    <form class="member-form" action="" method="post">
        <div class="form-group">
            <input type="password" class="form-control" id="pwd" name="password" placeholder="enter password" required>
            <div class="password-help">This content is password protected. To view it please enter the password above.</div>
            <?php if ($password_error) { ?> <div class="alert alert-danger mt-3">Wrong password. See Casey Lamb about membership and access.</div> <?php } ?>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>

</div> <!-- /.row -->

<?php get_footer(); ?>