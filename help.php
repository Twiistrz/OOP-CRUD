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
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Help</h4>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="typo-line">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias velit suscipit quae, ipsam id, at. Voluptas eum consequuntur ut rerum.
                                    </p>
                                </div>
                                <ul>
                                    <li>Lorem ipsum.</li>
                                    <li>Lorem ipsum.</li>
                                    <li>Lorem ipsum.</li>
                                    <li>Lorem ipsum.</li>
                                    <li>Lorem ipsum.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
