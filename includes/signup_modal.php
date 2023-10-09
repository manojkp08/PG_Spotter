<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php">
                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded- rounded-pillpill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/adduser.png" alt="" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="text" class="form-control rounded-pill" name="full_name" placeholder="Full Name" maxlength="30" required>
                    </div>

                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded-pill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/phone.png" alt="" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="text" class="form-control rounded-pill" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                    </div>

                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded-pill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/email.png" alt="" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="email" class="form-control rounded-pill" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded-pill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/password.png" alt="" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="password" class="form-control rounded-pill" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="input-group form-group rounded-pill">
                        <div class="input-group-prepend rounded-pill">
                            <span class="input-group-text rounded-pill">
                                <img src="img/college.png" alt="" width="20px" height="20px">
                            </span>
                        </div>
                        <input type="text" class="form-control rounded-pill" name="college_name" placeholder="College Name" maxlength="150" required>
                    </div>

                    <div class="form-group">
                        <span>I'm a</span>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                        <label for="gender-male">
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btnview rounded-pill">Create Account</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>Already have an account?
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                </span>
            </div>
        </div>
    </div>
</div>