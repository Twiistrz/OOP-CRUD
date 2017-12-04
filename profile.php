<?php
require_once 'core/init.php';
require_once 'views/header.php';

if (!$user->isLoggedIn()) {
    require_once 'views/login.php';
    require_once 'views/footer.php';
    exit();
}
?>
<div class="wrapper">
    <?php require_once 'views/sidebar.php';?>

    <div class="main-panel">
        <?php require_once 'views/navbar.php';?>

        <div class="content">

        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <b>Twiistrz</b>
                </p>
            </div>
        </footer>
    </div>
</div>
<?php
require_once 'views/footer.php';
