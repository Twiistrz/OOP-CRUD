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
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Profile</h4>
                        <p class="category">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="content">
                        <form action="settings.php?profile" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstname">First name</label>
                                        <input type="text" id="firstname" class="form-control" value="" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middlename">Middle name</label>
                                        <input type="text" id="middlename" class="form-control" value="" placeholder="Middle name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middlename">Last name</label>
                                        <input type="text" id="lastname" class="form-control" value="" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" class="form-control" value="Twiistrz" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <textarea name="bio" rows="5" id="bio" class="form-control" placeholder="Tell us a little bit about this user."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info btn-fill pull-right" type="submit">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Change Password</h4>
                        <p class="category">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="content">
                        <form action="settings.php?profile" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="oldpassword">Old Password</label>
                                        <input type="text" id="oldpassword" class="form-control" value="" placeholder="Old Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="newpassword">New Password</label>
                                        <input type="text" id="newpassword" class="form-control" value="" placeholder="New Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="confirmnewpassword">Confirm New Password</label>
                                        <input type="text" id="confirmnewpassword" class="form-control" value="" placeholder="Confirm New Password">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info btn-fill pull-right" type="submit">Update Password</button>
                            <div class="clearfix"></div>
                        </form>
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
