<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <img src="img/adduser.png" alt="signuplogo" width="20px" height="20px"><span>Signup</span>
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <img src="img/login.png" alt="signuplogo" width="20px" height="20px"><span>Login</span>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <div class='nav-name'>
                        Hi, <?php echo $_SESSION["full_name"] ?>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <img src="img/dashboard.png" alt="signuplogo" width="20px" height="20px"><span>Dashboard</span>
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <img src="img/login.png" alt="signuplogo" width="20px" height="20px"><span>Logout</span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>

<div id="loading">
</div>
