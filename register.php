<?php
require_once 'core/init.php';
require_once 'views/header.php';
?>
<div class="wrapper login-register">
    <div class="content">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <div class="header">
                        <h3 class="title text-center">Sign up</h3>
                    </div><!-- ./header -->
                    <hr />
                    <div class="content">
                        <form action="register.php" method="post">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" class="form-control" value="" placeholder="Pick a Username">
                                    </div>
                                </div>

                            </div><!-- ./row -->
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" class="form-control" value="" placeholder="you@example.com">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="Create a password">
                                    </div>
                                </div>

                            </div><!-- ./row -->
                            <button class="btn btn-info btn-fill btn-block" type="submit">Register</button>
                            <a href="<?=$url;?>/login/" class="btn btn-info btn-block">Already have an account? Login</a>
                            <div class="clearfix"></div>
                        </form>
                    </div><!-- ./content -->
                </div><!-- ./card -->
                <div class="container-fluid">
                    <p class="copyright text-center text-gray">
                        <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <b>Twiistrz</b>
                    </p><!-- ./copyright -->
                </div>
            </div>

        </div><!-- ./row -->
    </div><!-- ./content -->
</div><!-- ./wrapper -->
<?php require_once 'views/footer.php'; ?>
