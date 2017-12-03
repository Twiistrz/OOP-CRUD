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
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Register</h4>
                            <p class="category">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <div class="content">
                            <form action="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" class="form-control" value="" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" class="form-control" value="" placeholder="example@website.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info btn-fill pull-right" type="submit">Register</button>
                                <div class="clearfix"></div>
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
