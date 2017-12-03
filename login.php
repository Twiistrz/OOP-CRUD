<?php
require_once 'core/init.php';
require_once 'views/header.php';
?>
<div class="wrapper">
    <?php require_once 'views/sidebar.php'; ?>

    <div class="main-panel">
        <?php require_once 'views/navbar.php'; ?>

        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Login</h4>
                            <p class="category">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <div class="content">
                            <form action="login.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" class="form-control" value="" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input type="checkbox" id="remember" class="form-control">
                                                <label for="remember">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-info btn-fill btn-block" type="submit">Login</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'views/footer.php';
