<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">PHP OOP CRUD</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Signed in as {{ Username }}&nbsp;<i class="pe-7s-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="profile/">Your Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="help/">Help</a></li>
                        <li><a href="settings/">Settings</a></li>
                        <li><a href="logout/">Logout</a></li>
                    </ul>
                </li>
                <li class="separator hidden-lg"></li>
            </ul>
        </div>
    </div>
</nav>
