<?php $title = "Login";
require_once "includes/header.php";
require_once "app/conn.php";

?>

<div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center" action="app/login.inc.php" method="POST">
        <img src="assets/abc.png" alt="ABC Logo" width="50%">
            <!-- <h1 class="mb-5 font-weight-light text-uppercase">Login</h1> -->
            <?php require_once "app/alert.php"; ?>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" id="user-name" name="user-name" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" id="user-password" name="user-password" placeholder="Password" required>
            </div>
            <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Password</label>
                </div>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" id="login-submit" name="login-submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Log in</button>
            <p class="mt-3 font-weight-normal">Don't have an account? <a href="register.php"><strong>Register Now</strong></a></p>
        </form>
    </div>

<?php require_once "includes/header.php"; ?>
   