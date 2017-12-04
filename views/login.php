<div class="wrapper login-register">
    <div class="content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <div class="header text-center">
                        <h3 class="title">Sign in</h3>
                        <?=($filename != 'login') ? '<p class="category">You must sign in to continue.</p>' : false;?>
                    </div>
                    <hr />
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
                            </div>
                            <button class="btn btn-info btn-fill btn-block" type="submit">Sign in</button>
                            <a href="register.php" class="btn btn-primary btn-fill btn-block">Create New Account</a>
                        </form>
                    </div>
                </div>
                <div class="container-fluid">
                    <p class="copyright text-center text-gray">
                        <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <b>Twiistrz</b>
                    </p><!-- ./copyright -->
                </div>
            </div>
        </div>
    </div>
</div>
