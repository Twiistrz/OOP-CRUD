<?php
require_once 'core/init.php';
require_once 'views/header.php';
?>
<div class="wrapper">
    <?php require_once 'views/sidebar.php';?>

    <div class="main-panel">
        <?php require_once 'views/navbar.php';?>

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Update User</h4>
                            <p class="category">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="content">
                            <form action="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" class="form-control" value="Twiistrz" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" class="form-control" value="emmanuelseete.2016@gmail.com" placeholder="example@website.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">First name</label>
                                            <input type="text" id="firstname" class="form-control" value="Emmanuel" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="middlename">Middle name</label>
                                            <input type="text" id="middlename" class="form-control" value="Salaum" placeholder="Middle name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="middlename">Last name</label>
                                            <input type="text" id="lastname" class="form-control" value="See Te" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bio">Bio</label>
                                            <textarea name="bio" rows="5" id="bio" class="form-control" placeholder="Tell us a little bit about this user."><?=Sanitize::escape('<b>a</b>');?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita omnis, facilis iusto. Reiciendis repellat dicta praesentium vitae dolores nihil aspernatur.</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info btn-fill pull-right" type="submit">Update User</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add User</h4>
                            <p class="category">Lorem ipsum dolor sit amet.</p>
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
                                            <label for="bio">Bio</label>
                                            <textarea name="bio" rows="5" id="bio" class="form-control" placeholder="Tell us a little bit about this user."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info btn-fill pull-right" type="submit">Add User</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Users<a href="roles.php?add" class="btn btn-info pull-right">+ Add User</a></h4>
                            <p class="category">Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Twiistrz</td>
                                        <td>See Te, Emmanuel Salaum</td>
                                        <td>emmanuelseete.2016@gmail.com</td>
                                        <td>
                                            <a href="roles.php?edit&id=#" class="btn btn-primary btn-simple btn-icon"><i class="pe-7s-pen"></i></a>
                                            <a href="roles.php?delete&id=#" class="btn btn-danger btn-simple btn-icon"><i class="pe-7s-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
