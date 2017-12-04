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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <div class="alert alert-warning alert-with-icon">
                                    <span class="pe-7s-attention" data-notify="icon"></span>
                                    <span>{{ Warning }}</span>
                                </div>
                                <div class="alert alert-info alert-with-icon">
                                    <span class="pe-7s-info" data-notify="icon"></span>
                                    <span>{{ Announcement }}</span>
                                </div>
                                <h4 class="title">{{ Introduction Title }}</h4>
                                <p class="category">{{ Introduction Subtitle }}</p>
                            </div>
                            <div class="content">
                                <div class="typo-line">
                                    <p>{{ Introduction Description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img src="assets/img/logo.jpg" alt="" class="avatar border-gray">
                                        <h4 class="title">
                                            {{ Fullname }}<br />
                                            <small>{{ Username }}</small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    {{ Bio }}
                                </p>
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
