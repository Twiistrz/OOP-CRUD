<div class="sidebar" data-color="green" data-image="assets/img/sidebar-bg.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                Twiistrz
            </a>
        </div>

        <ul class="nav">
            <li <?=($filename === 'index') ? 'class="active"' : false;?>>
                <a href="index.php">
                    <i class="pe-7s-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li <?=($filename === 'users') ? 'class="active"' : false;?>>
                <a href="users.php">
                    <i class="pe-7s-users"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </div>
</div>
