<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded-pill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/email.png" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="email" class="form-control rounded-pill" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded-pill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/password.png" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="password" class="form-control rounded-pill" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btnview rounded-pill">Login</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                    to register a new account
                </span>
            </div>
        </div>
    </div>
</div>
