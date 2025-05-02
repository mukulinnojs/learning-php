

<!-- Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="includes/login.php" method="post">
                    <div class="mb-3">
                        <label for="login-email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="login-email" name="login-email" required>
                    </div>
                    <div class="mb-5">
                        <label for="login-pass" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="login-pass" name="login-pass" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Singup Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Signup</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="includes/signup.php" method="post">
                    <div class="mb-3">
                        <label for="signup-name" class="col-form-label">Full Name</label>
                        <input type="text" class="form-control" id="signup-name" name="signup-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="signup-email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="signup-email" name="signup-email" required>
                       
                    </div>
                    <div class="mb-3">
                        <label for="signup-pass" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="signup-pass" name="signup-pass" required>
                    </div>
                    <div class="mb-5">
                        <label for="signup-pass2" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signup-pass2" name="signup-pass2" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>